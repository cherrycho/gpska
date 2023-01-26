<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>SYSTEM GENERASI PEDULI SAMPAH</title>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="../asset/css/adminlte.min.css">
   <link rel="stylesheet" href="../asset/css/style.css">
   <link rel="stylesheet" href="../asset/tables/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <style type="text/css">
      table tr td {
         padding: 0.3rem !important;
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
            <a href="index.html" class="brand-link">
         <img src="../asset/img/logo.jfif" alt="GPS Logo" width="200">
         </a>
         <div class="sidebar">
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                     <a href="index.html" class="nav-link">
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
                     <a href="garbage-type.php" class="nav-link">
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
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="m-0"><img src="../asset/img/communities.png" width="40"> New Communities </h1>
                  </div>
                  <div class="col-sm-12">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Communities</li>
                     </ol>
                     <br><br><br>

                     <form>
                        <div class="col-md-0">
                     <div class="row">
                        <div class="col-md-3">
                           <div class="form-group">
                              <img src="../asset/img/user.png" width="100" style="border-radius: 50px">
                              <label for="exampleInputFile">Add Image</label>
                              <div class="input-group">
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                 </div>
                              </div>
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
                                    <label for="exampleInputEmail1">NAME OF COMMUNITIES</Title></label>
                                    <input type="email" class="form-control" placeholder="">
                                 </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">DESCRIPTION OF THE COMMNITIES</label>
                                    <input type="email" class="form-control" placeholder="">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">LOCATION</label>
                                    <input type="email" class="form-control" placeholder="">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">FACEBOOK</label>
                                    <input type="email" class="form-control" placeholder="">
                                 </div>
                              </div>
                              

                                 <style>
                                 .dropbtn {
                                    background-color:lightblue;
                                    color: black;
                                    padding: 16px;
                                    font-size: 16px;
                                    border: none;
                                  }
                                  
                                  .dropdown {
                                    position: relative;
                                    display: inline-block;
                                  }
                                  
                                  .dropdown-content {
                                    display: none;
                                    position: absolute;
                                    background-color: #f1f1f1;
                                    min-width: 160px;
                                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                                    z-index: 1;
                                  }
                                  
                                  .dropdown-content a {
                                    color: black;
                                    padding: 12px 16px;
                                    text-decoration: none;
                                    display: block;
                                  }
                                  
                                  .dropdown-content a:hover {background-color: #ddd;}
                                  
                                  .dropdown:hover .dropdown-content {display: block;}
                                  
                                  .dropdown:hover .dropbtn {background-color: lightblue;}
                                  </style>
                                  </head>
                              <center>
                              <input type="submit" value="Create" <a href="litter reports.php" </a></center>
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
                        
                      