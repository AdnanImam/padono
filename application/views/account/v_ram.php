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
                                            <h3 class="card-title">Reliability Availability Maintainability </h3>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>

                                        <div class="content">
                                            <a href="#" class="btn btn-primary btn-fill">Download Data</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img class="card-img-bottom" src="<?php echo base_url()?>assets/img/ramilus.png" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="title">Reliability</h4>
                                            <p class="category">Here is a subtitle for this table</p>  
                                        </div>
                                        <div class="col-md-6">
                                            <form style="width: 50%;" class="pull-right">
                                                <select class="form-control">
                                                    <?php  foreach($assets as $asset) { ?>
                                                    <option value="<?php echo $asset->id; ?>"><?php echo 'Plant - '.$asset->plant_id.' : '.$asset->name; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <!-- <p class="text-center">Please choose asset first to see Reliability Data</p> -->
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <th style="color:#fff; background-color: coral;"><b>Asset<b></th>
                                            <th style="color:#fff; background-color: coral;"><b><i>t(hours)</i></b></th>
                                            <?php foreach($subsystem_of_first_asset as $as) { ?>
                                            <th style="color:#fff; background-color: coral;"><b><?php echo 'Subsistem( '.$as->name.' )'; ?></b></th>
                                            <?php } ?>
                                            <th style="color:#fff; background-color: coral;"><b>Reliability System</b></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                            </tr>
                                            
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
                                    <p class="category">Here is a subtitle for this table</p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <th style="color:#fff; background-color: Olive;"><b>No</b></th>
                                            <th style="color:#fff; background-color: Olive;"><b><i>T (Hours)</i></b></th>
                                            <th style="color:#fff; background-color: Olive;"><b>A Axis</b></th>
                                            <th style="color:#fff; background-color: Olive;"><b>B Axis</b></th>
                                            <th style="color:#fff; background-color: Olive;"><b>X Axis</b></th>
                                            <th style="color:#fff; background-color: Olive;"><b>Y Axis</b></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>40%</td>
                                                <td>32%</td>
                                                <td>20%</td>
                                                <td>19%</td>
                                                <td>11%</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>64%</td>
                                                <td>54%</td>
                                                <td>36%</td>
                                                <td>34%</td>
                                                <td>21%</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>79%</td>
                                                <td>69%</td>
                                                <td>49%</td>
                                                <td>47%</td>
                                                <td>30%</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>87%</td>
                                                <td>79%</td>
                                                <td>59%</td>
                                                <td>57%</td>
                                                <td>38%</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>92%</td>
                                                <td>86%</td>
                                                <td>68%</td>
                                                <td>65%</td>
                                                <td>45%</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>95%</td>
                                                <td>90%</td>
                                                <td>74%</td>
                                                <td>72%</td>
                                                <td>51%</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>97%</td>
                                                <td>93%</td>
                                                <td>79%</td>
                                                <td>77%</td>
                                                <td>56%</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>98%</td>
                                                <td>96%</td>
                                                <td>83%</td>
                                                <td>81%</td>
                                                <td>61%</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>99%</td>
                                                <td>97%</td>
                                                <td>87%</td>
                                                <td>85%</td>
                                                <td>66%</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>99%</td>
                                                <td>98%</td>
                                                <td>89%</td>
                                                <td>88%</td>
                                                <td>69%</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>100%</td>
                                                <td>99%</td>
                                                <td>92%</td>
                                                <td>90%</td>
                                                <td>73%</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>100%</td>
                                                <td>99%</td>
                                                <td>93%</td>
                                                <td>92%</td>
                                                <td>76%</td>
                                            </tr>
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
                                    <p class="category">Here is a subtitle for this table</p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <th style="color:#fff; background-color: DodgerBlue;">No</th>
                                            <th style="color:#fff; background-color: DodgerBlue;"><b>Sub Sistem</b></th>
                                            <th style="color:#fff; background-color: DodgerBlue;"><b>MTTF</b></th>
                                            <th style="color:#fff; background-color: DodgerBlue;"><b>MTTR</b></th>
                                            <th style="color:#fff; background-color: DodgerBlue;"><i><b>Inherent Availability</b></i></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>A Axis</td>
                                                <td>1162,97</td>
                                                <td>1,94</td>
                                                <td>99,833%</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>B Axis</td>
                                                <td>1409,73</td>
                                                <td>2,56</td>
                                                <td>99,818%</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>X Axis</td>
                                                <td>1792,22</td>
                                                <td>4,44</td>
                                                <td>99,753</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Y Axis</td>
                                                <td>5148,07</td>
                                                <td>4,78</td>
                                                <td>99,914%</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Z Axis</td>
                                                <td>9781,66</td>
                                                <td>8,45</td>
                                                <td>99,914%</td>
                                            </tr>
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
                                    <p class="category">Here is a subtitle for this table</p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <th style="color:#fff; background-color: FireBrick;">No</th>
                                            <th style="color:#fff; background-color: FireBrick;"><b>Sub Sistem</b></th>
                                            <th style="color:#fff; background-color: FireBrick;"><b>Opeational Time</b></th>
                                            <th style="color:#fff; background-color: FireBrick;"><b>DT </b></th>
                                            <th style="color:#fff; background-color: FireBrick;"><i><b>Operational Availability</b></i></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>A Axis</td>
                                                <td>34896</td>
                                                <td>54,5000</td>
                                                <td>99,84%</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>B Axis</td>
                                                <td>34896</td>
                                                <td>104,6700</td>
                                                <td>99,70%</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>X Axis</td>
                                                <td>34896</td>
                                                <td>199,2500</td>
                                                <td>99,43%</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Y Axis</td>
                                                <td>34896</td>
                                                <td>81,2500</td>
                                                <td>99,77%</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Z Axis</td>
                                                <td>34896</td>
                                                <td>128,2500</td>
                                                <td>99.63%</td>
                                            </tr>
                                        </tbody>
                                    </table>

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


    });

</script>

</html>
