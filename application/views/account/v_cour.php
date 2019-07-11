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

    <!-- Select Box CSS    -->
    <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/selectbox.css" type="text/css">



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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="col-md-7 card" style="padding:30px;">
                                    <div class="card-body">
                                        <h6 class="card-title">Cost Of Unreability Form </h6>
                                    </div>
                                    <form method="POST" action="<?php echo base_url(); ?>index.php/cour/analyze">
                                        <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
                                        <div class="select-box">
                                            <label for="select-box1" class="label select-box1"><span class="label-desc" style="color:#fff;">Choose Assets</span> </label>
                                            <select id="select_asset" class="select" name="asset_name">
                                                <option value="" disabled selected>-- Pilih Asset --</option>
                                                <?php foreach($assets as $data) { ?>
                                                    <option value="<?php echo $data->id; ?>"><?php echo 'Plant '.$data->plant_id.' - '.$data->name; ?></option>
                                                <?php } ?>
                                            </select>
                                            <input type="hidden" name="asset_id" id="asset_id" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><b>Jumlah Price Maintenance Material</b></label>
                                            <div class="input-group">
                                                 <div class="input-group-addon">Rp</div>
                                                 <input type="number" name="price_per_material" class="form-control" id="#" placeholder="Enter Number">
                                            </div>

                                            <label for="exampleInputPassword1"><b> Jumlah Biaya Peralatan</b></label>
                                            <input type="number" name="material_price" class="form-control" id="#" placeholder="Enter Number">
                                        </div>
                                        <div class="form-group" style="margin-top:40px;">
                                            <label for="exampleInputPassword1"><b>Jumlah Hari Kerja Efektif per Bulan</b></label>
                                            <input type="number" name="workday_per_month" class="form-control" id="#" placeholder="Enter Number">

                                            <label for="exampleInputPassword1"><b>Jumlah Sift Kerja per Hari</b></label>
                                            <input type="number" name="shift_per_day" class="form-control" id="#" placeholder="Enter Number">

                                            <label for="exampleInputPassword1"><b>Jumlah Jam Kerja per Sift</b></label>
                                            <input type="number" name="workhour_per_shift" class="form-control" id="#" placeholder="Enter Number">
                                        </div>
                                        <div class="form-group" style="margin-top:40px;">
                                            <label for="exampleInputPassword1"><b>Jumlah Teknisi per Maintenance</b></label>
                                            <input type="number" name="techniciant_per_maintenance" class="form-control" id="#" placeholder="Enter Number">

                                            <label for="exampleInputPassword1"><b>Gaji Teknisi Kerja per Bulan</b></label>
                                            <input type="number" name="technician_salary" class="form-control" id="#" placeholder="Enter Number">
                                        </div>
                                        <div class="form-group" style="margin-top:40px;">
                                            <label for="exampleInputPassword1"><b>Kapasitas Mesin Per Jam</b></label>
                                            <input type="number" name="machine_capacity_per_hour" class="form-control" id="#" placeholder="Enter Number">

                                            <label for="exampleInputPassword1"><b>Harga Produk Per PCS</b></label>
                                            <input type="number" name="product_price" class="form-control" id="#" placeholder="Enter Number">
                                        </div>
                                        <div class="form-group" style="margin-top:40px;">
                                            <label for="exampleInputPassword1"><b>Number Of Failure</b></label>
                                            <table class="table" id="num_of_failure_table">
                                            </table>
                                            <!-- <input type="number" name="num_of_failure" class="form-control" id="#" placeholder="Enter Number"> -->
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-fill">Submit</button>
                                    </form>
                                </div>
                                <div class="col-md-5">
                                    <img class="card-img-bottom" src="<?php echo base_url()?>assets/img/sideimage.png" style="width:100%; height: 100%;" alt="" title="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if(isset($total_biaya_peralatan)) { ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Total Biaya Peralatan</h4>
                                    <p style="margin-top: 20px;"><?php echo 'Rp '.number_format($total_biaya_peralatan); ?></p>
                                </div>
                                <div class="content table-responsive table-full-width">


                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Biaya Engineer</h4>
                                    <p style="margin-top: 20px;"><?php echo 'Rp '.number_format($biaya_engineer).' / Hour'; ?></p>
                                </div>
                                <div class="content table-responsive table-full-width">


                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Lost Revenue</h4>
                                    <p style="margin-top: 20px;"><?php echo 'Rp '.number_format($lost_revenue); ?></p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Subsystem</h4>
                                    <p class="category">Analyze Results</p>
                                </div>
                                <div class="content table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <th>No</th>
                                            <th>Sub Sistem</th>
                                            <th>Corective Lost Time</th>
                                            <th>Downtime Lost Time</th>
                                            <th>Failure Rate</th>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; foreach($subsystems_from_asset as $sub) { ?>
                                                <tr>
                                                    <td><?php echo ($no+1); ?></td>
                                                    <td><?php echo $sub->name; ?></td>
                                                    <td><?php echo $sub->corrective_lost_time; ?></td>
                                                    <td><?php echo $sub->downtime_lost_time; ?></td>
                                                    <td><?php echo $sub->failure_rate; ?></td>
                                                </tr>
                                            <?php $no++; } ?>
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
                                    <h4 class="title">Corrective COUR</h4>
                                    <p class="category">Analyze Result for each subsystems</p>
                                </div>
                                <div class="content table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <th>No</th>
                                            <th>Sub Sistem</th>
                                            <th>Lost Production Cost</th>
                                            <th>Equipment Cost</th>
                                            <th>Labor Maintenance Cost</th>
                                            <th class="bg-primary" style="color:#fff;">COUR</th>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; foreach($subsystems_from_asset as $sub) { ?>
                                                <tr>
                                                    <td><?php echo ($no+1); ?></td>
                                                    <td><?php echo $sub->name; ?></td>
                                                    <td><?php echo 'Rp '.number_format($sub->corrective_lpc); ?></td>
                                                    <td><?php echo 'Rp '.number_format($sub->corrective_ec); ?></td>
                                                    <td><?php echo 'Rp '.number_format($sub->corrective_lmc); ?></td>
                                                    <td><?php echo 'Rp '.number_format($sub->corrective_cour); ?></td>
                                                </tr>
                                            <?php $no++; } ?>
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
                                    <h4 class="title">Downtime COUR</h4>
                                    <p class="category">Analyze result for each subsystems</p>
                                </div>
                                <div class="content table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <th>No</th>
                                            <th>Sub Sistem</th>
                                            <th>Lost Production Cost</th>
                                            <th>Equipment Cost</th>
                                            <th>Labor Maintenance Cost</th>
                                            <th class="bg-primary" style="color:#fff;">COUR </th>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; foreach($subsystems_from_asset as $sub) { ?>
                                                <tr>
                                                    <td><?php echo ($no+1); ?></td>
                                                    <td><?php echo $sub->name; ?></td>
                                                    <td><?php echo 'Rp '.number_format($sub->downtime_lpc); ?></td>
                                                    <td><?php echo 'Rp '.number_format($sub->downtime_ec); ?></td>
                                                    <td><?php echo 'Rp '.number_format($sub->downtime_lmc); ?></td>
                                                    <td><?php echo 'Rp '.number_format($sub->downtime_cour); ?></td>
                                                </tr>
                                            <?php $no++; } ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>


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

