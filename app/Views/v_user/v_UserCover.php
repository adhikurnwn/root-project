<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIMANIS | User</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
   <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/dist/css/adminlte.min.css')?>">
  <link href="<?= base_url('assets_adminlte/dist/img/olymplast.jpg')?>" rel="shortcut icon">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('Home/dashboarduser')?>" class="nav-link">Home</a>
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Accounting - Riki</span>
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
  <aside class="main-sidebar sidebar-light-light elevation-4">
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
          <a href="#" class="d-block">Accounting - Riki</a>
        </div>
      </div>
      <!-- SidebarSearch Form -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= base_url('Home/dashboarduser')?>" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>Dashboard</p>
              <i class=""></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Home/userJobOrder')?>" class="nav-link">
              <i class="nav-icon fas fa-clipboard-check"></i>
              <p>Job Order</p>
              <i class=" "></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Home/userPreventive')?>" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>Preventive / Maintenance</p>
              <i class=" "></i>
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><i class="fas fa-tachometer-alt"></i> Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-calendar-alt"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">PREVENTIVE / MAINTENANCE</span>
                <span class="info-box-number">
                  -
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-clipboard-check"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">JOB ORDER</span>
                <span class="info-box-number">-</span>              
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->        

          <!-- About Me Box -->
          <div class="card card-light col-6">
              <div class="card-header">
                <h3 class="card-title">INFORMASI INVENTARIS COMPUTER</h3>
              </div>
              <div class="card-body">
                <strong><i class="fas fa-desktop"></i> PERSONAL COMPUTER</strong>
                <br>
                <br>
                <form>
                  <div class="form-group row">
                    <p for="in_mdl_pc" class="col-sm-2 col-form-label">Model</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_mdl_pc" id="in_mdl_pc" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_merk_pc" class="col-sm-2 col-form-label">Merk</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_merk_pc" id="in_merk_pc" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_seri_pc" class="col-sm-2 col-form-label">Nomor Seri</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_seri_pc" id="in_seri_pc" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_proc_pc" class="col-sm-2 col-form-label">Processor</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_proc_pc" id="in_proc_pc" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_hdd_pc" class="col-sm-2 col-form-label">Hardisk</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_hdd_pc" id="in_hdd_pc" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_ssd_pc" class="col-sm-2 col-form-label">SSD</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_ssd_pc" id="in_ssd_pc" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_ram_pc" class="col-sm-2 col-form-label">RAM</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_ram_pc" id="in_ram_pc" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_os_pc" class="col-sm-2 col-form-label">OS</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_os_pc" id="in_os_pc" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_ip_pc" class="col-sm-2 col-form-label">IP Address</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_ip_pc" id="in_ip_pc" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_tgl_pc" class="col-sm-2 col-form-label">Tgl. Perolehan</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_tgl_pc" id="in_tgl_pc" disabled>
                    </div>
                  </div>
                </form>
               
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                <strong><i class="fas fa-print"></i> PRINTER</strong>
                <br>
                <br>
                <form>
                  <div class="form-group row">
                    <p for="in_mdl_pr" class="col-sm-2 col-form-label">Model</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_mdl_pr" id="in_mdl_pr" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_merk_pr" class="col-sm-2 col-form-label">Merk</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_merk_pr" id="in_merk_pr" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_seri_pr" class="col-sm-2 col-form-label">Nomor Seri</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_seri_pr" id="in_seri_pr" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_spek_pr" class="col-sm-2 col-form-label">Spesifikasi</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_spek_pr" id="in_spek_pr" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_tgl_pr" class="col-sm-2 col-form-label">Tgl. Perolehan</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_tgl_pr" id="in_tgl_pr" disabled>
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card card-light col-6">
              <div class="card-header">
                <h3 class="card-title">PT. CAHAYA BINTANG PLASTINDO (CBP)</h3>
              </div>
              <div class="card-body">
                <strong><i class="fas fa-laptop"></i> LAPTOP / NOTEBOOK</strong>
                <br>
                <br>
                <form>
                  <div class="form-group row">
                    <p for="in_mdl_nb" class="col-sm-2 col-form-label">Model</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_mdl_nb" id="in_mdl_nb" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_merk_nb" class="col-sm-2 col-form-label">Merk</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_merk_nb" id="in_merk_nb" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_seri_nb" class="col-sm-2 col-form-label">Nomor Seri</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_seri_nb" id="in_seri_nb" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_proc_nb" class="col-sm-2 col-form-label">Processor</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_proc_nb" id="in_proc_nb" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_hdd_nb" class="col-sm-2 col-form-label">Hardisk</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_hdd_nb" id="in_hdd_nb" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_ssd_nb" class="col-sm-2 col-form-label">SSD</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_ssd_nb" id="in_ssd_nb" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_ram_nb" class="col-sm-2 col-form-label">RAM</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_ram_nb" id="in_ram_nb" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_os_nb" class="col-sm-2 col-form-label">OS</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_os_nb" id="in_os_nb" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_ip_nb" class="col-sm-2 col-form-label">IP Address</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_ip_nb" id="in_ip_nb" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <p for="in_tgl_nb" class="col-sm-2 col-form-label">Tgl. Perolehan</p>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="in_tgl_nb" id="in_tgl_nb" disabled>
                    </div>
                  </div>
                </form>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
               <strong><i class="far fa-file-alt mr-1"></i> NOTES</strong>
               <br>
               <br>
                  <div class="form-group">
                      <textarea class="form-control" rows="3" name="note" id="note"> </textarea>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets_adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets_adminlte/dist/js/adminlte.min.js')?>"></script>

</body>
</html>
