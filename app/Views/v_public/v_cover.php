<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIMANIS | Dashboard Service</title>

  <!-- Navbar Navigation -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets_adminlte/dist/css/adminlte.min.css')?>">
  <link href=<?= base_url('assets_adminlte/dist/img/olymplast.jpg')?> rel='shortcut icon'>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="<?= base_url('index.php') ?>" class="navbar-brand">
        <img src="<?= base_url('assets_adminlte/dist/img/olymplast.jpg')?>" alt="Olymplast Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIMANIS</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index.php" class="nav-link active" aria-current="page"> <i class="fas fa-home"></i>
            Home</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Home/contact') ?>" class="nav-link"><i class="fas fa-id-card-alt"></i>
            Contact</a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="<?= base_url('Register') ?>" class="nav-link"><i class="fas fa-user-plus"></i>
            Register / Daftar</a>
          </li>
        </ul>
      </div>
    </div>
    
  </nav>
  <!-- /.navbar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1 class="m-0"><strong>MODULE SISTEM MANAGEMENT INVENTORY IT ASSETS </strong></h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      <!-- Main content -->
    <div class="content">
      <div class="container">
      <div class="callout callout-danger">
        <h5><i class="fas fa-info"></i> Catatan:</h5>
        Silahkan mendaftarkan diri di <mark><a href="<?= base_url('Home/dashboarduser')?>">Menu Register / Daftar</a></mark> untuk dapat menggunakan <mark><a href="<?= base_url('Home/HeadPage')?>">fitur-fitur dibawah ini.</a></mark>
      </div>

      <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
              <div class="card h-100">
                  <img src="<?= base_url('assets_bootstrap/dist/img/2.jpg')?>" class="card-img-top" alt="..." width="200" height="300">
                <div class="card-body">
                <div class="alert alert-warning" role="alert">
                  <p align="justify"><em><mark>Perawatan</mark> yang dilakukan setiap bulan oleh tim IT pada sistem <mark>perangkat lunak (software) atau perangkat keras (hardware)</mark> ,
                agar sistem atau komponen tersebut dapat mempertahankan <mark>kapabilitas fungsionalnya</mark>.</em></p>
                </div>
                    <div class="d-grid gap-2" align="center">
                        <a type="button" href="<?= base_url('Login')?>" class="btn btn-outline-warning"><strong>PREVENTIVE / MAINTENANCE</strong></a>
                    </div>
                </div>
              </div>
          </div>
          <div class="col">
              <div class="card h-100">
                  <img src="<?= base_url('assets_bootstrap/dist/img/1.jpg')?>" class="card-img-top" alt="..." width="200" height="300">
                <div class="card-body">
                <div class="alert alert-info" role="alert">
                  <p align="justify"><em><mark>Pelayanan atau Support</mark> yang dilakukan oleh tim IT untuk memenuhi segala <mark>request / permintaan perbaikan</mark>
                hardware maupun software dan <mark>penggantian accesories</mark> ataupun <mark>pemasangan infrastruktur baru.</mark></em></p>
                </div>
                    <div class="d-grid gap-2" align="center">
                        <a type="button" href="<?= base_url('Login')?>" class="btn btn-outline-info"><strong>JOB ORDER</strong></a>
                    </div>
                </div>
              </div>
          </div>
          <div class="col">
              <div class="card h-100">
                  <img src="<?= base_url('assets_bootstrap/dist/img/3.png')?>" class="card-img-top" alt="..." width="200" height="300">
                <div class="card-body">
                <div class="alert alert-success" role="alert">
                  <p align="justify"><em><mark>Pengelolaan Idle Resources</mark> yang belum digunakan dan menunggu proses kedepannya 
                yang bertujuan untuk <mark>memaksimalkan penggunaan inventaris</mark> suatu perusahaan agar <mark>meminimalisir kerugian</mark>.</em></p>
                </div>
                    <div class="d-grid gap-2" align="center">
                        <a type="button" href="<?= base_url('Login')?>" class="btn btn-outline-success"><strong>INVENTORY CONTROL</strong></a>
                    </div>
                </div>
              </div>
          </div>
        </div>         

    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</br>
   
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      IT TEAM DEVELOPMENT
    </div>
    <!-- Default to the left -->
   2021. Hak cipta <a href="https://olymplast.co.id/"> <strong> PT. CAHAYA BINTANG PLASTINDO</a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/dist/js/demo.js"></script>
</body>
</html>
