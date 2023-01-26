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
                  <div class="col-sm-6">
                     <h1 class="m-0"><img src="../asset/img/dashboard.png" width="40"> Dashboard</h1>
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                     </ol>
                  </div>

                  <style>
                     table {
                       font-family: arial, sans-serif;
                       border-collapse: collapse;
                       width: 100%;
                     }
                     
                     td, th {
                       border: 1px solid #dddddd;
                       text-align: left;
                       padding: 8px;
                     }
                     
                     tr:nth-child(even) {
                       background-color: #dddddd;
                     }
                     </style>
                     </head>
                     <body>
                        <br>
                        <br>
                     
                     <table>
                       <tr>
                         <td>Kilograms</td>
                         <td>46346</td>
                       </tr>

                       <tr>
                         <td>Straws</td>
                         <td>54490</td>
                       </tr>

                       <tr>
                         <td>Food wrappers</td>
                         <td>44182</td>
                       </tr>

                       <tr>
                         <td>Plastic Bottels</td>
                         <td>32456</td>
                       </tr>

                       <tr>
                         <td>Cigarette Butts</td>
                         <td>26165</td>
                       </tr>

                       <tr>
                         <td>Cans</td>
                         <td>16167</td>
                       </tr>

                       <tr>
                        <td>Plastic Bags - Grocery </td>
                        <td>16167</td>
                      </tr>

                      <tr>
                        <td>Plastic Bags -  Others</td>
                        <td>12753</td>
                      </tr>


                     </br>
                  </br>
                     
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- jQuery -->
   <script src="../asset/jquery/jquery.min.js"></script>
   <script src="../asset/js/adminlte.js"></script>
</body>

</html>