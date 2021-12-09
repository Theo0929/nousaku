<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>能作-Nousaku 網站管理後台</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/AdminLTE/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="/AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">首頁</a>
      </li>

    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">能作-Nousaku</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">王大明</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/backend/orders" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                訂單管理
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-header">前台設定</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                製品管理
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/backend/working" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>類別設定</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/backend/working" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>品牌設定</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/backend/productsIndex" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>製品上架</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/backend/working" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                禮贈
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/backend/working" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                特輯
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/backend/working" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                最新情報
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/backend/working" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                常見問答
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/backend/working" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                聯絡我們
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/backend/working" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                直營店
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('content')

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="">能作 - Nousaku</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- DataTables  & Plugins -->
<script src="/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/AdminLTE/plugins/jszip/jszip.min.js"></script>
<script src="/AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- jQuery -->
<script src="/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/AdminLTE/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/AdminLTE/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/AdminLTE/plugins/raphael/raphael.min.js"></script>
<script src="/AdminLTE/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/AdminLTE/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="/AdminLTE/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="/AdminLTE/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/AdminLTE/dist/js/pages/dashboard2.js"></script>

@yield('pageScript')



</body>
</html>
