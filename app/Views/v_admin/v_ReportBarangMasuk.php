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
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
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
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                &emsp;<i class="fas fa-folder-open"></i>
                  <p>
                    Report
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('Home/ReportBarangMasuk')?>" class="nav-link active">
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
                      <p>laporan Mutasi</p>
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
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><i class="fas fa-file-import"></i> Laporan Barang Masuk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inventory</a></li>
              <li class="breadcrumb-item"><a href="#">Report</a></li>
              <li class="breadcrumb-item active">Laporan Barang Masuk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>

  <section class="content">
      <div class="container-fluid">
          <div class="card">
            <div class="card-body">
               <div class="row">
                  <div class="col-4">
                        <div class="form-group">
                          <label for="exampleSelectRounded0">Bussines Unit</label>
                          <select class="custom-select rounded-0" id="exampleSelectRounded0" required>
                              <option> </option>
                          </select>
                        </div>
                  </div>
                  <div class="col-4">
                        <div class="form-group">
                          <label for="exampleSelectRounded0">Depo</label>
                          <select class="custom-select rounded-0" id="exampleSelectRounded0" required>
                              <option> </option>
                          </select>
                        </div>
                  </div>
                  <div class="col-4">
                        <div class="form-group">
                          <label for="exampleSelectRounded0">Department</label>
                          <select class="custom-select rounded-0" id="exampleSelectRounded0" required>
                              <option> </option>
                          </select>
                        </div>
                  </div>
                  <div class="col-4">
                        <div class="form-group">
                          <label for="exampleSelectRounded0">Kode Barang</label>
                          <select class="custom-select rounded-0" id="exampleSelectRounded0" required>
                              <option> </option>
                          </select>
                        </div>
                  </div>
                  <div class="col-4">
                        <div class="form-group">
                          <label for="exampleSelectRounded0">Kode Inventaris</label>
                          <select class="custom-select rounded-0" id="exampleSelectRounded0" required>
                              <option> </option>
                          </select>
                        </div>
                  </div>
                  <div class="col-4">
                    <label>Nama Item / Barang</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-cube"></i></span>
                      </div>
                      <input type="text" autocomplete="off" class="form-control rounded-0"  id="exampleInputRounded0">
                      &nbsp;<button type="button" class="btn btn-info" data-toggle="modal" data-target="#CariItem"><i class="fas fa-search"></i></button>
                      &nbsp;<button type="reset" value="Reset" class="btn btn-danger"><i class="fas fa-eraser"></i></button>
                    </div>
                 </div>
                 
                </div>

                <!--FORM FILTER-->                
                      <div class="row">
                        <div class="col-12">
                          <div class="mb-3 row">
                            <label for="reservationdate" class="col-sm-1 col-form-label">Periode</label>
                              <div class="form-group">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar-day"></i></div>
                                          </div>
                                    </div>
                              </div>

                              <label for="reservationdate2" class="col-sm-1 col-form-label" align="center"> - </label>
                              <div class="form-group">
                                    <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate2"/>
                                          <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar-day"></i></div>
                                          </div>
                                    </div>
                              </div>
                          </div>
                      </div>
                <!--END FORM FILTER-->
               
                      <div class="col text-center">
                        <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fas fa-broom"></i>&nbsp; CLEAR</button>
                        <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fas fa-filter"></i>&nbsp; SEARCH</button>  
                      </div>
                    </div>
                    <br>
                    <div class="table-responsive-sm">
                        <table id="TabelReportBarangMasuk" class="table">
                        <thead>
                          <tr>
                            <th>Kd. Brg</th>
                            <th>Kd. Inv</th>
                            <th>BU</th>
                            <th>Depo</th>
                            <th>Dept.</th>
                            <th>Item</th>
                            <th>Qty</th>
                            <th>Satuan</th>   
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
                          </tr>
                          </tbody>
                        </table>
                    </div>
                    <br>
                    <div class="col text-center">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-file-pdf"></i>&nbsp; SAVE AS PDF</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fas fa-file-excel"></i>&nbsp; SAVE AS EXCEL</button>  
                        <button type="button" class="btn btn-primary"><i class="fas fa-print"></i>&nbsp; PRINT</button>
                    </div>
                        &nbsp;<button class="btn btn-info float-right" type="submit"  onclick="window.location.reload(true);"><i class="fas fa-sync-alt"></i></button>
                </div>
              </div>
  </section>
  


</div>
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
                  <input type="username" class="form-control" placeholder="Username" disabled>
              </div>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password Lama">
              </div>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password Baru">
              </div>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-check-circle"></i></span>
                  </div>
                  <input type="password" class="form-control" placeholder="Konfirmasi Password">
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">BACK</button>
              <button type="button" class="btn btn-success"><i class="fas fa-save"></i>&nbsp; SAVE CHANGES</button>
            </div>
          </div>
        </div>
  </div>

<!--MODAL CARI DATA BARANG-->
<div class="modal fade" id="CariItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title"><i>Master Item / Barang</i></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="table-responsive-sm">
                <table id="TabelCariItem" class="table">
                <thead>
                  <tr>
                    <th>Item Numb</th>
                    <th>Item Desc</th>
                    <th>Type Item</th>
                    <th>Stock</th>
                    <th>Satuan</th>     
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
                    <td class="text-left py-1 align-middle">
                      <div class="btn-group btn-group-sm">
                        <button type="button" class="btn btn-default"><i class="fas fa-check-circle"></i></button>
                      </div>
                    </td>
                  </tr>
                  </tbody>
                </table>
            </div>
             <!--END Cari Data Mutasi-->
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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

<!--MODAL Hapus Data-->
<div class="modal fade" id="HapusBM">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title">Alert!</h6>
            </div>
            <div class="modal-body">
              <p><strong><i>Data ini akan di HAPUS! Apakah anda yakin?</i></strong></p>
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

<!--MODAL LOG OUT-->
  <div class="modal fade" id="modal-logout">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
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
    $("#TabelBM").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#TabelBM_wrapper .col-md-6:eq(0)');
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
  $('#reservationdate').datetimepicker({
        format: 'L'
    });

  $('#reservationdate2').datetimepicker({
        format: 'L'
    });

  $('[data-mask]').inputmask()
</script>

</body>
</html>
