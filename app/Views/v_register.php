<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=" ">
    <meta name="generator" content=" ">
    <title>SIMANIS | Register</title>

<link href=<?= base_url('assets_adminlte/dist/img/olymplast.jpg')?> rel='shortcut icon'>

    <!-- Select2 -->
<link rel="stylesheet" href="<?php echo base_url('assets_adminlte/plugins/select2/css/select2.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets_adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')?>">

    <!-- Bootstrap core CSS -->
<link href="<?php echo base_url('assets_bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets_bootstrap/dist/css/heroes.css')?>" rel="stylesheet">
  </head>
  <body>
    
<main>
 
  <div class="container col-xl-10 col-xxl-10 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-5 fw-bold lh-1 mb-3">S I M A N I S</h1>
        <p class="col-lg-10 fs-4" align="justify"><i>System Management Inventory IT Assets</i> </p>
      </div>

      
      <?php if(isset($validation)):?>
            <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
        <?php endif;?>

      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" action="/register/save" method="post">
          <div class="form-group row">
          <h1 class="display-12 fw-bold lh-5 mb-4">Buat Akun</h1>
              <div class="form-floating mb-3 col-sm-6 mb-sm-0">
                 <input type="text" autocomplete="off" name="firstname" class="form-control" id="floatingFirstName" placeholder="ex. Steven" value="<?= set_value('firstname') ?>">
                 <label for="floatingFirstName">&nbsp; Nama Depan</label>
              </div>
              <div class="form-floating mb-3 col-sm-6">
                  <input type="text" autocomplete="off" class="form-control" name="lastname" id="floatingLastName" placeholder="ex. Jobs" value="<?= set_value('lastname') ?>">
                  <label for="floatingLastName">&nbsp; Nama Belakang</label>
              </div>
        </div>  
        <div class="form-floating mb-3">
            <input type="text" autocomplete="off" class="form-control" name="name" id="floatingUsername" placeholder="ex. Steve" value="<?= set_value('name') ?>">
            <label for="floatingUsername">Username</label>
        </div>
        
        <div class="form-floating mb-3">
            <input type="email" autocomplete="off" class="form-control" name="email" id="floatigEmail" placeholder="ex. steve@gmail.com" value="<?= set_value('email') ?>">
            <label for="floatingEmail">Email</label>
        </div>

        <div class="form-floating">
          <select class="form-select" name="divisi" aria-label="Floating label select example">
          <?php
           foreach ($data as $divisi){
    
          ?>
            <option selected disabled>Silahkan pilih department!</option>       
               <option value="<?php echo $divisi['nama_dept']?>"><?php echo $divisi['nama_dept']?></option>

          <?php
            }
          ?>
          </select>
            <label for="floatingSelect">Department</label>
        </div>
    </br>
        <div class="form-floating mb-3">
            <input type="password" autocomplete="off" name="password" class="form-control" id="floatingPassword" placeholder="@$%jhon_due2509" value="<?= set_value('password') ?>">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" autocomplete="off" name="confpassword" class="form-control" id="floatingConfPassword" placeholder="@$%jhon_due2509">
            <label for="floatingConfPassword">Konfirmasi Password</label>
        </div>

          <button class="w-100 btn btn-lg btn-primary" type="submit">DAFTAR</button>
          <hr class="my-4">
         

          <div class="text-center">
              <p>Sudah mempunyai akun? <a class="small" href="<?= base_url('Login')?>">Silahkan klik disini!</a> </p>
          </div>
        </form>
      </div>
    </div>
  </div>
  
</main>


<!-- jQuery -->
<script src="<?php echo base_url('assets_boostrap/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets_boostrap/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?php echo base_url('assets_boostrap/dist/js/bootstrap.bundle.min.js')?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets_adminlte/plugins/select2/js/select2.full.min.js')?>"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
</script>
      
</body>

</html>
