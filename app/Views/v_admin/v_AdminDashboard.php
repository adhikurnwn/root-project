<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIMANIS | Administrator</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/dist/css/adminlte.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
   <!-- summernote -->
   <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/summernote/summernote-bs4.min.css')?>">


  <link href="<?= base_url('assets_adminlte/dist/img/olymplast.jpg')?>" rel="shortcut icon">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('Home/HeadPageAdmin')?>" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- Messages Dropdown Menu -->
      <!-- Dropdown - Alerts -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">-</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Pemberitahuan</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer" data-toggle="modal" data-target="#modal-notifikasi">Lihat semua pemberitahuan</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <span class="fas fa-tv"></span>
        </a>
      </li>
      
       <!-- Nav Item - User Information -->
       <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator - 1</span>
                  <img class="img-profile rounded-circle" width="20" height="20"
                     src="<?= base_url('assets_adminlte/dist/img/user2-160x160.jpg')?> ">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-ubahpass">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Ubah Password
                  </a>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-logout">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                   </a>
            </div>
     </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-light elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?= base_url('assets_adminlte/dist/img/olymplast.jpg')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>SIMANIS</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets_adminlte/dist/img/user2-160x160.jpg')?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator - 1</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="<?= base_url('Home/HeadPage')?>" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>Dashboard</p>
              <i class=""></i>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Pengaturan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                &emsp;<i class="fas fa-database"></i>
                  <p>
                    Master
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('Home/AdminRole')?>" class="nav-link">
                    &emsp;<i class="far fa-dot-circle nav-icon"></i>
                      <p>Role</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('Home/AdminStatus')?>" class="nav-link">
                    &emsp;<i class="far fa-dot-circle nav-icon"></i>
                      <p>Status</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('Home/AdminDepartment')?>" class="nav-link">
                    &emsp;<i class="far fa-dot-circle nav-icon"></i>
                      <p>Department</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Home/AdminHakAkses')?>" class="nav-link">
                &emsp;<i class="fas fa-fingerprint"></i>
                  <p>
                    Hak Akses
                  </p>
                </a>
              </li>
              
            </ul>
          </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-warehouse"></i>
              <p>
                Inventory
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                &emsp;<i class="fas fa-database"></i>
                  <p>
                    Master
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('Home/AdminBussinesUnit')?>" class="nav-link">
                    &emsp;<i class="far fa-dot-circle nav-icon"></i>
                      <p>Bussines Unit</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('Home/AdminDepo')?>" class="nav-link">
                    &emsp;<i class="far fa-dot-circle nav-icon"></i>
                      <p>Depo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('Home/AdminSupplier')?>" class="nav-link">
                    &emsp;<i class="far fa-dot-circle nav-icon"></i>
                      <p>Supplier</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('Home/AdminSatuan')?>" class="nav-link">
                    &emsp;<i class="far fa-dot-circle nav-icon"></i>
                      <p>Satuan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                    &emsp;<i class="far fa-dot-circle nav-icon"></i>
                      <p>Kode Barang</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('Home/AdminKodeInventaris')?>" class="nav-link">
                    &emsp;<i class="far fa-dot-circle nav-icon"></i>
                      <p>Kode Inventaris</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                &emsp;<i class="fas fa-exchange-alt"></i>
                  <p>
                    Transaction
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('Home/AdminItemMasuk')?>" class="nav-link">
                    &emsp;<i class="far fa-dot-circle nav-icon"></i>
                      <p>Barang Masuk</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('Home/AdminItemKeluar')?>" class="nav-link">
                    &emsp;<i class="far fa-dot-circle nav-icon"></i>
                      <p>Barang Keluar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('Home/AdminMutasi')?>" class="nav-link">
                    &emsp;<i class="far fa-dot-circle nav-icon"></i>
                      <p>Mutasi</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                &emsp;<i class="fas fa-folder-open"></i>
                  <p>
                    Report
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?= base_url('Home/ReportBarangMasuk')?>" class="nav-link">
                    &emsp;<i class="far fa-dot-circle nav-icon"></i>
                      <p>Laporan Barang Masuk</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('Home/ReportBarangKeluar')?>" class="nav-link">
                    &emsp;<i class="far fa-dot-circle nav-icon"></i>
                      <p>Laporan Barang Keluar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('Home/ReportMutasi')?>" class="nav-link">
                    &emsp;<i class="far fa-dot-circle nav-icon"></i>
                      <p>Laporan Mutasi</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-headset"></i>
              <p>
                IT Support
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Home/AdminJobOrder')?>" class="nav-link">
                &emsp;<i class="fas fa-file-signature"> </i>
                  <p>Job Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Home/AdminPreventive')?>" class="nav-link">
                &emsp;<i class="fas fa-signature"> </i>
                  <p>Preventive</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                &emsp;<i class="fas fa-folder-open"></i>
                  <p>
                    Report
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?= base_url('Home/ReportJobOrder')?>" class="nav-link">
                    &emsp;<i class="far fa-dot-circle nav-icon"></i>
                      <p>Report Job Order</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('Home/ReportPreventive')?>" class="nav-link">
                    &emsp;<i class="far fa-dot-circle nav-icon"></i>
                      <p>Report Preventive</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>65</h3>
                <p>USER ACTIVE</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-contacts"></i>
              </div>
              <a href="<?= base_url('Home/AdminHakAkses')?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div><!-- /.col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>2</h3>
                <p>USER INACTIVE</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-contact"></i>
              </div>
              <a href="<?= base_url('Home/AdminHakAkses')?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div><!-- /.col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>150</h3>
                <p>STOK ACTIVE</p>
              </div>
              <div class="icon">
                <i class="ion ion-cube"></i>
              </div>
              <a href="<?= base_url('Home/AdminItemKeluar')?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div><!-- /.col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>34</h3>
                <p>STOK INACTIVE</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-pulse"></i>
              </div>
              <a href="<?= base_url('Home/AdminItemMasuk')?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div><!-- /.col -->
          <div class="col-lg-6 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>121</h3>
                <p>JOB ORDERS REQUEST</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-speedometer-outline"></i>
              </div>
              <a href="<?= base_url('Home/AdminJobOrder')?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div><!-- /.col -->
          <div class="col-lg-6 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>70</h3>
                <p>PREVENTIVE / MAINTENANCE</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-alarm-outline"></i>
              </div>
              <a href="<?= base_url('Home/AdminPreventive')?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div><!-- /.col -->
      </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <!-- Info boxes -->
          <div class="col-5">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  To Do List
                </h3>
                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Belajar GOES di ruang Meeting pukul 13.00</span>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add Notes</button>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Diagram Laporan IT Support</h3>
                </div>
                <hr>
                <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 33.1%
                    </span>
                    <span class="text-muted">Since last month</span>
                  </p>
              </div>
                <div class="position-relative mb-4">
                  <canvas id="sales-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> Job Order
                  </span>
                  <span>
                    <i class="fas fa-square text-gray"></i> Preventive
                  </span>
              </div>
            </div>
          </div>
        </div>
        
      </div>
  </div>
  <!-- /.content -->
  <!-- /.content-wrapper -->

