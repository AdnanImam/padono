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

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body" style="padding:10px">
                                    <h3 class="card-title" style="margin-left: 25px;">Import Failure Event</h3>
                                    <p class="card-text" style="margin-left: 25px;">Silahkan mengimport file excel failure event dengan ketentuan berikut :</p>
                                    <ol class="text-default">
                                        <small><li>File Excel yang diimport harus sesuai dengan template yang telah ditentukan</li></small>
                                        <small><li>Jika belum memiliki, silahkan download template <a href="#" class="text-primary"><b>disini</b></a></li></small>
                                        <small><li>Kolom yang kosong akan dianggap sebagai error, sehingga tidak akan diimport, untuk mengatasi hal tersebut silahkan beri nilai "--" sebagai penanda kolom kosong.</li></small>
                                    </ol>
                                    <form enctype="multipart/form-data" method="POST" action="<?php echo base_url(); ?>index.php/Masterdata/import_master">
                                    <div class="row" style="padding-left: 40px; padding-top: 10px;">
                                        <div class="cold-md-6">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <select name="subsystem" class="form-control input-sm" style="font-size: 11px; padding: 5px;">
                                                        <?php $no=1; foreach($subsystems as $subsys) { ?>
                                                            <option value="<?php echo $subsys->id; ?>"><?php echo 'Subsystem - '.$no.' : '.$subsys->name; ?></option>
                                                        <?php $no++; } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="file" class="input-sm" name="excel_file">          
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <input style="margin-left: 28px;" type="submit" name="submit" value="Import" class="btn btn-primary btn-sm btn-fill">
                                    </form>
                                    <br>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($_SESSION['imported'])) { ?>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Failure Event Preview</h4>
                                    <p class="text-primary"><small>Preview Hasil Import Excel, harap pastikan data sesuai sebelum di submit ke sistem</small></p>
                                    <form method="POST" action="<?php echo base_url(); ?>index.php/masterdata/submit_master">
                                        <table class="table table-bordered" style="margin-top: 10px;" id="" width="100%" cellspacing="0">
                                            <thead>
                                                <th>No.</th>
                                                <th>Failure Start</th>
                                                <th>Start Repair</th>
                                                <th>Repair Finish</th>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; foreach($import_preview as $preview) { ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $preview['failure_start']; ?></td>
                                                    <td><?php echo $preview['start_repair']; ?></td>
                                                    <td><?php echo $preview['repair_finish']; ?></td>
                                                </tr>
                                                <?php $no++; } ?>
                                            </tbody>
                                        </table>
                                        <small>Saat klik tombol submit data akan dimasukkan kedalam sistem untuk diproses</small>
                                        <div style="text-align:right">
                                            <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-fill btn-sm">
                                        </div>
                                        <br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row 2-->
                    <?php unset($_SESSION['imported']); } ?>
                    <?php if(!empty($data_master_submit)) { ?>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Failure Event List</h4>
                                    <div class="row">
                                        <div class="col-md-3" style="margin-top: 15px; margin-bottom: 15px;">
                                            <form method="POST" action="<?php echo base_url(); ?>index.php/masterdata/changeSubsystem">
                                                <select onchange="this.form.submit()" class="form-control col-md-5 input-sm" name="changed_subsystem">
                                                    <?php $no=1; foreach($subsystems as $subsys) { ?>
                                                        <?php if(isset($_SESSION['selected_subsystem'])) { ?>
                                                            <?php if($_SESSION['selected_subsystem'] == $subsys->id) { ?>
                                                        <option selected value="<?php echo $subsys->id; ?>"><?php echo 'Subsystem - '.$no.' : '.$subsys->name; ?></option>
                                                            <?php } else { ?>
                                                        <option value="<?php echo $subsys->id; ?>"><?php echo 'Subsystem - '.$no.' : '.$subsys->name; ?></option>
                                                            <?php } ?>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $subsys->id; ?>"><?php echo 'Subsystem - '.$no.' : '.$subsys->name; ?></option>
                                                        <?php } ?>
                                                    <?php $no++; } ?>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                    <table class="table table-bordered" style="margin-top: 10px;" id="" width="100%" cellspacing="0">
                                        <thead>
                                            <th>No.</th>
                                            <th>Failure Start</th>
                                            <th>Start Repair</th>
                                            <th>Repair Finish</th>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; foreach($data_master_submit as $preview) { ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $preview->failure_start; ?></td>
                                                <td><?php echo $preview->start_repair; ?></td>
                                                <td><?php echo $preview->repair_finish; ?></td>
                                            </tr>
                                            <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row 2-->
                    <?php } else { ?>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Failure Event List</h4>
                                    <div class="row">
                                        <div class="col-md-3" style="margin-top: 15px; margin-bottom: 15px;">
                                            <form method="POST" action="<?php echo base_url(); ?>index.php/masterdata/changeSubsystem">
                                                <select onchange="this.form.submit()" class="form-control col-md-5 input-sm" name="changed_subsystem">
                                                    <?php $no=1; foreach($subsystems as $subsys) { ?>
                                                        <?php if(isset($_SESSION['selected_subsystem'])) { ?>
                                                            <?php if($_SESSION['selected_subsystem'] == $subsys->id) { ?>
                                                        <option selected value="<?php echo $subsys->id; ?>"><?php echo 'Subsystem - '.$no.' : '.$subsys->name; ?></option>
                                                            <?php } else { ?>
                                                        <option value="<?php echo $subsys->id; ?>"><?php echo 'Subsystem - '.$no.' : '.$subsys->name; ?></option>
                                                            <?php } ?>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $subsys->id; ?>"><?php echo 'Subsystem - '.$no.' : '.$subsys->name; ?></option>
                                                        <?php } ?>
                                                    <?php $no++; } ?>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                    <p>Tidak ada master data untuk subsystem ini</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row 2-->
                    <?php } ?>
                    
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
