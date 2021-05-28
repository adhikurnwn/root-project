<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIMANIS | Dashboard User</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/daterangepicker/daterangepicker.css')?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')?>"> 
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')?>">
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
            <a href="<?= base_url('Home/dashboarduser')?>" class="nav-link">
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
            <a href="<?= base_url('Home/userPreventive')?>" class="nav-link active">
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
    <section class="content-header">
    </section>
    <section class="content">
      <div class="container-fluid">
        <!-- /.card --> 
        <!---BAATAS-->
        <div class="row">
            <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
              <h4><i class="fas fa-history"></i>&nbsp; History Preventive / Maintenance<span></h4>
              <hr>
                <table id="tabel1" class="table table-bordered table-striped" cellspacing="0" width="150%">
                  <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>Jenis Perawatan</th>
                    <th>Keterangan</th>
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
                    <td class="text-left py-1 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#detailData"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#approve"><i class="fas fa-share"></i></a>
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
  </div>
</section>
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1 class="m-0">Halaman Utama</h1>-->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
</div>

<!--MODAL APPROVE PREVENTIVE-->
<div class="modal fade" id="approve" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Alert!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><i><strong>Apakah data yang anda masukan sudah benar dan siap di approve?</strong></i></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="button" class="btn btn-primary">Ya</button>
      </div>
    </div>
  </div>
