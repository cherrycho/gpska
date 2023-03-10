<?php
include('config.php');

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>SYSTEM GENERASI PEDULI SAMPAH</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="asset/css/adminlte.min.css">
   </head>
   <body class="hold-transition login-page">
      <div class="login-box">
         <!-- /.login-logo -->
         <div class="card card-outline card-success">
            <div class="card-header text-center">
               <a href="index.php" class="brand-link">
               <img src="asset/img/logo.jfif" alt="GPS Logo" width="200">
               </a>
            </div>
            <div class="card-body" >
               <form action="member/index.php" method="post">
                  <div class="input-group mb-3">
                     <input type="text" class="form-control" placeholder="Username">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-user"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input type="password" class="form-control" placeholder="Password">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-lock"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-6">
                        <button type="submit" class="btn btn-block" style="background-color: rgba(28,153,84);color: rgb(235,235,235)">Login</button>
                     </div>
                     <div class="col-6">
                        <a href="register.php" class="btn btn-block" style="background-color: rgba(28,153,84);color: rgb(235,235,235)">Register Account</a>
                     </div>
                     
                  </div>
               </form>
            </div>
            <!-- /.card-body -->
         </div>
         <!-- /.card -->
      </div>
      <!-- /.login-box -->
   </body>
</html>