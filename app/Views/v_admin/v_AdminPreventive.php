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
   <!-- daterange picker -->
   <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/daterangepicker/daterangepicker.css')?>">
   <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/select2/css/select2.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')?>">
   <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')?>">
   <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/fontawesome-free/css/all.min.css')?>">
   <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/dist/css/adminlte.min.css')?>">


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
            <a href="<?= base_url('Home/HeadPageAdmin')?>" class="nav-link">
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
                    <a href="<?= base_url('Home/AdminKodeBarang')?>" class="nav-link">
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
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
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
                <a href="<?= base_url('Home/AdminPreventive')?>" class="nav-link active">
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
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><i class="fas fa-tools"></i> Preventive</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">IT Support</a></li>
              <li class="breadcrumb-item active">Preventive</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>

  <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="card">
              <div class="card-body">
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#add_prev"><i class="fas fa-plus-circle"></i> CREATE NEW</a>
                &nbsp;<button class="btn btn-info float-right" type="submit"  onclick="window.location.reload(true);"><i class="fas fa-sync-alt"></i></button>
                <!--&nbsp;<button type="button" class="btn btn-warning" data-card-widget="card-refresh" data-source="<?= base_url('Home/AdminMutasi')?>" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i> REFRESH</button>-->
              <hr>
                <table id="tbl_prev" class="table table-bordered table-striped" cellspacing="0" width="150%">
                  <thead>
                  <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>BU</th>  
                    <th>Depo</th>
                    <th>Depart.</th>
                    <th>User</th>
                    <th>Next Date</th>
                    <th>Checklist</th>
                    <th>Status</th>  
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>   
                  <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td class="text-left py-1 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-default" data-toggle="modal" data-target="#approve_prev"><i class="fas fa-share-square"></i></a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#hapus_prev"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  </tbody>
                </table>
               </div>
              <!-- /.card-body -->
              </div>
            <!-- /.card -->
           </div>
          </div> 
        </div>
  </section>

