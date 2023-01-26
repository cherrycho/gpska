<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>SISTEM GENERASI PEDULI SAMPAH</title>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="../asset/css/adminlte.min.css">
   <link rel="stylesheet" href="../asset/css/style.css">
   <link rel="stylesheet" href="../asset/tables/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <style type="text/css">
      table tr td {
         padding: 0.3rem !important;
      }
      table tr td p{
         margin-top: -0.8rem !important;
         margin-bottom: -0.8rem !important;
         font-size: 0.9rem;
      }
      td a.btn{
         font-size: 0.7rem;
      }
   </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">
      <nav class="main-header navbar navbar-expand navbar-light" style="background-color: rgb(86,181,42)">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
         </ul>
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="nav-link" href="#" role="button">
                  <img src="../asset/img/avatar.png" class="img-circle" alt="User Image" width="40" style="margin-top: -8px;">
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-widget="fullscreen" href="../main.php">
                  <i class="fas fa-sign-out-alt"></i>
               </a>
            </li>
         </ul>
      </nav>
      <aside class="main-sidebar sidebar-light-primary">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
         <img src="../asset/img/logo.jfif" alt="GPS Logo" width="200">
         </a>
         <div class="sidebar">
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                     <a href="index.php" class="nav-link">
                        <img src="../asset/img/dashboard.png" width="30">
                        <p>
                           Dashboard
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="recycle-center.php" class="nav-link">
                        <img src="../asset/img/create litter.png" width="30">
                        <p>
                           Create Litter Reports
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="litter reports.php" class="nav-link">
                        <img src="../asset/img/litter reports.png" width="30">
                        <p>
                           Litter Reports
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="garbage-type.php class="nav-link">
                        <img src="../asset/img/communities.png" width="30">
                        <p>
                           Communities
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="records.php" class="nav-link">
                        <img src="../asset/img/profile.png" width="30">
                        <p>
                           My Profile
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <img src="../asset/img/report.png" width="30">
                        <p>
                           Graph Data
                        </p>
                        <i class="right fas fa-angle-left"></i>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="garbage-type-report.php" class="nav-link">
                              <i class="nav-icon far fa-circle"></i>
                              <p>Data Collected</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="income-report.php" class="nav-link">
                              <i class="nav-icon far fa-circle"></i>
                              <p>Income by Center</p>
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </nav>
         </div>
      </aside>
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                     <h1 class="m-0"><img src="../asset/img/profile.png" width="40">My Profile</h1>
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">My Profile</li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
             
            <form>
               <div class="col-md-0">
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <img src="../asset/img/user.png" width="100" style="border-radius: 5px">
                     <label for="exampleInputFile">Choose Profile</label>
                     <div class="input-group">
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="exampleInputFile">
                           <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="card-header">
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Name</label>
                           <input type="email" class="form-control" placeholder="Name">
                        </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Phone Number</label>
                           <input type="email" class="form-control" placeholder="Phone Number">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Country</label>
                           <input type="email" class="form-control" placeholder="Country">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Biography</label>
                           <input type="email" class="form-control" placeholder="Biography">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="card-header">
                           <span class="fa fa-heart"> Communities<hr></span><br>
                           <input type="submit" value="Create" <a href="garbage-type.php"></center><br><br>
                              

                              <center><input type="submit" value="Create" <a href="records.php"></center>
                                 <center><input type="submit" value="Edit" <a href="records.php"></center>

                        </div>
                     </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.card-body -->
      </form>
   </div>
</div>
<!-- /.container-fluid -->
</section>
</div>
<!-- /.card -->
</div>
<!-- /.login-box -->
</body>
</html>

            