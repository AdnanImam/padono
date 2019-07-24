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
                    <img class="avatar border-gray" src="<?php echo base_url()?>uploads/users/photo/<?php echo $user->photo; ?>" alt="Avatar"  style="width:90px; height:90px; margin-top:5px;  border-radius: 50%;" />
                </div>
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
                        <a class="navbar-brand" href="#">Create New Asset</a>
                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div style="background-color:#E6E4E4; padding : 10px; height: 460px;" class="col-md-4">
                            <form method="POST" action="<?php echo base_url(); ?>index.php/Assetform/create">
                                <div class="form-group">
                                    <label for="AssetName">Asset Name</label>
                                    <input required name="name" type="text" class="form-control" id="AssetName" placeholder="Enter Asset Name">
                                </div>
                                <div class="form-group">
                                    <label for="producttype">Product Type</label>
                                    <input required name="product_type" type="text" list="producttype" class="form-control" placeholder="Enter Product Type" />
                                    <datalist id="producttype">
                                        <option>3 SPINDLE 5 AXIS"F"</option>
                                        <option>HS 75R</option>
                                        <option>QFC 1.2 X 2-1400</option>
                                    </datalist>
                                </div>
                                <div class="form-group">
                                    <label for="manufacturer">Manufacturer</label>
                                    <input required name="manufacturer" type="text" list="manufacturer" class="form-control " placeholder="Enter manufacturer" />
                                    <datalist id="manufacturer">
                                        <option>ABB METALLUGRY AB</option>
                                        <option>CINCINNATI MILACRON</option>
                                        <option>HUFFMAN</option>
                                    </datalist>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea required name="description" class="form-control rounded-0 " id="Description" rows="5" placeholder="Enter Description"></textarea>
                                </div>
                        </div>
                        <div style="background-color:#E6E4E4; padding : 10px" class="col-md-4">
                                <div class="form-group">
                                    <label for="plant">Plant</label>
                                    <select name="plant" class="form-control" id="plants">
                                        <?php foreach($plants as $data) { ?>
                                            <option value="<?php echo $data->id; ?>"><?php echo $data->plant; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Start Operation</label>
                                    <input required name="start_operation" type="date" class="form-control" id="startoperation" placeholder="Enter Description">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Operation Hours/day</label>
                                    <input required name="operation_hours_day" type="number" class="form-control" id="operation_hours_day" placeholder="Enter Description">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Operation Hours/month</label>
                                    <input required name="operation_hours_month" type="number" class="form-control" id="operation_hours_month" placeholder="Enter Description">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Operation Hours/years</label>
                                    <input required name="operation_hours_year" id="operation_hours_year" type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Description">
                                </div>
                                <button type="submit" class="btn btn-primary btn-fill pull-right">Create Asset</button>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <?php if(isset($_SESSION['asset-created'])) { ?>
                            <div id="asset-notify" class="alert alert-success animated fadeIn">
                                <?php echo $_SESSION['asset-created']; ?>
                            </div>
                            <?php unset($_SESSION['asset-created']); } ?>
                        </div>
                    </div>
                    <h4>Your Asset History</h4>
                    <table class="table table-sm" id="asset_table" class="display">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Plant</th>
                                <th>Asset Name</th>
                                <th>Type</th>
                                <th>Manufacturer</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($assets as $data) { ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <?php  
                                    $plant_name = $this->db->query("SELECT plant FROM plant WHERE id='$data->plant_id'")->row();
                                ?>
                                <td><?php echo $plant_name->plant; ?></td>
                                <td><?php echo $data->name; ?></td>
                                <td><?php echo $data->product_type; ?></td>
                                <td><?php echo $data->manufacturer; ?></td>
                                <td><?php echo $data->description; ?></td>
                                <td>
                                    <a class="btn btn-default btn-xs btn-fill" role="button" data-toggle="collapse" href="#collapseExample<?php echo $no; ?>" aria-expanded="false" aria-controls="collapseExample">
                                      Detail
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <div class="collapse" id="collapseExample<?php echo $no; ?>">
                                      <div class="well">
                                        <ul>
                                            <li><small>Start Operation : <?php echo date("d-m-Y", strtotime($data->start_operation)); ?></small></li>
                                            <li><small>Operation Hours/Day : <?php echo $data->operation_hours_day; ?></small></li>
                                            <li><small>Operation Hours/Month : <?php echo $data->operation_hours_month; ?></small></li>
                                            <li><small>Operation Hours/Year : <?php echo $data->operation_hours_year; ?></small></li>
                                        </ul>
                                      </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        
        </div>
    </div>

</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url()?>assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url()?>assets/js/bootstrap-notify.js"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url()?>assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url()?>assets/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $('#operation_hours_day').keyup(function() {
            var value = $(this).val();
            $('#operation_hours_month').val(value * 26);
            var month = $('#operation_hours_month').val();
            $('#operation_hours_year').val(month * 12);
        });

        $('#asset_table').DataTable();

        setTimeout(function() {
            $('#asset-notify').hide();
        },2000);

    });

</script>

</html>
