<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Smartrash</title>
    <!-- Favicon-->u
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-green">
    <!-- Page Loader -->
  <!-- <?php include "../header.php"; ?>-->
    
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    
    <!-- #Top Bar -->
    

    <section class="content">
        <div class="container-fluid">
            
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ORDER DETAILS
                                
                            </h2>
                            
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                          <!--      <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NAME</th>
                                        <th>USER NAME</th>
                                        <th>ADDRESS</th>
                                        <th>CONTACT</th>
                                        <th>MANAGE</th>
                                    </tr>
                                </thead>-->
                                <tbody>
                                 <?php
  		include("connect.php");
  		$sql = ("SELECT * FROM  orders");
	
        $result = mysql_query($sql) or die(mysql_error()); 
					

            If(mysql_num_rows($result)>0)
            {$i=0;
                 while($row=mysql_fetch_array($result))
				 {  
	
                ?>
                <tr>
                <td><?php echo ++$i; ?> </td>
                <th>order id</th>
                  <td><?php echo $row['name']; ?></td> 
                  <td><?php echo $row['email']; ?></td> 
                  <td><?php echo $row['address']; ?></td> 
                  <td><?php echo $row['mobno']; ?></td> 
                  <td><a href="editcust.php?id=<?php echo $row['loginid']; ?>"> <i class="material-icons">border_color</i></a>
                   <a href="deletecust.php?id=<?php echo $row['loginid']; ?>"> <i class="material-icons">delete_forever</i></a></td>
                  </tr>
                <?php

                }
                }
                 ?>
                                
                                
                                </tbody>
                                <!--DATA FROM DATABASE VENAM-->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
            <!-- Striped Rows -->
            
            <!-- #END# Striped Rows -->
            <!-- Bordered Table -->
            
            <!-- #END# Bordered Table -->
            <!-- Hover Rows -->
            
            <!-- #END# Hover Rows -->
            <!-- Condensed Table -->
            
            <!-- #END# Condensed Table -->
            <!-- Contextual Classes -->
            
            <!-- #END# Contextual Classes -->
            <!-- With Material Design Colors -->
            
            <!-- #END# With Material Design Colors -->
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

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>
 <?php include "../header.php"; ?>
 
 