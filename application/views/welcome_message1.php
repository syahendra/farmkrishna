<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">  
<head>
<title>Sistem Informasi Invetory Telur</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Flat Dark Web Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />

<!--web login -->
 <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" >

<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>

 <form action="<?= site_url('welcome/ceklogin');?>" method="post">

 
 <!--SIGN UP-->
 <h1>Silahkan Login Form</h1>
<div class="login-form">
    <div class="close"> </div>

        <div class="head-info">
            <label class="lbl-1"> </label>
            <label class="lbl-2"> </label>
            <label class="lbl-3"> </label>
        </div>
            <div class="clear"> </div>
    <div class="avtar">
        <img src="assets/images/avtar.png" />
    </div>
                     
     <div id="body">
        <?php echo form_open('welcome/ceklogin')?>
        <input type="text" name="user" placeholder="Masukkan username"/>
        <input type="password" name="pass" placeholder="Masukkan password"/>
        <input type="submit" name="login" value="LOGIN"/>
        <?php echo form_close()?>
    </div>
          
    
   
    </div>
</div>
 <div class="copy-rights">
                    <p>Template by <a href=""; target="_blank">SI IDN MEDIA</a> </p>
            </div>

</body>
</html>