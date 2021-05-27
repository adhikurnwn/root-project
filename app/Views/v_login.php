<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=" ">
    <meta name="generator" content=" ">
    <title>SIMANIS | Login</title>

    <link href=<?= base_url('assets_adminlte/dist/img/olymplast.jpg')?> rel='shortcut icon'>
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
 
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-5 fw-bold lh-1 mb-3">S I M A N I S</h1>
        <p class="col-lg-10 fs-4" align="justify"><i>System Management Inventory IT Assets</i></p>
      </div>
      <div class="col-md-5 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light">
        <h1 class="display-12 fw-bold lh-5 mb-4">Login</h1>        
        <div class="form-floating mb-3">
            <input type="email" autocomplete="off" class="form-control" id="floatigEmail" placeholder="ex. steve@gmail.com">
            <label for="floatingUsername">Email</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" autocomplet="off" class="form-control" id="floatingPassword" placeholder="@$%jhon_due2509">
            <label for="floatingInput">Password</label>
        </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
          <hr class="my-4">
         

          <div class="text-center">
            <p>Belum mempunyai akun? <a class="small" href="<?= base_url('Register')?>">Silahkan klik disini!</a> </p>
          </div>
        </form>
      </div>
    </div>
  </div>
  
</main>

</body>

</html>
