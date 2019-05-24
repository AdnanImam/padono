 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 <!DOCTYPE html>
 <html>

 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <meta charset="UTF-8">
     <title>LOGIN - PA DONO</title>
     <link rel="icon" href="#">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/style/login.css" type="text/css">
     <script src="<?php echo base_url()?>assets/js/bootstrap.js" type="text/javascript"></script>
     <link rel="stylesheet" type="text/css" href="style.css">
 </head>

 <body class="text-center">
     <div class="form-signin">
         <img class="mb-4" src="../../assets/image/icon.jpg" alt="" width="72" height="72">
         <h1 class="h3 mb-3 font-weight-normal">LOGIN PA DONO</h1>
         <?php
                 if($this->session->flashdata('sukses')) {
                     echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
                    }
                 ?>
         <?php echo form_open('login');?>
         <input type="text" name="username" class="form-control" placeholder="username" value="<?php echo set_value('username'); ?>" required autofocus>
         <p>
             <?php echo form_error('username'); ?>
         </p>

         <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>" required>
         <p> <?php echo form_error('password'); ?> </p>

         <input class="btn btn-lg btn-primary btn-block" type="submit" name="btnSubmit" value="Login" />

         <?php echo form_close();?>
         <p class="mt-3 mb-3 text-muted">
             Belum punya akun ?,<?php echo anchor(site_url().'/register','Register'); ?>
         </p>
         <p class="mt-5 mb-1 text-muted">&copy; Teknik Industri - Tel-U 2019</p>
     </div>
 </body>

 </html>