<!--MODAL ADD DATA-->
<div class="modal fade" id="add_prev">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title"><i>Detail Preventive / Maintenance</i></h6>
            </div>
            <div class="modal-body">
              <!--Form JOB REQUEST-->
              <div class="row">
                  <div class="col-2">
                    <div class="form-group">
                    <label>Date</label>
                        <div class="input-group date" id="tgl_prev" data-target-input="nearest">
                            <input type="text" name="tgl_prev" class="form-control datetimepicker-input" data-target="#tgl_prev" disabled/>
                              <div class="input-group-append" data-target="#tgl_prev" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar-day"></i></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="form-group">
                      <label for="time_prev">Time</label>
                        <input type="time" name="time_prev" id="time_prev" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="col-4">
                        <div class="form-group">
                          <label for="buss_unit">Bussines Unit</label>
                          <select class="custom-select rounded-0" name="buss_unit" id="buss_unit">
                              <option> </option>
                          </select>
                        </div>
                  </div>
                  <div class="col-4">
                        <div class="form-group">
                          <label for="depo">Depo</label>
                          <select class="custom-select rounded-0" name="depo" id="depo">
                              <option> </option>
                          </select>
                        </div>
                  </div>
                  <div class="col-4">
                        <div class="form-group">
                          <label for="depart">Department</label>
                          <select class="custom-select rounded-0" name="depart" id="depart">
                              <option> </option>
                          </select>
                        </div>
                  </div>
                  <div class="col-4">
                        <div class="form-group">
                          <label for="username">User</label>
                          <select class="custom-select rounded-0" name="username" id="username">
                              <option> </option>
                          </select>
                        </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                    <label>Next Date Preventive</label>
                        <div class="input-group date" id="tgl_next_prev" data-target-input="nearest">
                            <input type="text" name="tgl_next_prev" class="form-control datetimepicker-input" data-target="#tgl_next_prev" />
                              <div class="input-group-append" data-target="#tgl_next_prev" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar-day"></i></div>
                              </div>
                        </div>
                    </div>
                  </div>
              </div>
            <hr>
            <h6 align="center"><i class="fas fa-tasks"></i>&nbsp;<strong> Checklist Preventive IT</strong><span></h6>
            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" name="prev_soft" id="prev_soft" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true"><strong>Perawatan Software</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" name="prev_hard" id="prev_hard" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false"><strong>Perawatan Hardware</strong></a>
              </li>
            </ul>
            <div class="tab-content" id="custom-content-above-tabContent">
              <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
              <table id="tbl_prev_soft" class="table table-bordered table-striped" cellspacing="0" width="150%">
                  <thead>
                  <tr align="center">
                    <th width="10px">No.</th>
                    <th>Deskripsi Perawatan Software</th>
                    <th>Checklist Pengerjaan</th>
                  </tr>
                  </thead>
                  <tbody>   
                  <tr>
                    <td>1. </td>  
                    <td><i>Disk clean up</i> </td>
                    <td align="left">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_soft" id="chbx_prev_soft1" value="Disk clean up">
                          <label for="chbx_prev_soft1" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2. </td>
                    <td><i>Memastikan space / ruang disc C < 50%</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_soft" id="chbx_prev_soft2" value="Memastikan space / ruang dis C < 50%">
                          <label for="chbx_prev_soft2" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>3. </td>
                    <td><i>Melakukan disc defragmenter</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_soft" id="chbx_prev_soft3" value="Melakukan disc defragmenter">
                          <label for="chbx_prev_soft3" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>4. </td>
                    <td><i>Uninstal program yang tidak perlu</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_soft" id="chbx_prev_soft4" value="Uninstal program yang tidak perlu">
                          <label for="chbx_prev_soft4" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>5. </td>
                    <td><i>Pembersihan recycle bin</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_soft" id="chbx_prev_soft5" value="Pembersihan recycle bin">
                          <label for="chbx_prev_soft5" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>6. </td>
                    <td><i>Melakukan scan antivirus</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_soft" id="chbx_prev_soft6" value="Melakukan scan antivirus">
                          <label for="chbx_prev_soft6" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>7. </td>
                    <td><i>Melakukan backup data</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_soft" id="chbx_prev_soft7" value="Melakukan backup data">
                          <label for="chbx_prev_soft7" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>8. </td>
                    <td><i>Performance secara umum</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_soft" id="chbx_prev_soft8" value="Performance secara umum">
                          <label for="chbx_prev_soft8" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>9. </td>
                    <td><i>File sharing</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_soft" id="chbx_prev_soft9" value="File sharing" di>
                          <label for="chbx_prev_soft9" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>10. </td>
                    <td><i>Check IP Address PC</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_soft" id="chbx_prev_soft10" value="Check ip address PC">
                          <label for="chbx_prev_soft10" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="3" name="ket_prev_soft" id="ket_prev_soft"></textarea>
                </div>
              </div>
              <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
              <table id="tbl_prev_hard" class="table table-bordered table-striped" cellspacing="0" width="150%">
                  <thead>
                  <tr align="center">
                    <th width="10px">No.</th>
                    <th>Deskripsi Perawatan Hardware</th>
                    <th>Checklist Pengerjaan</th>
                  </tr>
                  </thead>
                  <tbody>   
                  <tr>
                    <td>1. </td>  
                    <td><i>Pembersihan casing PC</i> </td>
                    <td align="left">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_hard" id="chbx_prev_hard" value="Pembersihan casing PC">
                          <label for="chbx_prev_hard" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2. </td>
                    <td><i>Pembersihan motherboard</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_hard" id="chbx_prev_hard2" value="Pembersihan motherboard">
                          <label for="chbx_prev_hard2" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>3. </td>
                    <td><i>Pembersihan keyboard</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_hard" id="chbx_prev_hard3" value="Pembersihan keyboard">
                          <label for="chbx_prev_hard3" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>4. </td>
                    <td><i>Pembersihan RAM (Random Access Memory)</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_hard" id="chbx_prev_hard4" value="Pembersihan RAM(Random Access Memory)">
                          <label for="chbx_prev_hard4" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>5. </td>
                    <td><i>Pembersihan power supply</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_hard" id="chbx_prev_hard5" value="Pembersihan power supply">
                          <label for="chbx_prev_hard5" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>6. </td>
                    <td><i>Pembersihan monitor</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_hard" id="chbx_prev_hard6" value="Pembersihan monitor">
                          <label for="chbx_prev_hard6" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>7. </td>
                    <td><i>Pengecekan kondisi keyboard</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_hard" id="chbx_prev_hard7" value="Pengecekan kondisi keyboard">
                          <label for="chbx_prev_hard7" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>8. </td>
                    <td><i>Pengecekan network adapter</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_hard" id="chbx_prev_hard8" value="Pengecekan network adapter">
                          <label for="chbx_prev_hard8" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>9. </td>
                    <td><i>Pengecekan kondisi mouse</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_hard" id="chbx_prev_hard9" value="Pengecekan kondisi mouse">
                          <label for="chbx_prev_hard9" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>10. </td>
                    <td><i>Pembersihan CD-ROM</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_hard" id="chbx_prev_hard10" value="Pembersihan CD-ROM">
                          <label for="chbx_prev_hard10" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>11. </td>
                    <td><i>Pembersihan fan processor</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_hard" id="chbx_prev_hard11" value="Pembersihan fan processor">
                          <label for="chbx_prev_hard11" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>12. </td>
                    <td><i>Pengecekan baterai CMOS</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <label for="chbx_prev_hard12" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>13. </td>
                    <td><i>Pembersihan heatsink</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_hard" id="chbx_prev_hard13" value="Pembersihan heatsink">
                          <label for="chbx_prev_hard13" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>14. </td>
                    <td><i>Pembersihan mouse</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="chbx_prev_hard" id="chbx_prev_hard14" value="Pembersihan mouse">
                          <label for="chbx_prev_hard14" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="3" name="ket_chbx_prev_hard" id="ket_chbx_prev_hard"></textarea>
                </div>
              </div>
            </div>
            <!--END MODAL PREVENTIVE-->
            </div>
            <div class="modal-footer justify-content-between">
              <div class="col text-center">
                <button type="button" class="btn btn-default center-block" data-dismiss="modal"><i class="fas fa-times-circle"></i>&nbsp; BACK</button>
              </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
  </div>

