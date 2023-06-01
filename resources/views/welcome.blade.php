<!DOCTYPE html>
<html lang="en">

@include('Plantilla.Header')

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  

  <!-- Navbar -->
 @include('Plantilla.Navbar')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  @include('Plantilla.Sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
@include('Plantilla.Contenido')

@yield('Contenido')

    <!-- /.content-header -->
  </div>
 
 @include('Plantilla.Footer')

</div>
@include('Plantilla.Script')
</body>
</html>
