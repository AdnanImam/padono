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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>

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
                    <img src="<?php echo base_url()?>assets/img/profile.png" alt="Avatar" style="width:90px; margin-top:5px" >
                </div>
                <div class="logo">
                    <a href="#" class="simple-text">
                        WELLCOME <?php echo ucfirst($this->session->userdata('username')); ?>!
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
                    <li class="dropdown">
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
                        <a class="navbar-brand" href="#">Create Subystem</a>
                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div style="background-color:#E6E4E4; padding : 10px" class="col-md-6">
                            <form method="POST" action="<?php echo base_url(); ?>index.php/subsystemform/create">
                                <div class="form-group">
                                    <label for="inputsubsystem">Asset</label>
                                    <select name="asset" class="form-control">
                                        <?php foreach($assets as $asset) { ?>
                                            <option value="<?php echo $asset->id; ?>"><?php echo $asset->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Subsystem Name</label>
                                    <input required name="subsys_name" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Description">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea required name="subsys_desc" class="form-control rounded-0 " id="Description" rows="4" placeholder="Enter Description"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-fill pull-right">Create Subsystem</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <?php if(isset($_SESSION['subsys-created'])) { ?>
                                <div id="subsys-notify" class="alert alert-success animated fadeIn"><?php echo $_SESSION['subsys-created']; ?></div>
                            <?php unset($_SESSION['subsys-created']); } ?>
                        </div>
                    </div>
                    <h4>Your Subsystem History</h4>
                    <table class="table table-sm" id="subsys_table" class="display">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Subsystem Name</th>
                                <th>Description</th>
                                <th>Asset Name</th>
                                <th>Created at</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($subsys as $sub) { ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $sub->name; ?></td>
                                <td><?php echo $sub->description; ?></td>
                                <?php  
                                    $asset_name = $this->db->query("SELECT name FROM assets WHERE id='$sub->asset_id'")->row();
                                ?>
                                <td><?php echo $asset_name->name; ?></td>
                                <?php  
                                    $timeStamp = $sub->created_at;
                                    $timeStamp = date( "d/m/Y", strtotime($timeStamp));
                                ?>
                                <td><?php echo $timeStamp; ?></td>
                            </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
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
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
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

        $('#subsys_table').DataTable();

        setTimeout(function() {
            $('#subsys-notify').hide();
        },2000);

    });

</script>

</html>
