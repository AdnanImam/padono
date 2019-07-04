<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrasi - PA DONO</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url()?>aasets/font/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url()?>assets/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Registrasi akun</div>
            <div class="card-body">

                <?php echo form_open('register');?>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>" required="required">
                        <label for="nama">Nama</label>
                        <p> <?php echo form_error('name'); ?> </p>
                    </div>
                </div>


                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" name="username" class="form-control" value="<?php echo set_value('username'); ?>" required="required">
                        <label for="username">Username</label>
                        <p> <?php echo form_error('name'); ?> </p>
                    </div>
                </div>


                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>" required="required">
                        <label for="email">Email</label>
                        <p> <?php echo form_error('email'); ?> </p>
                    </div>
                </div>


                <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" required="required">
                                <label for="inputPassword">Password</label>
                                <p> <?php echo form_error('password'); ?> </p>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" name="password_conf" class="form-control" value="<?php echo set_value('password_conf'); ?>" required="required">
                                <label for="confirmPassword">Confirm password</label>
                                <p> <?php echo form_error('password_conf'); ?> </p>
                            </div>
                        </div>

                    </div>
                </div>

                <p>
                    <input class="btn btn-primary btn-block" type="submit" name="btnSubmit" value="Daftar" />
                </p>

                <p class="text-center">
                    Kembali ke beranda, Silakan klik <?php echo anchor(site_url().'/beranda','di sini..'); ?>
                </p>

                <p class="text-center">
                    Sudah Punya akun ? <?php echo anchor(site_url().'/login','login'); ?>
                </p>

                <?php echo form_close();?>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/js/jquery.easing.min.js"></script>

</body>

</html>
