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

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url()?>assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">

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
                <div class="col-md-12" align="center">
                    <img src="<?php echo base_url()?>assets/img/profile.png" alt="Avatar" style="width:90px; margin-top:5px" >
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
                            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <strong class="d-inline-block mb-2 text-primary">Failure Event</strong>
                                    <h6 class="mb-0">
                                        <a class="text-dark" href="#">40 Percent of People Can’t Afford Basics</a>
                                    </h6>
                                    <div class="mb-1 text-muted small">Nov 12</div>
                                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-fill" role="button" data-toggle="modal" data-target="#modalFailureEvent">
                                        Upload Data
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade show " id="modalFailureEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="shadow modal-content ">
                                                <div class="modal-header bg-danger ">
                                                    <h5 class="modal-title text-white" id="exampleModalLongTitle">Upload File</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" align="center">
                                                    <img src="<?php echo base_url()?>assets/img/xlsicon.png" alt="Card image cap" style="margin:5px">
                                                    <p class="category">Masukkan data Failure Event</p>
                                                    <form>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </form>
                                                    <div class="modal-footer ">
                                                        <div class="col-md-12">
                                                            <div align="center">
                                                                <button type="button" class="btn btn-primary btn-fill "> Upload</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/arch" style="width: 200px; height: 250px;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <strong class="d-inline-block mb-2 text-primary">Failure Histori</strong>
                                    <h6 class="mb-0">
                                        <a class="text-dark" href="#">40 Percent of People Can’t Afford Basics</a>
                                    </h6>
                                    <div class="mb-1 text-muted small">Nov 12</div>
                                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-fill" role="button" data-toggle="modal" data-target="#modalFailureEvent">
                                        Upload Data
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade show " id="modalFailureEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="shadow modal-content ">
                                                <div class="modal-header bg-danger ">
                                                    <h5 class="modal-title text-white" id="exampleModalLongTitle">Upload File</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" align="center">
                                                    <img src="<?php echo base_url()?>assets/img/xlsicon.png" alt="Card image cap" style="margin:5px">
                                                    <p class="category">Masukkan data Failure Event</p>
                                                    <form>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </form>
                                                    <div class="modal-footer ">
                                                        <div class="col-md-12">
                                                            <div align="center">
                                                                <button type="button" class="btn btn-primary btn-fill "> Upload</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/arch" style="width: 200px; height: 250px;">
                            </div>
                        </div>
                    </div> <!-- Row 1-->
                    
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
                                    <div align="center" class="col-md-12">
                                        <div class="card">
                                            <div class="content">
                                                <a href="#" class="btn btn-info btn-fill">Calculate TTR/TTF</a>
                                            </div>
                                        </div>
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
                                    <div align="center" class="col-md-12">
                                        <div class="card">
                                            <div class="row justify-content-md-center">
                                                <div class="header">
                                                    <h2 class="title  text-success">0</h2>
                                                    <p class="category text-success">MTTR</p>
                                                </div>
                                                <div class="header">
                                                    <h2 class="title  text-primary">0</h2>
                                                    <p class="category text-primary">MTTF</p>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <a href="#" class="btn btn-info btn-fill">Calculate MTTF/MTTR</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- Row 2-->
                    <div class="row">

                    </div> <!-- Row 3-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mb-3 border-dark">
                                <img class="card-img-top" src="//placeimg.com/290/180/any" alt="Card image cap">
                                <div class="card-body">
                                    <strong class="d-inline-block mb-2 text-danger">Failure Function</strong>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                    <!-- MODAL BUTTON POP UP -->
                                    <button type="button" class="btn btn-danger btn-fill" data-toggle="modal" data-target="#failureFunctionModal">
                                        create new
                                    </button>
                                    <!-- MODAL POP UP -->
                                    <div class="modal fade" id="failureFunctionModal" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog" role="document">
                                            <div class="shadow modal-content" style="background-color:#E6E4E4">
                                                <div class="modal-header bg-danger">
                                                    <h5 class="modal-title text-white" id="exampleModalLongTitle">Create Failure Function</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="text-dark" for="inputSubSystem">SubSystem</label>
                                                            <input type="text" list="subsystem" class="form-control" id="inputSubSystem" placeholder="Choice Subsystem">
                                                            <datalist id="subsystem">
                                                                <option>x</option>
                                                                <option>x</option>
                                                                <option>x</option>
                                                                <option>x</option>
                                                            </datalist>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="text-dark" for="inputNumber">Number</label>
                                                            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="text-dark" for="inputName">Name</label>
                                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="text-dark" for="inputDesc">Description</label>
                                                            <textarea class="form-control rounded-0 " id="Description" rows="4" placeholder="Enter Description"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary btn-fill">Create New</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 border-dark">
                                <img class="card-img-top" src="//placeimg.com/290/180/any" alt="Card image cap">
                                <div class="card-body">
                                    <strong class="d-inline-block mb-2 text-danger">Failure Mode</strong>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <!-- MODAL BUTTON POP UP -->
                                    <button type="button" class="btn btn-danger btn-fill" data-toggle="modal" data-target="#failureFunctionModal">
                                        create new
                                    </button>
                                    <!-- MODAL POP UP -->
                                    <div class="modal fade" id="failureFunctionModal" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog" role="document">
                                            <div class="shadow modal-content" style="background-color:#E6E4E4">
                                                <div class="modal-header bg-danger">
                                                    <h5 class="modal-title text-white" id="exampleModalLongTitle">Create Failure Function</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="text-dark" for="inputSubSystem">SubSystem</label>
                                                            <input type="text" list="subsystem" class="form-control" id="inputSubSystem" placeholder="Choice Subsystem">
                                                            <datalist id="subsystem">
                                                                <option>x</option>
                                                                <option>x</option>
                                                                <option>x</option>
                                                                <option>x</option>
                                                            </datalist>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="text-dark" for="inputNumber">Number</label>
                                                            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="text-dark" for="inputName">Name</label>
                                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="text-dark" for="inputDesc">Description</label>
                                                            <textarea class="form-control rounded-0 " id="Description" rows="4" placeholder="Enter Description"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary btn-fill">Create New</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 border-dark">
                                <img class="card-img-top" src="//placeimg.com/290/180/any" alt="Card image cap">
                                <div class="card-body">
                                    <strong class="d-inline-block mb-2 text-danger">Failure Cause</strong>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <!-- MODAL BUTTON POP UP -->
                                    <button type="button" class="btn btn-danger btn-fill" data-toggle="modal" data-target="#failureFunctionModal">
                                        create new
                                    </button>
                                    <!-- MODAL POP UP -->
                                    <div class="modal fade" id="failureFunctionModal" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog" role="document">
                                            <div class="shadow modal-content" style="background-color:#E6E4E4">
                                                <div class="modal-header bg-danger">
                                                    <h5 class="modal-title text-white" id="exampleModalLongTitle">Create Failure Function</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="text-dark" for="inputSubSystem">SubSystem</label>
                                                            <input type="text" list="subsystem" class="form-control" id="inputSubSystem" placeholder="Choice Subsystem">
                                                            <datalist id="subsystem">
                                                                <option>x</option>
                                                                <option>x</option>
                                                                <option>x</option>
                                                                <option>x</option>
                                                            </datalist>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="text-dark" for="inputNumber">Number</label>
                                                            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="text-dark" for="inputName">Name</label>
                                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="text-dark" for="inputDesc">Description</label>
                                                            <textarea class="form-control rounded-0 " id="Description" rows="4" placeholder="Enter Description"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary btn-fill">Create New</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 border-dark">
                                <img class="card-img-top" src="//placeimg.com/290/180/any" alt="Card image cap">
                                <div class="card-body">
                                    <strong class="d-inline-block mb-2 text-danger">Effect </strong>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <!-- MODAL BUTTON POP UP -->
                                    <button type="button" class="btn btn-danger btn-fill" data-toggle="modal" data-target="#failureFunctionModal">
                                        create new
                                    </button>
                                    <!-- MODAL POP UP -->
                                    <div class="modal fade" id="failureFunctionModal" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog" role="document">
                                            <div class="shadow modal-content" style="background-color:#E6E4E4">
                                                <div class="modal-header bg-danger">
                                                    <h5 class="modal-title text-white" id="exampleModalLongTitle">Create Failure Function</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="text-dark" for="inputSubSystem">SubSystem</label>
                                                            <input type="text" list="subsystem" class="form-control" id="inputSubSystem" placeholder="Choice Subsystem">
                                                            <datalist id="subsystem">
                                                                <option>x</option>
                                                                <option>x</option>
                                                                <option>x</option>
                                                                <option>x</option>
                                                            </datalist>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="text-dark" for="inputNumber">Number</label>
                                                            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="text-dark" for="inputName">Name</label>
                                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="text-dark" for="inputDesc">Description</label>
                                                            <textarea class="form-control rounded-0 " id="Description" rows="4" placeholder="Enter Description"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary btn-fill">Create New</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div> <!-- Row 4-->
                </div> <!-- Container -->
            </div> <!-- Content-->
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

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });

</script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="<?php echo base_url()?>https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Upload Form   -->
<script src="<?php echo base_url()?>assets/js/uploadform.js"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url()?>assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url()?>assets/js/demo.js"></script>

<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url()?>assets/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>assets/datatables/dataTables.bootstrap4.js"></script>

<!-- Demo scripts for this page-->
<script src="<?php echo base_url()?>assets/js/demo/datatables-demo.js"></script>

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
