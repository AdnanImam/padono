<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Dashboard - PA DONO </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">

    <!-- Animation library for notifications   -->
    <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/animate.min.css" type="text/css">

    <!--  Light Bootstrap Table core CSS    -->
    <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/light-bootstrap-dashboard.css?v=1.4.0" type="text/css">

    <!-- Upload Form plugin CSS-->
    <link href="<?php echo base_url()?>assets/css/uploadform.css" rel="stylesheet">


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/demo.css" type="text/css">


    <!--     Fonts and icons     -->
    <link rel="stylesheet" media="all" href="<?php echo base_url()?>http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" media="all" href="<?php echo base_url()?>'http://fonts.googleapis.com/css?family=Roboto:400,700,300" type="text/css">


    <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/pe-icon-7-stroke.css" type="text/css">

</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="red" data-image="<?php echo base_url()?>assets/img/sidebar-7.png">

            <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        COURAM ANALYST
                    </a>
                </div>
                <ul class="nav">
                    <li class="active-pro">
                        <p>
                            <i class="pe-7s-rocket"></i>

                            <?php echo anchor('login/logout','KELUAR'); ?>
                        </p>
                        </a>
                    </li>
                </ul>

            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">One Step Ahead!</a>
                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title" style="margin-bottom: 5px;">Complete Your Profile</h4>
                                        <small style="color:red;">*Please complete your profile below before using this app</small>
                                    </div>
                                    <div class="content">
                                        <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/profile/completeProfile">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Company</label>
                                                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>">
                                                        <input required type="text" class="form-control" placeholder="Company" name="company">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Position</label>
                                                        <input required type="text" class="form-control" placeholder="Position" name="position">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" readonly placeholder="Username" name="username" value="<?php echo $_SESSION['username']; ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Full Name</label>
                                                        <input required type="text" class="form-control" placeholder="Fullname" name="fullname" value="<?php echo $_SESSION['fullname'] ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input required type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $_SESSION['email']; ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <textarea required class="form-control" name="address"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Photo</label>
                                                        <input required type="file" name="photo" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>


</body>


<!--   Core JS Files   -->
<script src="<?php echo base_url()?>assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>

<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url()?>assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url()?>assets/js/bootstrap-notify.js"></script>

<!-- Upload Form   -->
<script src="<?php echo base_url()?>assets/js/uploadform.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="<?php echo base_url()?>https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url()?>assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url()?>assets/js/demo.js"></script>


<script type="text/javascript">
    $(document).ready(function() {

        demo.initChartist();

    });

</script>

</html>
