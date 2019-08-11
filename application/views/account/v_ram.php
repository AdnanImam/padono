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
        <div class="sidebar" data-color="red" data-image="<?php echo base_url()?>assets/img/sidebar-7.png">

            <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

            <div class="sidebar-wrapper">
                <div class="col-md-12" align="center">
                     <img class="avatar border-gray" src="<?php echo base_url()?>uploads/users/photo/<?php echo $user->photo; ?>" alt="Avatar"  style="width:90px; height:90px; margin-top:5px;  border-radius: 50%;" />
                </div>
                <div class="logo">
                    <a href="#" class="simple-text">
                        WELCOME <?php echo ucfirst($this->session->userdata('username')); ?>!
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
                    <li class="active">
                        <a href="<?php echo base_url()?>index.php/Ram">
                            <i class="pe-7s-news-paper"></i>
                            <p>Reliability Availability Maintainability </p>
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
                        <a class="navbar-brand" href="#">Reliability Availability Maintainability</a>
                    </div>
                    <div class="col-md-8 ">
                        <form method="POST" action="<?php echo base_url(); ?>index.php/ram/changeAsset" style="width: 50%; padding-top: 12px;" class="pull-right">
                            <select onchange="this.form.submit()" class="form-control"  name="changed_asset">
                                <option value="0"><?php echo '-- Pilih Asset Terlebih Dahulu --'; ?></option>
                                <?php  foreach($assets as $asset) { ?>
                                <option value="<?php echo $asset->id; ?>"><?php echo 'Plant - '.$asset->plant_id.' : '.$asset->name; ?></option>
                                <?php } ?>
                            </select>
                        </form>
                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <div id='result_print'>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="title">Reliability</h4>
                                            <p class="category">Detail of reliability of asset</p>  
                                        </div>
                                    </div>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <!-- <p class="text-center">Please choose asset first to see Reliability Data</p> -->
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <th style="color:#fff; background-color: coral;"><b>No.<b></th>
                                            <th style="color:#fff; background-color: coral;"><b><i>t(hours)</i></b></th>
                                            <?php foreach ($reliabilities as $key => $reliability)  { ?>
                                            <th style="color:#fff; background-color: coral;"><b><?php echo $reliability['name']; ?></b></th>
                                            <?php } ?>
                                            <th style="color:#fff; background-color: coral;"><b>Reliability System</b></th>
                                            <th style="color:#fff; background-color: coral;"><b>Status</b></th>
                                        </thead>
                                        <tbody>
                                            <?php for ($i=0; $i < $max_size; $i++) { ?>
                                            <tr>
                                                <td>
                                                <?php echo($i+1) ?>
                                                </td>
                                                <td>
                                                <?php echo($reliabilities['0']['reliability'][$i]['t_hour']) ?>
                                                </td>
                                                <?php 
                                                    $value = 1;
                                                    foreach ($reliabilities as $key => $reliability) { 
                                                ?>
                                                <td>
                                                <?php 
                                                    $value *= (1-($reliability['reliability'][$i]['reliability']/100));
                                                    echo($reliability['reliability'][$i]['reliability'].'%');
                                                ?>
                                                </td>
                                                <?php } ?>
                                                <td>
                                                <?php echo(((1-$value)*100).'%') ?>
                                                </td>
                                                <td>
                                                <?php 
                                                    if(((1-$value)*100)<=50){
                                                        echo("Need to change");
                                                    } else if (((1-$value)*100)<=80){
                                                        echo("Need to repair");
                                                    } else {
                                                        echo("Still good condition");
                                                    }
                                                ?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Maintainability</h4>
                                    <p class="category">Detail of maintainability asset</p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <th style="color:#fff; background-color: coral;"><b>No.<b></th>
                                            <th style="color:#fff; background-color: coral;"><b><i>t(hours)</i></b></th>
                                            <?php foreach ($maintainabilities as $key => $maintainability)  { ?>
                                            <th style="color:#fff; background-color: coral;"><b><?php echo $maintainability['name']; ?></b></th>
                                            <th style="color:#fff; background-color: coral;"><b><?php echo 'Status '.$maintainability['name']; ?></b></th>
                                            <?php } ?>
                                        </thead>
                                        <tbody>
                                            <?php for ($i=0; $i < $max_size_maintainability; $i++) { ?>
                                            <tr>
                                                <td>
                                                <?php echo($i+1) ?>
                                                </td>
                                                <td>
                                                <?php echo($maintainabilities['0']['maintainability'][$i]['t_hour']) ?>
                                                </td>
                                                <?php 
                                                    $value = 1;
                                                    foreach ($maintainabilities as $key => $reliability) { 
                                                ?>
                                                <td>
                                                <?php 
                                                    if($i<sizeof($reliability['maintainability']))
                                                        echo($reliability['maintainability'][$i]['maintainability'].'%');
                                                ?>
                                                </td>
                                                <td>
                                                <?php 
                                                    if($i<sizeof($reliability['maintainability'])){
                                                        if($reliability['maintainability'][$i]['maintainability']<85)
                                                            echo('Not avaliable');
                                                        else if($reliability['maintainability'][$i]['maintainability']<=99)
                                                            echo('Ready to use');
                                                        else
                                                            echo('Avaliable');
                                                    }
                                                ?>
                                                </td>
                                                <?php } ?>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Inherent Availability</h4>
                                    <p class="category">Detail of inherent availability asset</p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <th style="color:#fff; background-color: DodgerBlue;">No</th>
                                            <th style="color:#fff; background-color: DodgerBlue;"><b>Sub Sistem</b></th>
                                            <th style="color:#fff; background-color: DodgerBlue;"><b>MTTF</b></th>
                                            <th style="color:#fff; background-color: DodgerBlue;"><b>MTTR</b></th>
                                            <th style="color:#fff; background-color: DodgerBlue;"><i><b>Inherent Availability</b></i></th>
                                            <th style="color:#fff; background-color: DodgerBlue;"><i><b>Performance Indicator</b></i></th>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($inherent_availabilities as $key => $inherent_availability) { ?>
                                            <tr>
                                                <td><?php echo($key + 1) ?></td>
                                                <td><?php echo($inherent_availability['name']) ?></td>
                                                <td><?php echo($inherent_availability['mttr']) ?></td>
                                                <td><?php echo($inherent_availability['mttf']) ?></td>
                                                <td><?php echo(((round($inherent_availability['mttf']/($inherent_availability['mttf']+$inherent_availability['mttr']), 4))*100).'%') ?></td>
                                                <td>
                                                    <?php 
                                                    if(((round($inherent_availability['mttf']/($inherent_availability['mttf']+$inherent_availability['mttr']), 4))*100) < 95)
                                                        echo('Not Achieved'); 
                                                    else
                                                        echo('Achieved');
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Operational Availability</h4>
                                    <p class="category">Detail operational availability of asset</p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <th style="color:#fff; background-color: FireBrick;">No</th>
                                            <th style="color:#fff; background-color: FireBrick;"><b>Sub Sistem</b></th>
                                            <th style="color:#fff; background-color: FireBrick;"><b>Opeational Time</b></th>
                                            <th style="color:#fff; background-color: FireBrick;"><b>DT </b></th>
                                            <th style="color:#fff; background-color: FireBrick;"><i><b>Operational Availability</b></i></th>
                                            <th style="color:#fff; background-color: FireBrick;"><i><b>Performance Indicator</b></i></th>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($operational_availabilities as $key => $operational_availability) { ?>
                                            <tr>
                                                <td><?php echo($key + 1) ?></td>
                                                <td><?php echo($operational_availability['name']) ?></td>
                                                <td><?php echo($operational_availability['oprational_time']) ?></td>
                                                <td><?php echo($operational_availability['mdt']) ?></td>
                                                <td><?php echo(((round(($operational_availability['oprational_time']-$operational_availability['mdt'])/$operational_availability['oprational_time'], 4))*100).'%') ?></td>
                                                <td>
                                                    <?php 
                                                    if(((round(($operational_availability['oprational_time']-$operational_availability['mdt'])/$operational_availability['oprational_time'], 4))*100) < 95)
                                                        echo('Not Achieved'); 
                                                    else
                                                        echo('Achieved');
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
                <div class="container-fluid">
                    <a class="btn btn-primary btn-fill" onclick="printDiv('result_print')" >Print result</a>
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

    function printDiv(divName){
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

</script>

</html>
