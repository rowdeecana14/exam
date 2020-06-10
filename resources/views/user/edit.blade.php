@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Edit user</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid --> 
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10" style="margin: 0 auto;">    
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">
                        <div class="ml-1 mt-1" style="font-weight: bold"><span class="fa fa-user-plus"></span> Edit user</div> 
                    </h3>
                 
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form class="form-horizontal" id="form-user-edit">
                            @method('PUT')
                            <div class="form-group row">
                                <label for="first_name" class="col-sm-2 col-form-label">Firstname:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}" placeholder="Enter firstname">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="last_name" class="col-sm-2 col-form-label">Lastname:</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}" placeholder="Enter lastname">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-sm-2 col-form-label">Gender:</label>
                                <div class="col-sm-10">
                                    @if($user->gender == 'Male')
                                        <select class="form-control" id="gender" name="gender">
                                            <option value="" readonly>Select gender</option>
                                            <option selected>Male</option>
                                            <option>Female</option>
                                        </select>
                                    @elseif($user->gender == 'Female')
                                        <select class="form-control" id="gender" name="gender">
                                            <option value="" readonly>Select gender</option>
                                            <option>Male</option>
                                            <option selected>Female</option>
                                        </select>
                                    @else
                                        <select class="form-control" id="gender" name="gender">
                                            <option value="" selected readonly>Select gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    @endif
                                   
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Enter email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="username" class="col-sm-2 col-form-label">Username:</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" placeholder="Enter username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Password:</label>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                </div>
                            </div>
                            
                            <div class="form-password_confirmation row">
                                <label for="password" class="col-sm-2 col-form-label">Password confirm:</label>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mt-4 mb-2">
                                    
                                    <button type="submit" class="btn btn-outline-primary pull-right ml-2"><i class="fa fa-save"></i> Submit</button>
                                    <button type="reset" class="btn btn-outline-danger pull-right"><i class="fa fa-eraser"></i> Cancel</button>
                                </div>
                            </div> 
                         
                        </form>
                    </div>
                    <!-- /.card-header -->
                </div>
            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection

@section('js')
    <script type="text/javascript" >
       let route_user_update = '{{ route("user.update", HashHelper::encode($user->id)) }}';
    </script>
    <script type="text/javascript" src="{{ asset('/js/user/edit.js') }}"></script>
@endsection