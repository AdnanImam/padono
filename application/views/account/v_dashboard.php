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

    <!-- Data Table CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/demo.css" type="text/css">


    <!--     Fonts and icons     -->
    <link rel="stylesheet" media="all" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" media="all" href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" type="text/css">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


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
                <div class="col-md-12" align="center">
                    <img class="avatar border-gray" src="<?php echo base_url()?>uploads/users/photo/<?php echo $user->photo; ?>" alt="Avatar" style="width:90px; height:90px; margin-top:5px;  border-radius: 50%;" />
                </div>
                <div class="logo">
                    <a href="#" class="simple-text">
                        WELCOME <?php echo ucfirst($this->session->userdata('username')); ?>!
                    </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="<?php echo base_url()?>index.php/Dashboard">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php/Cour">
                            <i class="pe-7s-vector"></i>
                            <p>Cost Of Unreliability</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php/Ram">
                            <i class="pe-7s-news-paper"></i>
                            <p>Reliability Availability Maintainability</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php/Masterdata">
                            <i class="pe-7s-note2"></i>
                            <p>Master Data</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php/Profile">
                            <i class="pe-7s-user"></i>
                            <p>PROFILE</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <p>
                            <i class="pe-7s-rocket"></i>

                            <?php echo anchor('login/logout','LOG OUT'); ?>
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
                        <a class="navbar-brand" href="#">Dashboard</a>
                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="card" style="background-color: #F29C1E;">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <div class="header">
                                            <h1 class="title" style="color:white"><?php echo $total_plant; ?></h1>
                                            <p class="category" style="color:white">PLAN</p>
                                        </div>
                                        <div class="content">
                                            <a href="<?php echo base_url()?>index.php/Plantform" class="btn btn-primary btn-fill">Create Plan</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img class="card-img-bottom" src="<?php echo base_url()?>assets/img/dashboardasset.png" style="width:100%; height: 100%;" alt="" title="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="card" style="background-color: #00A459;">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <div class="header">
                                            <h1 class="title" style="color:white"><?php echo $total_asset; ?></h1>
                                            <p class="category" style="color:white">ASSETS</p>
                                        </div>
                                        <div class="content">
                                            <a href="<?php echo base_url()?>index.php/Assetform" class="btn btn-primary btn-fill">Create Asset</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img class="card-img-bottom" src="<?php echo base_url()?>assets/img/dashboardplan.png" style="width:100%; height: 100%;" alt="" title="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="card" style="background-color: #DD4C38;">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <div class="header">
                                            <h1 class="title" style="color:white"><?php echo $total_subsystem; ?></h1>
                                            <p class="category" style="color:white">SUBSYSTEM</p>
                                        </div>
                                        <div class="content">
                                            <a href="<?php echo base_url()?>index.php/Subsystemform" class="btn btn-primary btn-fill">Create Subsystem</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img class="card-img-bottom" src="<?php echo base_url()?>assets/img/dashboardsub.png" style="width:100%; height: 100%;" alt="" title="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div align="center" class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-body" style="padding:10px">
                                        <h3 class="card-title">Reliability Availability Maintainability </h3>
                                        <p class="card-text">It is a method that can be used to predict the performance of reliability, availability, and maintenance capabilities, of a system or component..</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img class="card-img-bottom" src="<?php echo base_url()?>assets/img/ramilus.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div align="center" class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="card-img-bottom" src="<?php echo base_url()?>assets/img/cour3.jpg" style="width:90%; height: 80%;">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body" style="padding:10px">
                                        <h3 class="card-title">Cost Of Unreliability </h3>
                                        <p class="card-text">About Cost of Unreliability, is the result of cost calculations that arise from reliability problems, which will show the costs generated by each equipment or machine in the system..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-right">
                        &copy; <script>
                            document.write(new Date().getFullYear())

                        </script> <a href="https://bie.telkomuniversity.ac.id/">Teknik Industri</a>, Telkom University
                    </p>
                </div>
            </footer>

        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url()?>assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>

<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url()?>assets/js/chartist.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url()?>assets/chart.js/Chart.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url()?>assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="<?php echo base_url()?>https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url()?>assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url()?>assets/js/demo.js"></script>

<!-- Demo scripts for this page-->
<script src="<?php echo base_url()?>assets/js/chart/chart-area-demo.js"></script>
<script src="<?php echo base_url()?>assets/js/chart/chart-bar-demo.js"></script>
<script src="<?php echo base_url()?>assets/js/chart/chart-pie-demo.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-gift',
            message: "Welcome to <b>Proyek Ahkhir Dono</b> - s1 Teknik industri."

        }, {
            type: 'info',
            timer: 4000
        });

    });

</script>

</html>
