<?php
include('config.php');
if (isset($_POST['id'])) {

	$id = $_POST['id'];
	$images = $_POST['images'];
	$firstName = $_POST['firstName'];
	$middleName= $_POST['middleName'];
	$lastName = $_POST['lastName'];
   $Gender = $_POST['Gender'];
   $Birthday = $_POST['Birthday'];
   $Contact = $_POST['Contact'];
   $Email = $_POST['Email'];
   $Address = $_POST['Address'];
   $Username = $_POST['Username'];
   $Password = $_POST['Password'];
	
	$sql = "INSERT INTO user (id,images,firstName,middleName,lastName,Gender,Birthday,Contact,Email,Address,Username,Password) VALUES ('$id','$images','$firstName','$middleName','$lastName','$Gender','$Birthday','$Contact','$Email','$Address','$Username','$Password')";
	// Melaksanakan pertanyaan sql dengan sambungan ke pangkalan data
	$hasil = mysqli_query($samb, $sql);
	// semak untuk melihat jika ada sebarang rekod dalam pangkalan data
	// papar mesej berjaya atau gagal simpan rekod baru
	if ($hasil) {
		echo "<script>alert('PENDAFTARAN AHLI BERJAYA');
		window.location='index.php'</script>";
	}else{
		echo "<script>alert('PENDAFTARAN AHLI GAGAL!');
		window.location='register.php'</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Driving-School-Management-System</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="asset/css/adminlte.min.css">
      <link rel="stylesheet" href="asset/css/style.css">
   </head>
   <body class="hold-transition login-page">
      <div class="login-box" style="width: 70%">
         <!-- /.login-logo -->
         <div class="card card-outline">
            <section class="content">
               <div class="container-fluid">
                  <div class="card">
                     <div class="card-header" style="background-color: rgba(28,153,84);color: rgb(235,235,235)">
                        <h3 class="card-title">Profile Information</h3>
                     </div>
                     <!-- /.card-header -->
                     <!-- form start -->
                     <form>
                              <div class="col-md-12">
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <img src="asset/img/profile.png" width="150" style="border-radius: 5px">
                                    <label for="exampleInputFile">Choose Profile</label>
                                    <div class="input-group">
                                       <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="exampleInputFile">
                                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-9">
                                 <div class="card-header">
                                    <span class="fa fa-user"> Profile Information</span>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <label for="exampleInputEmail1">First Name</label>
                                          <input type="text" class="form-control" id="firstName" placeholder="first name">
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <label for="exampleInputEmail1">Middle Name</label>
                                          <input type="text" class="form-control" id="middleName" placeholder="middle name">
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <label for="exampleInputEmail1">Last Name</label>
                                          <input type="text" class="form-control" id="lastName" placeholder="last name">
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <label>Gender</label>
                                          <select class="form-control" id="Gender">
                                             <option>Male</option>
                                             <option>Female</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <label for="exampleInputEmail1">Birthday</label>
                                          <input type="date" class="form-control" id="Birthday" placeholder="last name">
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <label for="exampleInputEmail1">Contact</label>
                                          <input type="number" class="form-control" id="Contact" placeholder="contact">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="exampleInputEmail1">Email</label>
                                          <input type="email" class="form-control" id="Email" placeholder="email">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="exampleInputEmail1">Address</label>
                                          <input type="text" class="form-control" id="Address" placeholder="address">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="card-header">
                                          <span class="fa fa-key"> Account</span>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="exampleInputEmail1">Username</label>
                                          <input type="text" class="form-control" id="Username" placeholder="username">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="exampleInputEmail1">Password</label>
                                          <input type="text" class="form-control" id="Password" placeholder="**********">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="row">
                        <div class="col-6">
                        <button type="submit" class="btn btn-block" style="background-color: rgba(28,153,84);color: rgb(235,235,235)">Register</button>
                     </div>
                     <div class="col-6">
                        <a href="index.php" class="text-center btn btn-block" style="font-family: fantasy;background-color: rgba(28,153,84);color: rgb(235,235,235)">Sign In</a>
                     </div>
                  </div><br>
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