<!--END CONTENT-->
</div>


<!--MODAL Hapus Data-->
<div class="modal fade" id="hapus_prev">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content modal-dialog-centered">
            <div class="modal-header">
              <h6 class="modal-title">Alert!</h6>
            </div>
            <div class="modal-body">
              <p><strong><i>Data ini akan di HAPUS! Apakah anda yakin?</i></strong></p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times-circle"></i>&nbsp; BACK</button>
              <button type="button" class="btn btn-danger"><i class="fas fa-thumbs-up"></i>&nbsp; YES</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
  </div>
      <!-- /.modal -->


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
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times-circle"></i>&nbsp; BACK</button>
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
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times-circle"></i>&nbsp; BACK</button>
            </div>
          </div>
        </div>
  </div>

<!--MODAL APPROVE-->
<div class="modal fade" id="approve_prev">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content modal-dialog-centered">
            <div class="modal-header">
              <h6 class="modal-title">Alert!</h6>
            </div>
            <div class="modal-body">
              <p><strong><i>Data ini akan di APPROVE! Apakah data yang anda masukan sudah benar?</i></strong></p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times-circle"></i>&nbsp; BACK</button>
              <button type="button" class="btn btn-primary"><i class="fas fa-thumbs-up"></i>&nbsp; YES</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times-circle"></i>&nbsp; BACK</button>
              <button type="button" class="btn btn-danger"><i class="fas fa-thumbs-up"></i>&nbsp; YES</button>
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
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets_adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- Select2 -->
<script src="<?= base_url('assets_adminlte/plugins/select2/js/select2.full.min.js')?>"></script>
<!-- InputMask -->
<script src="<?= base_url('assets_adminlte/plugins/moment/moment.min.js')?>"></script>
<script src="<?= base_url('assets_adminlte/plugins/inputmask/jquery.inputmask.min.js')?>"></script>
<!-- date-range-picker -->
<script src="<?= base_url('assets_adminlte/plugins/daterangepicker/daterangepicker.js')?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets_adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets_adminlte/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets_adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets_adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?= base_url('assets_adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets_adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?= base_url('assets_adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets_adminlte/plugins/jszip/jszip.min.js')?>"></script>
<script src="<?= base_url('assets_adminlte/plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?= base_url('assets_adminlte/plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?= base_url('assets_adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?= base_url('assets_adminlte/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?= base_url('assets_adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets_adminlte/dist/js/adminlte.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets_adminlte/dist/js/demo.js')?>"></script>
<script>
  $(function () {
    $("#tbl_prev").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tbl_prev_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script type="text/javascript">
   //Date picker
  $('#date_prev').datetimepicker({
        format: 'L'
    });

  $('#date_next_prev').datetimepicker({
        format: 'L'
    });

  $('[data-mask]').inputmask()
</script>

</body>
</html>
