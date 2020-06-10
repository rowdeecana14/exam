<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Http\Helpers\HashHelper;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->userModel = new UserModel();
    }

    public function list(Request $request) {
        $users  = $this->userModel->list();

        if($request->ajax()) {
            return response()->json([
                'success' => true,
                'users' => $users 
            ]);
        }
        
        return view('user.list');
    }

    public function create() {
        return view('user.create');
    }

    public function store(Request $request) {
        $fields_allowed = ['first_name', 'last_name', 'gender', 'email', 'username', 'password', 'password_confirmation'];
        $field_validator = [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' =>  ['required', 'string', 'max:255'],
            'gender' =>  ['required', 'string', 'max:255'],
            'username' =>  ['required', 'string', 'max:255', 'unique:users'],
            'email' =>  ['required', 'email', 'email', 'max:255', 'unique:users'],
            'password' => ['string', 'min:8', 'confirmed'],
            'password_confirmation' => ['string']
        ];

        if ($request->except($fields_allowed)) {
            return response()->json([
                'success' => false,
                'message' => 'Not acceptable fields',
                'fields_allowed' => $fields_allowed,
            ]);
        }

        

        $validator = Validator::make($request->all(), $field_validator);

        if($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ]);
        }

        $data = $request->all();
        $data['created_at'] = Carbon::now();
        $data['password'] = Hash::make($data['password']);
        unset($data['password_confirmation']);
        
        if($this->userModel->store($data)) {
            return response()->json([
                'success' => false,
                'message' => 'User not saved'
            ]);
        }
        
        return response()->json([
            'success' => true,
            'message' => 'User is successfully saved'
        ]);   
       
        return response()->json([
            'success' => true,
            'message' => 'User is successfully saved',
            'data' =>  $this->userModel->store($data)
        ]);   
    }

    public function edit($id) {
        $user_id = HashHelper::decode($id);
        $user = $this->userModel->edit($user_id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id) {
        $fields_allowed = ['_method', 'first_name', 'last_name', 'gender', 'email', 'username', 'password', 'password_confirmation'];
        $field_validator = [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' =>  ['required', 'string', 'max:255'],
            'gender' =>  ['required', 'string', 'max:255'],
            'username' =>  ['required', 'string', 'max:255'],
            'email' =>  ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string']
        ];
        $user_id = HashHelper::decode($id);
        $user = $this->userModel->edit($user_id);

        if($user == null) {
            return response()->json([
                'success' => false,
                'message' => 'User not found'
            ]);
        }

        if ($request->except($fields_allowed)) {
            return response()->json([
                'success' => false,
                'message' => 'Not acceptable fields',
                'fields_allowed' => $fields_allowed,
                'data' => $request->all()
            ]);
        }

        $validator = Validator::make($request->all(), $field_validator);

        if($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ]);
        }

        // return response()->json([
        //     'success' => true,
        //     'data' => 'User not found',
        //     'message' => $request
        // ]);
    }

    public function remove($id) {
        $user_id = HashHelper::decode($id);
        $is_deleted = $this->userModel->remove($user_id);

        if($is_deleted == false) {
            return response()->json([
                'success' => false,
                'message' => 'User not deleted',
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'User is successfully deleted',
        ]);       
    }
}
