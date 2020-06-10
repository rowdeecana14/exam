<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list() {
        $contacts = ContactModel::where('user_id', Auth::user()->id)->paginate(10);
        return view('contact.list', compact('contacts'));
    }

    public function store(Request $request) {
        if($request->ajax()) {
            $fields_allowed = ['name', 'company', 'phone', 'email'];
            $field_validator = [
                'name' => ['required', 'string', 'max:255'],
                'company' =>  ['required', 'string', 'max:255'],
                'phone' =>  ['required', 'string', 'max:255'],
                'email' =>  ['required', 'string', 'max:255', 'unique:contacts'],
            ];

            if ($request->except($fields_allowed)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Not acceptable fields',
                    'fields_allowed' => $fields_allowed,
                ]);
            }

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;
            $validator = Validator::make($data, $field_validator);

            if($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()
                ]);
            }

            $is_saved = ContactModel::create($data) ? true : false;

            if($is_saved == false) {
                return response()->json([
                    'success' => false,
                    'message' => 'Contact is not saved'
                ]);
            }
            
            return response()->json([
                'success' => true,
                'message' => 'Contact is successfully saved'
            ]);
        }
    }

    public function edit(Request $request, $id) {
        if($request->ajax()) {
            $contact = ContactModel::find($id);
            return response()->json([
                'success' => true,
                'data' => $contact
            ]);
        }
    }

    public function update(Request $request, $id) {
        if($request->ajax()) {
            $fields_allowed = ['_method', 'name', 'company', 'phone', 'email'];
            $field_validator = [
                'name' => ['required', 'string', 'max:255'],
                'company' =>  ['required', 'string', 'max:255'],
                'phone' =>  ['required', 'string', 'max:255'],
                'email' =>  ['required', 'string', 'max:255'],
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

            $is_updated = ContactModel::find($id)->update($request->all()) ? true : false;

            if($is_updated == false) {
                return response()->json([
                    'success' => false,
                    'message' => 'Contact is not updated'
                ]);
            }
            
            return response()->json([
                'success' => true,
                'message' => 'Contact is successfully updated'
            ]);
        }
    }

    public function destroy(Request $request, $id) {
        if($request->ajax()) {
            $is_deleted = ContactModel::find($id)->delete();

            if($is_deleted == false) {
                return response()->json([
                    'success' => false,
                    'message' => 'Contact is not deleted'
                ]);
            }
            
            return response()->json([
                'success' => true,
                'message' => 'Contact is successfully deleted'
            ]);
        }
    }
}
