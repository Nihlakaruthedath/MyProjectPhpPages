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
   <?php include("connect.php"); ?>
   <?php include "../header.php"; ?>
   <?php $itemid=$_GET["id"];?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2> EDIT ITEM</h2>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                        <?php $q=mysql_query("select * from item where itemid='$itemid'");
						$row=mysql_fetch_array($q);?>
                        <div class="body">
                            <form id="form_validation" method="POST" action="" enctype="multipart/form-data">
                            
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name1" value="<?php echo $row['name'];?>"required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type=" text" class="form-control" name="rate" value="<?php echo $row['cost'];?>"required>
                                        <label class="form-label">Rate</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                                                     <label >Upload image</label>

                                <input type="file" name="filefield" id="filefield">
                                 </div>
                                </div>
                                
                                
                             <br />   
                                
                                <button class="btn btn-primary waves-effect" name="submit1"type="submit">EDIT</button>
                            </form>
                            <?php

  if(isset($_POST["submit1"]))
  {
	
	  $namee=$_POST["name1"];
	  
	  $rate=$_POST["rate"];
	$image = $_FILES["filefield"]["name"];
	move_uploaded_file($_FILES["filefield"]["tmp_name"],"photos/$image");
	if($image!=null)
	{
	  mysql_query("update item set `name`='$namee',`cost`='$rate',`itemimage`='$image' where `itemid`='$itemid'") or die(mysql_error());
	}
	else
	{
		mysql_query("update item set `name`='$namee',`cost`='$rate' where `itemid`='$itemid'") or die(mysql_error());
	}
	  ?>
      <script>
	 alert("Succesfully edited item");
	 window.location='manageitem.php';
	  </script>
      <?php 
	  
	  //header("location:index.php");
	  //echo "inserted";
  }
  ?>
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