<!--  SelectBox Plugin -->
<script src="<?php echo base_url()?>assets/js/selectbox.js"></script>

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

        $('#select_asset').on('change', function() {
            let baseUrl = $('#base_url').val();
            let assetId = $(this).val();
            $('#asset_id').val(assetId);
            $.ajax({
                type: "GET",
                url: baseUrl+'index.php/cour/set_form_subsystem/'+assetId,
                dataType: 'json',
                success: function(response) {
                    $('#num_of_failure_table').empty();
                    var total_asset = response.length;

                    for (var i = 0; i < total_asset; i++) {
                        $('#num_of_failure_table').append(
                            '<tr>'+
                                '<td><label for="exampleInputPassword1"><b>'+response[i].name+'</b></label></td>'+
                                '<td><input name="subsys_num_of_failure[]" placeholder="Number of Failure.." type="number" class="form-control input-sm"><input type="hidden" name="subsys_id[]" value="'+response[i].id+'" /></td>'+
                            '</tr>'
                        );
                    }

                }
            });
        });

        // demo.initChartist();

        // $.notify({
        //     icon: 'pe-7s-gift',
        //     message: "Welcome to <b>Proyek Ahkhir Dono</b> - s1 Teknik industri."

        // }, {
        //     type: 'info',
        //     timer: 4000
        // });

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
