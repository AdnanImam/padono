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


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/demo.css" type="text/css">
    <!-- Pop Up CSS    -->
    <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/popup.css" type="text/css">


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
                <div class="col-md-12" align="center">
                    <img src="<?php echo base_url()?>assets/img/profile.png" alt="Avatar" style="width:90px; margin-top:5px">
                </div>
                <div class="logo">
                    <a href="#" class="simple-text">
                        WELLCOME <?php echo ucfirst($this->session->userdata('username')); ?>!
                    </a>
                </div>

                <ul class="nav">
                    <li>
                        <a href="<?php echo base_url()?>index.php/Dashboard">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
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
                        <a class="navbar-brand" href="#">Cost Of Unreliability</a>
                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                      <div class="row">
                        <div align="center" class="col-md-12">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body" style="padding:10px">
                                            <h3 class="card-title">Cost Of Unreability </h3>
                                            <div align="center" class="col">
                                                <h2 class="title  text-primary">Rp. 0</h2>
                                            </div>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                         <div class="content">
                                    <a href="#" class="btn btn-primary btn-fill">Download Data</a>
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img class="card-img-bottom" src="<?php echo base_url()?>assets/img/cour3.jpg" style="width:100%; height: 100%;" alt="" title="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo base_url()?>assets/img/cour1.jpg" alt="Card image cap" style="width:100%; height: auto;">
                                <div class="card-body" style="padding:10px">
                                    <h3 class="card-title">Corrective Cour</h3>
                                    <div align="center" class="col">
                                        <h2 class="title  text-success">Rp. 0</h2>
                                        <p class="category text-success">Corrective Cour</p>
                                    </div>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo base_url()?>assets/img/cour2.jpg" alt="Card image cap" style="width:100%; height: auto;">
                                <div class="card-body" style="padding:10px">
                                    <h3 class="card-title">Downtime Cour</h3>
                                    <div align="center" class="col">
                                        <h2 class="title  text-danger">Rp. 0</h2>
                                        <p class="category text-danger">Downtime Cour</p>
                                    </div>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <a href="#" class="open-button" onclick="openForm()">Currency</a>
                    <div class="form-popup" id="myForm">
                        <form action="/action_page.php" class="form-container">
                            <h2>Currency</h2>

                            <label for="email"><b>Masukkan Nilai Tukar Rupiah Ke Dollar </b></label>
                            <input type="number" placeholder="Nilai Tukar" name="currency" required>

                            <button type="submit" class="btn">Update</button>
                            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                        </form>
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

<!--  Notifications Plugin    -->
<script src="<?php echo base_url()?>assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="<?php echo base_url()?>https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url()?>assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url()?>assets/js/demo.js"></script>

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

<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }

</script>

</html>
