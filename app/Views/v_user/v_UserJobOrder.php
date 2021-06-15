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
            <a href="<?= base_url('Home/userJobOrder')?>" class="nav-link active">
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
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><i class="fas fa-question-circle"></i> Job Order</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('Home/dashboarduser')?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Job Order</li>
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
                  <a class="btn btn-success" style="float:left" href="#" data-toggle="modal" data-target="#add_job_order">
                  <i class="fas fa-plus-circle"></i>&nbsp; CREATE NEW</a></span>
                  &nbsp;<button class="btn btn-info float-right" type="submit"  onclick="window.location.reload(true);"><i class="fas fa-sync-alt"></i></button>
                  <br>
                  <hr>
                <table id="tbl_order" class="table table-bordered table-striped" cellspacing="0" width="150%">
                  <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>Job Request</th>
                    <th>Permasalahan</th>
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
                    <td> </td>
                    <td class="text-left py-1 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#detail_job_order"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#edit_job_order"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-default" data-toggle="modal" data-target="#approve_job_order"><i class="fas fa-share-square"></i></a>
                        <a href="<?= base_url('Home/JobOrderPrint')?>" class="btn btn-secondary" target="_blank"><i class="fas fa-print"></i></a>
                        
                      </div>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <br>
              </div>
            </div>
          </div>
        </div> 
        </div>
  </div>
</section>

<!--MODAL APPROVE JOB ORDER-->
<div class="modal fade" id="approve_job_order" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modal-dialog-centered">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Alert!</h5>
      </div>
      <div class="modal-body">
        <p><i><strong>Data akan di APPROVE! Apakah anda yakin?</strong></i></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">BACK</button>
        <button type="button" class="btn btn-primary">YES</button>
      </div>
    </div>
  </div>
</div>

