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
                <li class="breadcrumb-item active">List of user</li>
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

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <div class="ml-1 mt-1" style="font-weight: bold"><span class="fa fa-table"></span> User list</div> 
                        </h3>
                        <div class="card-tools">
                            <div class="input-group input-group-md" style="width: 300px;">
                            <input type="text" name="search-book" id="search-book" class="form-control float-right input-bg" placeholder="SEARCH BOOK">

                            <div class="input-group-append">
                                <button type="button" class="btn btn-default" id="search-book-icon"><i class="fa fa-search"></i></button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    </div>
                        
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
    </script>
    <script type="text/javascript" src="{{ asset('/js/contact/list.js') }}"></script>
@endsection