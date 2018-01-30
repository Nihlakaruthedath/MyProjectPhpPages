<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Smartrash</title>
    <!-- Favicon-->
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
  <?php //include  "../header.php"; ?>
    
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
   
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

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
                                <thead>
                                    <tr>
                                        <th>SL NO.</th>
                                        <th>ORDER ID</th>
                                        <th>DATE</th>
                                        <th>CUSTOMER NAME</th>
                                        <th>AGENT NAME</th>
                                        <th>VIEW</th>
                                        
                                    </tr>
                                </thead>
                                <!--DATA FROM DATABASE VENAM-->
                                <?php
                                include("connect.php");
  		$sql = ("SELECT * FROM  orders");
	
        $result = mysql_query($sql) or die(mysql_error()); 
					

            If(mysql_num_rows($result)>0)
            {$i=0;
                 while($row=mysql_fetch_array($result))
				 {  
					if($row['order_status']!="pending"){
                ?>
                <tr>
                <td><?php echo ++$i; ?> </td>
                  <td><?php echo $row['orderid']; ?></td> 
                  <td><?php echo $row['date']; ?></td> 
                  <td><?php echo $row['username']; ?></td>
                   <td><?php echo $row['agentname']; ?></td>
                  <td><a href="vieworder.php?id=<?php echo $row['orderid']; ?>"> <i class="material-icons">remove_red_eye</i></a>
                   </td>
                  </tr>
                <?php
					}
                }
                }
                 ?>
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