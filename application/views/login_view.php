<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<title>Welcome to Nwasco Dashboard</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
 
<!--Load jquery.min.js file, which store in js folder.-->
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    </head>
<body>

<div class="container">

  <div class="login"> 
      <div id="login-logo"><img src="<?php echo base_url(); ?>assets/images/logo.jpg" /></div>
     <?php echo validation_errors(); ?>
     <?php echo form_open('verifylogin'); ?> 
       <input type="text" size="20" id="email" name="email" placeholder="Email Address"/>
       <br/> 
       <input type="password" size="20" id="passowrd" name="password" placeholder="Password"/>
       <br/>
       <input type="submit" value="Login"/>
  </div>

</div>

</body>
</html>
