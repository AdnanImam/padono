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

    <!-- Pop Up CSS    -->
    <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/popup.css" type="text/css">


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
                    <li class="active">
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
                        <a class="navbar-brand" href="#">Master Data</a>
                    </div>
                </div>
            </nav>

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo base_url()?>index.php/Masterdata">Master Data</a>
                </li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo base_url()?>assets/img/event.png" alt="Card image cap" style="width:100%; height: auto;">
                                <div class="card-body" style="padding:10px">
                                    <h3 class="card-title">Failure Event</h3>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary btn-fill">Upload</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo base_url()?>assets/img/event.png" alt="Card image cap" style="width:100%; height: auto;">
                                <div class="card-body" style="padding:10px">
                                    <h3 class="card-title">Failure History</h3>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary btn-fill">Upload</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Failure Event</h4>
                                    <p class="category">Here is a subtitle for this table</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                        <thead>
                                            <th>No.</th>
                                            <th>Failure Start</th>
                                            <th>Repair Finish</th>
                                            <th>Downtime</th>
                                            <th>TTR (Hours)</th>
                                            <th>TTF (Hours)</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>no data</td>
                                                <td>no data</td>
                                                <td>no data</td>
                                                <td>no data</td>
                                                <td>no data</td>
                                                <td>no data</td>
                                                <td>no data</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div style="text-align:center">
                                        <a href="#" class="btn btn-info btn-fill">Calculate TTR/TTF</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Failure Histori</h4>
                                    <p class="category">Here is a subtitle for this table</p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <th>No</th>
                                            <th>Time To Repair</th>
                                            <th>Time To Failure</th>
                                            <th>Description</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>No Data</td>
                                                <td>No Data</td>
                                                <td>No Data</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div align="center" class="card col-md-12">
                                <div class="col-md-6">
                                    <div class="col">
                                        <h2 class="title  text-success">0</h2>
                                        <p class="category text-success">MTTR</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col">
                                        <h2 class="title  text-primary">0</h2>
                                        <p class="category text-primary">MTTF</p>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="#" class="btn btn-info btn-fill">Calculate MTTF/MTTR</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row 2-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <img class="card-img-top img-responsive" src="<?php echo base_url()?>assets/img/machine.jpg" alt="Card image cap" style="width:100%; height: auto;">
                                <div align="center" class="card-body" style="padding:10px">
                                    <h3 class="card-title">Failure Function</h3>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary btn-fill" onclick="openForm1()">Go somewhere</a>
                                    <div class="form-popup" id="myForm1">
                                        <form action="/action_page.php" class="form-container">
                                            <h3>Create Failure Function</h3>

                                            <div class="form-group">
                                                <label for="inputSubSystem"><b>SubSystem</b></label>
                                                <input type="text" list="subsystem" id="inputSubSystem" placeholder="Choice Subsystem">
                                                <datalist id="subsystem">
                                                    <option>x</option>
                                                    <option>x</option>
                                                    <option>x</option>
                                                    <option>x</option>
                                                </datalist>
                                            </div>

                                            <label for="FailureNumber"><b>Number</b></label>
                                            <input type="number" placeholder="Enter Number" name="FailureNumber" required>

                                            <label for="FailureName"><b>Name</b></label>
                                            <input type="text" placeholder="Enter Name" name="FailureName" required>

                                            <label for="psw"><b>Deskripsi</b></label>
                                            <textarea type="text" placeholder="Deskripsi" name="name" required></textarea>

                                            <button type="submit" class="btn">Create</button>
                                            <button type="button" class="btn cancel" onclick="closeForm1()">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="card-img-top img-responsive" src="<?php echo base_url()?>assets/img/machine.jpg" alt="Card image cap" style="width:100%; height: auto;">
                                <div align="center" class="card-body" style="padding:10px">
                                    <h3 class="card-title">Failure Event</h3>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary btn-fill" onclick="openForm2()">Go somewhere</a>
                                    <div class="form-popup" id="myForm2">
                                        <form action="/action_page.php" class="form-container">
                                            <h3>Create Failure Event</h3>

                                            <div class="form-group">
                                                <label for="inputSubSystem"><b>SubSystem</b></label>
                                                <input type="text" list="subsystem" id="inputSubSystem" placeholder="Choice Subsystem">
                                                <datalist id="subsystem">
                                                    <option>x</option>
                                                    <option>x</option>
                                                    <option>x</option>
                                                    <option>x</option>
                                                </datalist>
                                            </div>

                                            <label for="FailureNumber"><b>Number</b></label>
                                            <input type="number" placeholder="Enter Number" name="FailureNumber" required>

                                            <label for="FailureName"><b>Name</b></label>
                                            <input type="text" placeholder="Enter Name" name="FailureName" required>

                                            <label for="psw"><b>Deskripsi</b></label>
                                            <textarea type="text" placeholder="Deskripsi" name="name" required></textarea>

                                            <button type="submit" class="btn">Create</button>
                                            <button type="button" class="btn cancel" onclick="closeForm2()">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="card-img-top img-responsive" src="<?php echo base_url()?>assets/img/machine.jpg" alt="Card image cap" style="width:100%; height: auto;">
                                <div align="center" class="card-body" style="padding:10px">
                                    <h3 class="card-title">Failure Event</h3>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary btn-fill" onclick="openForm3()">Go somewhere</a>
                                    <div class="form-popup" id="myForm3">
                                        <form action="/action_page.php" class="form-container">
                                            <h3>Create Failure Function</h3>

                                            <div class="form-group">
                                                <label for="inputSubSystem"><b>SubSystem</b></label>
                                                <input type="text" list="subsystem" id="inputSubSystem" placeholder="Choice Subsystem">
                                                <datalist id="subsystem">
                                                    <option>x</option>
                                                    <option>x</option>
                                                    <option>x</option>
                                                    <option>x</option>
                                                </datalist>
                                            </div>

                                            <label for="FailureNumber"><b>Number</b></label>
                                            <input type="number" placeholder="Enter Number" name="FailureNumber" required>

                                            <label for="FailureName"><b>Name</b></label>
                                            <input type="text" placeholder="Enter Name" name="FailureName" required>

                                            <label for="psw"><b>Deskripsi</b></label>
                                            <textarea type="text" placeholder="Deskripsi" name="name" required></textarea>

                                            <button type="submit" class="btn">Create</button>
                                            <button type="button" class="btn cancel" onclick="closeForm3()">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="card-img-top img-responsive" src="<?php echo base_url()?>assets/img/machine.jpg" alt="Card image cap" style="width:100%; height: auto;">
                                <div align="center" class="card-body" style="padding:10px">
                                    <h3 class="card-title">Failure Event</h3>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary btn-fill" onclick="openForm4()">Go somewhere</a>
                                    <div class="form-popup" id="myForm4">
                                        <form action="/action_page.php" class="form-container">
                                            <h1>Login</h1>

                                            <label for="email"><b>Email</b></label>
                                            <input type="text" placeholder="Enter Email" name="email" required>

                                            <label for="psw"><b>Password</b></label>
                                            <input type="password" placeholder="Enter Password" name="psw" required>

                                            <button type="submit" class="btn">Login</button>
                                            <button type="button" class="btn cancel" onclick="closeForm4()">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Container -->
            </div><!-- Content -->


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
<script>
    function openForm1() {
        document.getElementById("myForm1").style.display = "block";
    }

    function closeForm1() {
        document.getElementById("myForm1").style.display = "none";
    }

    function openForm2() {
        document.getElementById("myForm2").style.display = "block";
    }

    function closeForm2() {
        document.getElementById("myForm2").style.display = "none";
    }

    function openForm3() {
        document.getElementById("myForm3").style.display = "block";
    }

    function closeForm3() {
        document.getElementById("myForm3").style.display = "none";
    }
    
    function openForm4() {
        document.getElementById("myForm4").style.display = "block";
    }

    function closeForm4() {
        document.getElementById("myForm4").style.display = "none";
    }

</script>

</html>