<!--MODAL TAMBAH DATA JOB ORDER-->
<div class="modal fade" id="add_job_order">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title"><i>Silahkan Lengkapi Data Dibawah ini!</i></h6>
            </div>
            <div class="modal-body">
              <!--Form JOB REQUEST-->
              <div class="row">
                  <div class="col-4">
                    <label>Nomor Ticket</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-ticket-alt"></i></span>
                      </div>
                      <input type="text" autocomplete="off" class="form-control rounded-0" name="no_ticket" id="no_ticket" placeholder="VALUE AUTO" disabled>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                    <label>Date Request</label>
                        <div class="input-group date" id="tgl_job_req" data-target-input="nearest">
                            <input type="text" name="tgl_job_req" class="form-control datetimepicker-input" data-target="#tgl_job_req"/>
                              <div class="input-group-append" data-target="#tgl_job_req" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar-day"></i></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="time_req">Time Request</label>
                        <input type="time" name="time_req" id="time_req" class="form-control">
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
                          <label for="job_req">Job Request</label>
                          <select class="custom-select rounded-0" name="job_req" id="job_req">
                              <option> </option>
                          </select>
                        </div>
                  </div>
                  <div class="col-4">
                        <div class="form-group">
                          <label for="status">Status</label>
                          <select class="custom-select rounded-0" name="status" id="status" disabled>
                              <option> IN PROSES </option>
                          </select>
                        </div>
                  </div>
                  <div class="col-12">
                    <label>Problem</label>
                      <div class="form-group">
                          <textarea class="form-control" rows="3" name="prob_order" id="prob_order"></textarea>
                      </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                    <label>Date Complete</label>
                        <div class="input-group date" id="tgl_job_complete" data-target-input="nearest">
                            <input type="text" name="tgl_job_complete" class="form-control datetimepicker-input" data-target="#tgl_job_complete" disabled/>
                              <div class="input-group-append" data-target="#tgl_job_complete" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar-day"></i></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="time_req">Time Complete</label>
                        <input type="time" name="time_req" id="time_req" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="col-4">
                        <div class="form-group">
                          <label for="status">Status</label>
                          <select class="custom-select rounded-0" name="status" id="status" disabled>
                              <option> </option>
                          </select>
                        </div>
                  </div>
                  <div class="col-12">
                    <label>Analisa</label>
                      <div class="form-group">
                          <textarea class="form-control" rows="3" name="analisa" id="analisa" disabled></textarea>
                      </div>
                  </div>
                </div>
             <!--END JOB REQUEST-->
            </div>
            <div class="modal-footer justify-content-between">
              <div class="col text-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">BACK</button>
                <button type="button" class="btn btn-success"><i class="fas fa-save"></i>&nbsp; SAVE</button> 
              </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
  </div>

 <!--MODAL DETAIL DATA-->
 <div class="modal fade" id="detail_job_order">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title"><i>Detail Job Request / Order</i></h6>
            </div>
            <div class="modal-body">
              <!--Form JOB REQUEST-->
              <div class="row">
                  <div class="col-4">
                    <label>Nomor Ticket</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-ticket-alt"></i></span>
                      </div>
                      <input type="text" autocomplete="off" class="form-control rounded-0" name="no_ticket" id="no_ticket" placeholder="VALUE AUTO" disabled>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                    <label>Date Request</label>
                        <div class="input-group date" id="tgl_job_req" data-target-input="nearest">
                            <input type="text" name="tgl_job_req" class="form-control datetimepicker-input" data-target="#tgl_job_req"/>
                              <div class="input-group-append" data-target="#tgl_job_req" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar-day"></i></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="time_req">Time Request</label>
                        <input type="time" name="time_req" id="time_req" class="form-control">
                    </div>
                  </div>
                  <div class="col-4">
                        <div class="form-group">
                          <label for="buss_unit">Bussines Unit</label>
                          <select class="custom-select rounded-0"  name="buss_unit" id="buss_unit">
                              <option> </option>
                          </select>
                        </div>
                  </div>
                  <div class="col-4">
                        <div class="form-group">
                          <label for="depo">Depo</label>
                          <select class="custom-select rounded-0"  name="depo" id="depo">
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
                          <label for="job_req">Job Request</label>
                          <select class="custom-select rounded-0" name="job_req" id="job_req">
                              <option> </option>
                          </select>
                        </div>
                  </div>
                  <div class="col-4">
                        <div class="form-group">
                          <label for="status">STATUS</label>
                          <select class="custom-select rounded-0" name="status" id="status" disabled>
                              <option> IN PROSES</option>
                          </select>
                        </div>
                  </div>
                  <div class="col-12">
                    <label>Problem</label>
                      <div class="form-group">
                          <textarea class="form-control" rows="3" name="prob_order" id="prob_order"></textarea>
                      </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                    <label>Date Complete</label>
                        <div class="input-group date" id="tgl_job_complete" data-target-input="nearest">
                            <input type="text" name="tgl_job_complete" class="form-control datetimepicker-input" data-target="#tgl_job_complete" disabled/>
                              <div class="input-group-append" data-target="#tgl_job_complete" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar-day"></i></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="time_req">Time Complete</label>
                        <input type="time" name="time_req" id="time_req" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="col-4">
                        <div class="form-group">
                          <label for="status">Status</label>
                          <select class="custom-select rounded-0" name="status" id="status" disabled>
                              <option> </option>
                          </select>
                        </div>
                  </div>
                  <div class="col-12">
                    <label>Analisa</label>
                      <div class="form-group">
                          <textarea class="form-control" rows="3" name="analisa" id="analisa" disabled></textarea>
                      </div>
                  </div>
                </div>
            <!--END JOB REQUEST-->
            </div>
            <div class="modal-footer justify-content-between">
              <div class="col text-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">BACK</button> 
              </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
  </div>

  <!--MODAL EDIT DATA-->
 <div class="modal fade" id="edit_job_order">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title"><i>Edit Job Request / Order</i></h6>
            </div>
            <div class="modal-body">
              <!--Form JOB REQUEST-->
              <div class="row">
                  <div class="col-4">
                    <label>Nomor Ticket</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-ticket-alt"></i></span>
                      </div>
                      <input type="text" autocomplete="off" class="form-control rounded-0" name="no_ticket" id="no_ticket" disabled>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                    <label>Date Request</label>
                        <div class="input-group date" id="tgl_job_req" data-target-input="nearest">
                            <input type="text" name="tgl_job_req" class="form-control datetimepicker-input" data-target="#tgl_job_req"/>
                              <div class="input-group-append" data-target="#tgl_job_req" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar-day"></i></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="time_req">Time Request</label>
                        <input type="time" name="time_req" id="time_req" class="form-control">
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
                          <label for="job_req">Job Request</label>
                          <select class="custom-select rounded-0" name="job_req" id="job_req">
                              <option> </option>
                          </select>
                        </div>
                  </div>
                  <div class="col-12">
                    <label>Problem</label>
                      <div class="form-group">
                          <textarea class="form-control" rows="3" name="prob_order" id="prob_order"></textarea>
                      </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                    <label>Date Complete</label>
                        <div class="input-group date" id="tgl_job_complete" data-target-input="nearest">
                            <input type="text" name="tgl_job_complete" class="form-control datetimepicker-input" data-target="#tgl_job_complete" disabled/>
                              <div class="input-group-append" data-target="#tgl_job_complete" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar-day"></i></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="time_req">Time Complete</label>
                        <input type="time" name="time_req" id="time_req" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="col-4">
                        <div class="form-group">
                          <label for="status">Status</label>
                          <select class="custom-select rounded-0" name="status" id="status" disabled>
                              <option> </option>
                          </select>
                        </div>
                  </div>
                  <div class="col-12">
                    <label>Analisa</label>
                      <div class="form-group">
                          <textarea class="form-control" rows="3" name="analisa" id="analisa" disabled></textarea>
                      </div>
                  </div>
                </div>
            <!--END JOB REQUEST-->
            </div>
            <div class="modal-footer justify-content-between">
              <div class="col text-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">BACK</button>
                <button type="button" class="btn btn-success"><i class="fas fa-save"></i>&nbsp; SAVE CHANGES</button> 
              </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
              <button type="button" class="btn btn-danger">Yes</button>
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
<script>
 $(document).ready(function() {
    var table = $('#tbl_order').DataTable( {
    scrollY: "300px",
    scrollX: true,
    scrollCollapse: true
    } );
  } );
</script>

<script type="text/javascript">
   //Date picker
  $('#tgl_job_req').datetimepicker({
        format: 'L'
    });

  $('#rtgl_job_complete').datetimepicker({
        format: 'L'
    });

  $('[data-mask]').inputmask()
</script>

</body>
</html>
