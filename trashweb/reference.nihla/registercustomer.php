<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Smartrash</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="../plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-green">
    <!-- Page Loader -->
   <?php include "../header.php"; ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>REGISTER CUSTOMER</h2>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="confirm" required>
                                        <label class="form-label">Confirm Password</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mobno" required>
                                        <label class="form-label">Mobile Number</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="type_place" id="home" value="Home" class="with-gap">
                                    <label for="home">Home</label>

                                    <input type="radio" name="type_place" id="flat" value="Flat" class="with-gap">
                                    <label for="flat" class="m-l-20">Flat</label>
                                    <input type="radio" name="type_place" id="hospital" value="Hospital"class="with-gap">
                                    <label for="hospital" class="m-l-20">Hospital</label>
                                    <input type="radio" name="type_place" id="edu" value="Educational"class="with-gap">
                                    <label for="edu" class="m-l-20">Educational Institution</label>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="address" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Address</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" name="button1" type="Submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
            <!-- Advanced Validation -->
            
            <!-- #END# Advanced Validation -->
            <!-- Validation Stats -->
            
            <!-- #END# Validation Stats -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="../plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/forms/form-validation.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>




<?php
include("connect.php");
  if(isset($_POST["button1"]))
  {
	  $name=$_POST["name"];
	  $email=$_POST["email"];
	  $password=$_POST["password"];
	  $confirm=$_POST["confirm"];
	  if($password!=$confirm)
	  {?>
		  <script>
		  alert("Passwords do not match");
		  </script>
          <?php
		  exit;
	  }
	  $mobno=$_POST["mobno"];
	  $address=$_POST["address"];
	  $selected_radio= $_POST["type_place"];
	  if($selected_radio=="Home")
	  	{	$type="Home";
		}
		else if($selected_radio=="Flat")
	  	{	$type="Flat";
		}
		else if($selected_radio=="Hospital")
	  	{	$type="Hospital";
		}
		else if($selected_radio=="Educational")
	  	{	$type="Educational Institution";
		}
	  
	  mysql_query("insert into login(`username`,`password`,`usertype`) values ('$name','$password','customer')") or die(mysql_error());
	  $a=mysql_query("select * from login order by id desc");
	  $aa=mysql_fetch_array($a);
	  $lid=$aa['id'];
	  mysql_query("insert into signup(`loginid`,`name`,`address`,`mobno`,`email`,`password`,`loc_type`) values ('$lid','$name','$address','$mobno','$email','$password','$type')") or die(mysql_error());
	  ?>
      <script>
	  alert("Succesfully added");
	  </script>
      <?php 
	  
	  //header("location:index.php");
	  echo "inserted";
  }
  ?>