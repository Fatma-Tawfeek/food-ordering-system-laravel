<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ZEEM - Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/css/adminlte.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('welcome')}}" class="nav-link">Website</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}" role="button">
          <i class="fa fa-sign-out-alt"></i>LOGOUT
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('adminlte/img/AdminLTELogo.png')}}" alt="ZEEM Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ZEEM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('adminlte/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link {{ (request()->segment(2) == 'dashboard') ? 'active' : ''  }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
          <li class="nav-item  {{(request()->segment(2) == 'orders') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{(request()->segment(2) == 'orders') ? 'active' : '' }}">
              <i class="nav-icon fas fa-motorcycle"></i>
              <p>
                Orders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('orders.new') }}" class="nav-link {{(request()->segment(3) == 'new-orders') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Orders</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('orders.current') }}" class="nav-link {{(request()->segment(3) == 'current-orders') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Current Orders</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('orders.previous')}}" class="nav-link {{(request()->segment(3) == 'previous-orders') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Previous Orders</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item {{ (request()->segment(2) == 'meals') || (request()->segment(2) == 'categories')  ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->segment(2) == 'meals') || (request()->segment(2) == 'categories')  ? 'active' : '' }}">
              <i class="nav-icon fas fa-coffee"></i>
              <p>
                Meals
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('meals.index')}}" class="nav-link {{(request()->segment(2) == 'meals') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Meals</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('categories.index') }}" class="nav-link {{(request()->segment(2) == 'categories') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Special Days</p>
                  </a>
                </li>
              </ul>
          </li>
         <li class="nav-item">
            <a href="{{ route('contacts.index') }}" class="nav-link {{(request()->segment(2) == 'contacts') ? 'active' : '' }}">
              <i class="nav-icon fas fa-envelope-open"></i>
              <p>
                Contacts
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link {{(request()->segment(2) == 'users') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-shield"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('settings.index')}}" class="nav-link {{(request()->segment(2) == 'settings') ? 'active' : '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
              @yield('subtilte')
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">
                @yield('title')
            </li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="#">zeem.com</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/js/adminlte.min.js')}}"></script>
<script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@stack('scripts')
</body>
</html>