<!--CONTENT MODAL-->
<!--MODAL UBAH PASSWORD-->
  <div class="modal fade" id="modal-ubahpass">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title"><i>Pengaturan Akun</i></h6>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control" name="username" id="username" placeholder="Username" disabled>
              </div>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                  </div>
                  <input type="password" class="form-control" name="old_pass" id="old_pass" placeholder="Password Lama">
              </div>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  </div>
                  <input type="password" class="form-control" name="new_pass" id="new_pass" placeholder="Password Baru">
              </div>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-check-circle"></i></span>
                  </div>
                  <input type="password" class="form-control" name="pass_conf" id="pass_conf" placeholder="Konfirmasi Password">
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">BACK</button>
              <button type="button" class="btn btn-success"><i class="fas fa-save"></i>&nbsp; SAVE CHANGES</button>
            </div>
          </div>
        </div>
  </div>

<!--MODAL PEMBERITAHUAN-->
<div class="modal fade" id="modal-notifikasi">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title"><i>Pemberitahuan</i></h6>
            </div>
            <div class="modal-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Task</th>
                  <th scope="col" width = "200px">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"> </th>
                  <td> </td>
                  <td><a href=" " class = "fas fa-hand-point-right"> Lihat detail task</a></td>
                </tr>
              </tbody>
            </table>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">BACK</button>
            </div>
          </div>
        </div>
  </div>

<!--MODAL LOG OUT-->
  <div class="modal fade" id="modal-logout">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content modal-dialog-centered">
            <div class="modal-header">
              <h6 class="modal-title">Alert!</h6>
            </div>
            <div class="modal-body">
              <p><strong><i>Anda yakin akan keluar dari sistem ini?</i></strong></p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">BACK</button>
              <button type="button" class="btn btn-danger">YES</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
  </div>
      <!-- /.modal -->
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
    <div class="float-right d-none d-sm-inline">
      IT TEAM DEVELOPMENT
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a href="https://olymplast.co.id/">PT. CAHAYA BINTANG PLASTINDO</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- PAGE PLUGINS -->
<!-- jQuery -->
<script src="<?= base_url('assets_adminlte/plugins/jquery/jquery.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets_adminlte/plugins/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url('assets_adminlte/plugins/chart.js/Chart.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets_adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- Summernote -->
<script src="<?= base_url('assets_adminlte/plugins/summernote/summernote-bs4.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets_adminlte/dist/js/adminlte.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets_adminlte/dist/js/demo.js')?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets_adminlte/dist/js/pages/dashboard.js')?>"></script>
<script src="<?= base_url('assets_adminlte/dist/js/pages/dashboard3.js')?>"></script>

</body>
</html>
