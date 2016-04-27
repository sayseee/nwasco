<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to :: Nwasco Dashboard</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,500,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/dataTables.bootstrap.css" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.min.css"> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/grid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">   
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.2.3.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.idTabs.min.js"></script> 
	
    </head>
    <body>
	<div class="wrapper">
        <header>
            <div class="col-md-2" id="logo-dashboard"><img src="<?php echo base_url(); ?>images/logo.jpg" width="133" /></div>
            <div class="col-md-10" id="account-details">
            <?php

            if($level == "1")  
            { 
            ?>
 
               <ul class="pull-right">
                   <li>Welcome <a href="#"><strong><?php echo $fname;?></strong> <i class="fa fa-gear"></i></a></li>
                   <li><a href="home/logout">Logout <i class="fa fa-power-off"></i></a></li> 
                   <li><strong>Administrator</strong></li> 
               </ul>

            <?php

            }
            else
                {

            ?> 
               <ul class="pull-right"> 
                   <li>Welcome <a href="#"><strong><?php echo $fname;?></strong> <i class="fa fa-gear"></i></a></li>
                   <li><a href="home/logout">Logout <i class="fa fa-power-off"></i></a></li> 
               </ul>
            <?php } ?>
            </div>
    </header>
	
    <section class=""> 