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


    <!--     Fonts and icons     -->
    <link rel="stylesheet" media="all" href="<?php echo base_url()?>http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" media="all" href="<?php echo base_url()?>'http://fonts.googleapis.com/css?family=Roboto:400,700,300" type="text/css">


    <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/pe-icon-7-stroke.css" type="text/css">

</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="red" data-image="<?php echo base_url()?>assets/img/sidebar-6.png">

            <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        WELLCOME <?php echo ucfirst($this->session->userdata('username')); ?>!
                    </a>
                </div>

                <ul class="nav">
                    <li  class="active">
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
                            <p>Random Acsess Memory</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php/Tabel">
                            <i class="pe-7s-note2"></i>
                            <p>Table List</p>
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
                        <a class="navbar-brand" href="#">Create New Asset</a>
                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div style="background-color:#E6E4E4; padding : 10px" class="col-md-4">
                            <form>
                                <div class="form-group">
                                    <label for="AssetNumber">Asset Number</label>
                                    <input type="number" class="form-control bg-white" id="AssetNumber" aria-describedby="emailHelp" placeholder="Enter Code">
                                </div>
                                <div class="form-group">
                                    <label for="AssetName">Asset Name</label>
                                    <input type="text" class="form-control" id="AssetName" placeholder="Enter Plan">
                                </div>
                                <div class="form-group">
                                    <label for="producttype">Product Type</label>
                                    <input type="text" list="producttype" class="form-control" placeholder="Enter Product Type" />
                                    <datalist id="producttype">
                                        <option>3 SPINDLE 5 AXIS"F"</option>
                                        <option>HS 75R</option>
                                        <option>QFC 1.2 X 2-1400</option>
                                    </datalist>
                                </div>
                                <div class="form-group">
                                    <label for="manufacturer">Manufacturer</label>
                                    <input type="text" list="manufacturer" class="form-control " placeholder="Enter manufacturer" />
                                    <datalist id="manufacturer">
                                        <option>ABB METALLUGRY AB</option>
                                        <option>CINCINNATI MILACRON</option>
                                        <option>HUFFMAN</option>
                                    </datalist>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control rounded-0 " id="Description" rows="4" placeholder="Enter Description"></textarea>
                                </div>
                            </form>
                        </div>
                        <div style="background-color:#E6E4E4; padding : 10px" class="col-md-4">
                            <form>
                                <div class="form-group">
                                    <label for="plant">Plant</label>
                                    <input type="text" list="cars" class="form-control" placeholder="Choice a plant" />
                                    <datalist id="cars">
                                        <option>x</option>
                                        <option>x</option>
                                        <option>x</option>
                                        <option>x</option>
                                    </datalist>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Start Operation</label>
                                    <input type="date" class="form-control" id="startoperation" placeholder="Enter Description">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Operation Hours/day</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Description">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Operation Hours/month</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Description">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Operation Hours/years</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Description">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
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

</html>