</div>

 <!--MODAL DETAIL DATA-->
 <div class="modal fade" id="detailData">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title"><i>Detail Preventive / Maintenance</i></h6>
            </div>
            <div class="modal-body">
              <!--Form JOB REQUEST-->
            <div class="row">
              <div class="col-md-4">
              <div class="form-group">
                  <label>Tanggal Dan Jam:</label>
                    <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                        <input type="text" class="form-control rounded-0 datetimepicker-input" data-target="#datetimepicker1" disabled/>
                        <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar-week"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <label for="exampleSelectRounded0">IT User</label>
                  <select class="custom-select rounded-0" id="exampleSelectRounded0" disabled>
                    <option> </option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleSelectRounded0">Department</label>
                  <select class="custom-select rounded-0" id="exampleSelectRounded0" disabled>
                    <option> </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectRounded0">Jenis Perawatan</label>
                  <select class="custom-select rounded-0" id="exampleSelectRounded0" disabled>
                    <option> </option>
                  </select>
                </div>
              </div>
              <!--BATAS ROW-->
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleSelectRounded0">User</label>
                  <select class="custom-select rounded-0" id="exampleSelectRounded0" disabled>
                    <option> </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectRounded0">Status Preventive</label>
                  <select class="custom-select rounded-0" id="exampleSelectRounded0" disabled>
                    <option> </option>
                  </select>
                </div>
              </div>
            </div>
            <hr>
            <h6 align="center"><i class="fas fa-tasks"></i>&nbsp;<strong> Checklist Preventive IT</strong><span></h6>
            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true"><strong>Perawatan Software</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false"><strong>Perawatan Hardware</strong></a>
              </li>
            </ul>
            <div class="tab-content" id="custom-content-above-tabContent">
              <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
              <table id="tabel1" class="table table-bordered table-striped" cellspacing="0" width="150%">
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
                          <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1" disabled>
                          <label for="customCheckbox1" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2. </td>
                    <td><i>Memastikan space / ruang disc C < 50%</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option2" disabled>
                          <label for="customCheckbox2" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>3. </td>
                    <td><i>Melakukan disc defragmenter</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="option3" disabled>
                          <label for="customCheckbox3" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>4. </td>
                    <td><i>Uninstal program yang tidak perlu</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option4" disabled>
                          <label for="customCheckbox4" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>5. </td>
                    <td><i>Pembersihan recycle bin</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox5" value="option5" disabled>
                          <label for="customCheckbox5" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>6. </td>
                    <td><i>Melakukan scan antivirus</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox6" value="option6" disabled>
                          <label for="customCheckbox6" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>7. </td>
                    <td><i>Melakukan backup data</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox7" value="option7" disabled>
                          <label for="customCheckbox7" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>8. </td>
                    <td><i>Performance secara umum</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox8" value="option8" disabled>
                          <label for="customCheckbox8" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>9. </td>
                    <td><i>File sharing</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox9" value="option9" disabled>
                          <label for="customCheckbox9" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>10. </td>
                    <td><i>Check IP Address PC</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox10" value="option10" disabled>
                          <label for="customCheckbox10" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="3" disabled></textarea>
                </div>
              </div>
              <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
              <table id="tabel1" class="table table-bordered table-striped" cellspacing="0" width="150%">
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
                          <input class="custom-control-input" type="checkbox" id="customCheckboxA" value="optionA" disabled>
                          <label for="customCheckboxA" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2. </td>
                    <td><i>Pembersihan motherboard</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckboxB" value="optionB" disabled>
                          <label for="customCheckboxB" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>3. </td>
                    <td><i>Pembersihan keyboard</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckboxC" value="optionC" disabled>
                          <label for="customCheckboxC" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>4. </td>
                    <td><i>Pembersihan RAM (Random Access Memory)</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckboxD" value="optionD" disabled>
                          <label for="customCheckboxD" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>5. </td>
                    <td><i>Pembersihan power supply</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckboxE" value="optionE" disabled>
                          <label for="customCheckboxE" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>6. </td>
                    <td><i>Pembersihan monitor</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckboxF" value="optionF" disabled>
                          <label for="customCheckboxF" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>7. </td>
                    <td><i>Pengecekan kondisi keyboard</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckboxG" value="optionG" disabled>
                          <label for="customCheckboxG" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>8. </td>
                    <td><i>Pengecekan network adapter</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckboxH" value="optionH" disabled>
                          <label for="customCheckboxH" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>9. </td>
                    <td><i>Pengecekan network adapter</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckboxI" value="optionI" disabled>
                          <label for="customCheckboxI" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>10. </td>
                    <td><i>Pengecekan kondisi mouse</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckboxJ" value="optionJ" disabled>
                          <label for="customCheckboxJ" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>11. </td>
                    <td><i>Pembersihan CD-ROM</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckboxK" value="optionK" disabled>
                          <label for="customCheckboxK" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>12. </td>
                    <td><i>Pembersihan fan processor</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckboxL" value="optionL" disabled>
                          <label for="customCheckboxL" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>13. </td>
                    <td><i>Pengecekan baterai CMOS</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckboxM" value="optionM" disabled>
                          <label for="customCheckboxM" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>14. </td>
                    <td><i>Pembersihan heatsink</i></td>
                    <td align="right"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckboxN" value="optionN" disabled>
                          <label for="customCheckboxN" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>15. </td>
                    <td><i>Pembersihan mouse</i></td>
                    <td align="left"> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckboxO" value="optionO" disabled>
                          <label for="customCheckboxO" class="custom-control-label">Selesai</label>
                        </div>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="3" disabled></textarea>
                </div>
              </div>
            </div>
            <!--END MODAL PREVENTIVE-->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default center-block" data-dismiss="modal">Kembali</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
  </div>

  <!--MODAL EDIT DATA-->
 <div class="modal fade" id="editData">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title"><i>Edit Job Request / Order</i></h6>
            </div>
            <div class="modal-body">
              <!--Form JOB REQUEST-->
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                  <label>Tanggal Dan Jam:</label>
                    <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                        <input type="text" class="form-control rounded-0 datetimepicker-input" data-target="#datetimepicker1" disabled/>
                        <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar-week"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                      <label for="exampleInputRounded0">User</label>
                      <input type="text" class="form-control rounded-0" id="exampleInputRounded0" disabled>
                </div>
                <div class="form-group">
                        <label>Permasalahan</label>
                        <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label>Tanggal Dan Jam Selesai:</label>
                    <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                        <input type="text" class="form-control rounded-0 datetimepicker-input" data-target="#datetimepicker2" disabled/>
                        <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar-week"></i></div>
                        </div>
                    </div>
                </div>
              </div>
              <!--BATAS ROW-->
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleSelectRounded0">Department</label>
                  <select class="custom-select rounded-0" id="exampleSelectRounded0">
                    <option> </option>
                    <option> </option>
                    <option> </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectRounded0">Job Request</label>
                  <select class="custom-select rounded-0" id="exampleSelectRounded0">
                    <option> </option>
                  </select>
                </div>
                <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="3" disabled></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleSelectRounded0">Status Job Request</label>
                  <select class="custom-select rounded-0" id="exampleSelectRounded0"  disabled>
                    <option> </option>
                  </select>
                </div>
              </div>
            </div>
            <!--END JOB REQUEST-->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
              <button type="button" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp; Simpan Perubahan</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
  </div>

  <!--MODAL UBAH PASSWORD-->
  <div class="modal fade" id="modal-ubahpass">
        <div class="modal-dialog">
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
              <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
              <button type="button" class="btn btn-danger">Ubah</button>
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
                  <th scope="col">Transaksi</th>
                  <th scope="col" width = "200px">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"> </th>
                  <td> </td>
                  <td><a href=" " class = "fas fa-hand-point-right"> Lihat detail transaksi</a></td>
                </tr>
              </tbody>
            </table>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
            </div>
          </div>
        </div>
  </div>

 <!--MODAL LOG OUT-->
  <div class="modal fade" id="modal-logout">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title">Alert!</h6>
            </div>
            <div class="modal-body">
              <p><strong><i>Anda yakin akan keluar dari sistem ini?</i></strong></p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              <button type="button" class="btn btn-danger">Ya</button>
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

<!-- PAGE PLUGINS -->
<!-- jQuery -->
<script src="<?= base_url('assets_adminlte/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets_adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
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
<script src="<?php echo base_url();?>/public/dist/js/demo.js"></script>
<script type="text/javascript">
  $(function () {
    $('#datetimepicker1').datetimepicker();
  });

  $(function () {
    $('#datetimepicker2').datetimepicker();
  });

</script>

<script>
 $(document).ready(function() {
    var table = $('#tabel1').DataTable( {
    scrollY: "300px",
    scrollX: true,
    scrollCollapse: true
    } );
  } );


</script>

</body>
</html>
