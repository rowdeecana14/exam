<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Rent book | CS</title>
  <link rel="shortcut icon" href="../../../img/app_logo.png">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('/vendor/font-awesome/css/font-awesome.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/vendor/adminlte/dist/css/adminlte.min.css') }}">
  <!-- Alertify CSS -->
  <link rel="stylesheet" href="{{ asset('/vendor/alertify/build/css/alertify.css') }}">
  <!-- Alertify themes css -->
  <link rel="stylesheet" href="{{ asset('/vendor/alertify/build/themes/bootstrap.css') }}">
  <!-- Custom css -->
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body class="hold-transition layout-navbar-fixed layout-footer-fixed layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-dark navbar-cyan">
    <div class="container">
      <a href="" class="navbar-brand">
        <img src="{{ asset('/images/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Contact System</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{ route('contact.list') }}" class="nav-link"><i class="fa fa-users"></i> Contacts </a>
          </li>
        </ul>
      </div>

      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
            <span class="user-info">
              <img class="user-image" src="{{ asset('/images/profile.jpg') }}"  alt="Users Photo">
              <label id="fullname"> {{ auth()->user()->name }} <span class=" fa fa-angle-down"></span></label>
            </span>
          </a>

          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="min-width: 200px;">
            <h6 class=" ml-4 mt-2">Settings</h6>
          <div class="dropdown-divider"></div>
           
            <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();" class="dropdown-item">
                <i class="fa fa-sign-out mr-2"></i> Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>

        </li>
      </ul>


    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
      @yield('content')
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline" style="margin-right: 60px">
      Version 1.0
    </div>
    <!-- Default to the left -->
    <strong class="ml-5">Copyright &copy; 2019-2020 <a href="">MINI LIBRARY SYSTEM</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('/vendor/adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
<!-- Alertify  JS -->
<script src="{{ asset('/vendor/alertify/build/js/alertify.js') }}"></script>
@yield('js')
</body>
</html>

