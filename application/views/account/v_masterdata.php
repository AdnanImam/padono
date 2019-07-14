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
                                        <small><li>Jika belum memiliki, silahkan download template <a href="<?php echo base_url(); ?>index.php/masterdata/download_template" class="text-primary"><b>disini</b></a></li></small>
                                        <small><li>Kolom yang kosong akan dianggap sebagai error, sehingga tidak akan diimport, untuk mengatasi hal tersebut silahkan beri nilai "--" sebagai penanda kolom kosong.</li></small>
                                    </ol>
                                    <form enctype="multipart/form-data" method="POST" action="<?php echo base_url(); ?>index.php/Masterdata/import_master">
                                    <div class="row" style="padding-left: 40px;">
                                        <div class="cold-md-6">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Asset</label>
                                                    <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
                                                    <select name="select_asset" id="select_asset" class="form-control input-sm" style="font-size: 11px; padding: 5px;">
                                                        <option disabled selected>-- Pilih Asset --</option>
                                                        <?php $no=1; foreach($assets as $asset) { ?>
                                                            <option value="<?php echo $asset->id; ?>"><?php echo $asset->name; ?></option>
                                                        <?php $no++; } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Subsystem</label>
                                                    <select name="subsystem" id="subsystem" class="form-control input-sm" style="font-size: 11px; padding: 5px;">
                                                        <option disabled selected>-- Pilih Asset Terlebih Dahulu --</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>File Excel</label>
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
                                        <div class="col-md-12" style="margin-top: 15px; margin-bottom: 15px;">
                                            <form method="POST" action="<?php echo base_url(); ?>index.php/masterdata/changeSubsystem">

                                                <div class="col-md-3">
                                                    <select name="select_asset" id="select_asset2" class="form-control input-sm" style="font-size: 11px; padding: 5px;">
                                                        <option disabled selected>-- Pilih Asset --</option>
                                                        <?php $no=1; foreach($assets as $asset) { ?>
                                                            <option value="<?php echo $asset->id; ?>"><?php echo $asset->name; ?></option>
                                                        <?php $no++; } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <select onchange="this.form.submit()" class="form-control col-md-5 input-sm" id="select_subsystem2" name="changed_subsystem">
                                                        <option disabled selected>-- Pilih Asset Terlebih Dahulu --</option>
                                                    </select>
                                                </div>


                                            </form>
                                        </div>
                                    </div>
                                    <table class="table table-bordered" style="margin-top: 10px;" id="" width="100%" cellspacing="0">
                                        <thead>
                                            <th>No.</th>
                                            <th>Failure Start</th>
                                            <th>Start Repair</th>
                                            <th>Repair Finish</th>
                                            <th>Downtime</th>
                                            <th>TTR (Hours)</th>
                                            <th>TTF (Hours)</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $additional_data = array();
                                                $additional_temp = array(); 
                                                $subsystem_id = $_SESSION['selected_subsystem'];
                                                $no = 0; $temp = ""; foreach($data_master_submit as $preview) { 
                                            ?>
                                            <tr>
                                                <td><?php echo ($no+1);  $no++?></td>
                                                <td><?php echo $preview->failure_start; ?></td>
                                                <td><?php echo $preview->start_repair; ?></td>
                                                <td><?php echo $preview->repair_finish; ?></td>
                                                <td><?php echo $preview->dt; ?></td>
                                                <td><?php echo $preview->ttr; ?></td>
                                                <td><?php echo $preview->ttf; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row 2-->

                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="card">
                                <div class="header" style="padding-bottom: 10px;">
                                    <h4 class="title">MTTR Calculation</h4>
                                    <table class="table table-bordered" style="margin-top: 10px;" id="" width="100%" cellspacing="0">
                                        <?php  
                                            $ttr_array = array();
                                            foreach($data_master_submit as $preview) { 
                                                array_push($ttr_array, $preview->ttr);
                                            }
                                            $ttr_sample_size = count($ttr_array);
                                            $CI =& get_instance();
                                            $CI->load->library('kalkulasi');

                                            $mean_ttr = $CI->kalkulasi->calculateMu($ttr_array);
                                            $standar_deviation = $CI->kalkulasi->calculateSigma($ttr_array);
                                            $dmax_ttr_normal = $CI->kalkulasi->calculateDMaxNormal($ttr_array);
                                            $dmax_ttr_exponen = $CI->kalkulasi->calculateDMaxExponensial($ttr_array);
                                            $dmax_ttr_weibull = $CI->kalkulasi->calculateDMaxWeibull($ttr_array);
                                            $ttr_rate = $CI->kalkulasi->calculateLamda($ttr_array);
                                            $ttr_shape = $CI->kalkulasi->calclateBeta($ttr_array);
                                            $ttr_intercept = $CI->kalkulasi->calculateAlpha($ttr_array);
                                            $ttr_scale = $CI->kalkulasi->calculateEta($ttr_array);

                                            $mttr = ""; 
                                            $distribusi_mttr = "";
                                            $dmax_minimum = min($dmax_ttr_normal, $dmax_ttr_exponen, $dmax_ttr_weibull); 
                                            if($dmax_minimum == $dmax_ttr_weibull) {
                                                $distribusi_mttr = "Weibull";
                                                $mttr = ($mean_ttr*$CI->kalkulasi->gamma(1+(1/$ttr_shape)));
                                            } else {
                                                if($dmax_minimum == $dmax_ttr_exponen){
                                                    $distribusi_mttr = "Exponen";
                                                } else {
                                                    $distribusi_mttr = "Normal";
                                                }
                                                $mttr = $mean_ttr;
                                            }
                                            $data_mttr = array('mttr' => $mttr);
                                            $this->db->update('subsystems', $data_mttr, array('id' => $subsystem_id));

                                        ?>
                                        <thead>
                                            <tr>
                                                <th>Sample Size</th>
                                                <td><?php echo $ttr_sample_size; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Mean</th>
                                                <td><?php echo $mean_ttr; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Standard Deviation</th>
                                                <td><?php echo $standar_deviation; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Dmax Normal</th>
                                                <td><?php echo $dmax_ttr_normal; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Dmax Exponential</th>
                                                <td><?php echo $dmax_ttr_exponen; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Dmax Weibull</th>
                                                <td><?php echo $dmax_ttr_weibull; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Rate</th>
                                                <td><?php echo $ttr_rate; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Intercept</th>
                                                <td><?php echo $ttr_intercept; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Shape</th>
                                                <td><?php echo $ttr_shape; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Scale</th>
                                                <td><?php echo $ttr_scale; ?></td>
                                            </tr>
                                            <tr colspan="9">
                                                <td colspan="9" style="font-size: 16px; padding: 20px;"><?php echo '<b>MTTR : </b>'.$mttr.' ('.$distribusi_mttr.')'; ?></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row 2-->

                     <div class="row">
                        <div class="col-md-12 ">
                            <div class="card">
                                <div class="header" style="padding-bottom: 10px;">
                                    <h4 class="title">MTTF Calculation</h4>
                                    <table class="table table-bordered" style="margin-top: 10px;" id="" width="100%" cellspacing="0">
                                        <?php  
                                            $ttf_array = array();
                                            $no = 0;
                                            foreach($data_master_submit as $preview) {
                                                if($no == 0) {
                                                    $no++;
                                                    continue;
                                                }
                                                else {
                                                    array_push($ttf_array, $preview->ttf);
                                                    $no++;
                                                }
                                            }
                                            $ttr_sample_size = count($ttf_array);
                                            $CI =& get_instance();
                                            $CI->load->library('kalkulasi');

                                            $mean_ttf = $CI->kalkulasi->calculateMu($ttf_array);
                                            $standar_deviation = $CI->kalkulasi->calculateSigma($ttf_array);
                                            $dmax_ttf_normal = $CI->kalkulasi->calculateDMaxNormal($ttf_array);
                                            $dmax_ttf_exponen = $CI->kalkulasi->calculateDMaxExponensial($ttf_array);
                                            $dmax_ttf_weibull = $CI->kalkulasi->calculateDMaxWeibull($ttf_array);
                                            $ttr_rate = $CI->kalkulasi->calculateLamda($ttf_array);
                                            $ttf_shape = $CI->kalkulasi->calclateBeta($ttf_array);
                                            $ttr_intercept = $CI->kalkulasi->calculateAlpha($ttf_array);
                                            $ttf_scale = $CI->kalkulasi->calculateEta($ttf_array);

                                            $mttf = ""; 
                                            $distribusi_mttf = "";
                                            $dmax_minimum = min($dmax_ttf_normal, $dmax_ttf_exponen, $dmax_ttf_weibull); 
                                            if($dmax_minimum == $dmax_ttf_weibull) {
                                                $distribusi_mttf = "Weibull";
                                                $mttf = ($ttf_scale*$CI->kalkulasi->gamma(1+(1/$ttf_shape)));
                                            } else {
                                                if($dmax_minimum == $dmax_ttf_exponen){
                                                    $distribusi_mttf = "Exponen";
                                                } else {
                                                    $distribusi_mttf = "Normal";
                                                }
                                                $mttf = $mean_ttf;
                                            }
                                            $data_mttf = array('mttf' => $mttf);
                                            $this->db->update('subsystems', $data_mttf, array('id' => $subsystem_id));

                                        ?>
                                        <thead>
                                            <tr>
                                                <th>Sample Size</th>
                                                <td><?php echo ($ttr_sample_size+1); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Mean</th>
                                                <td><?php echo $mean_ttf; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Standard Deviation</th>
                                                <td><?php echo $standar_deviation; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Dmax Normal</th>
                                                <td><?php echo $dmax_ttf_normal; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Dmax Exponential</th>
                                                <td><?php echo $dmax_ttf_exponen; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Dmax Weibull</th>
                                                <td><?php echo $dmax_ttf_weibull; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Rate</th>
                                                <td><?php echo $ttr_rate; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Intercept</th>
                                                <td><?php echo $ttr_intercept; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Shape</th>
                                                <td><?php echo $ttf_shape; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Scale</th>
                                                <td><?php echo $ttf_scale; ?></td>
                                            </tr>
                                            <tr colspan="9">
                                                <td colspan="9" style="font-size: 16px; padding: 20px;"><?php echo '<b>MTTF : </b>'.$mttf.' ('.$distribusi_mttf.')'; ?></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row 2-->

                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="card">
                                <div class="header" style="padding-bottom: 10px;">
                                    <h4 class="title">MDT Calculation</h4>
                                    <table class="table table-bordered" style="margin-top: 10px;" id="" width="100%" cellspacing="0">
                                        <?php  
                                            $dt_array = array();
                                            foreach($data_master_submit as $preview) { 
                                                array_push($dt_array, $preview->dt);
                                            }
                                            $dt_sample_size = count($dt_array);
                                            $CI =& get_instance();
                                            $CI->load->library('kalkulasi');

                                            $mean_dt = $CI->kalkulasi->calculateMu($dt_array);
                                            $standar_deviation_dt = $CI->kalkulasi->calculateSigma($dt_array);
                                            $dmax_dt_normal = $CI->kalkulasi->calculateDMaxNormal($dt_array);
                                            $dmax_dt_exponen = $CI->kalkulasi->calculateDMaxExponensial($dt_array);
                                            $dmax_dt_weibull = $CI->kalkulasi->calculateDMaxWeibull($dt_array);
                                            $dt_rate = $CI->kalkulasi->calculateLamda($dt_array);
                                            $dt_shape = $CI->kalkulasi->calclateBeta($dt_array);
                                            $dt_intercept = $CI->kalkulasi->calculateAlpha($dt_array);
                                            $dt_scale = $CI->kalkulasi->calculateEta($dt_array);

                                            $mdt = ""; 
                                            $distribusi_mdt = "";
                                            $dmax_minimum = min($dmax_dt_normal, $dmax_dt_exponen, $dmax_dt_weibull); 
                                            if($dmax_minimum == $dmax_dt_weibull) {
                                                $distribusi_mdt = "Weibull";
                                                $mdt = ($mean_dt*$CI->kalkulasi->gamma(1+(1/$dt_shape)));
                                            } else {
                                                if($dmax_minimum == $dmax_dt_exponen){
                                                    $distribusi_mdt = "Exponen";
                                                } else {
                                                    $distribusi_mdt = "Normal";
                                                }
                                                $mdt = $mean_dt;
                                            }
                                            $data_mdt = array('mdt' => $mdt);
                                            $this->db->update('subsystems', $data_mdt, array('id' => $subsystem_id));

                                        ?>
                                        <thead>
                                            <tr>
                                                <th>Sample Size</th>
                                                <td><?php echo $dt_sample_size; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Mean</th>
                                                <td><?php echo $mean_dt; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Standard Deviation</th>
                                                <td><?php echo $standar_deviation_dt; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Dmax Normal</th>
                                                <td><?php echo $dmax_dt_normal; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Dmax Exponential</th>
                                                <td><?php echo $dmax_dt_exponen; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Dmax Weibull</th>
                                                <td><?php echo $dmax_dt_weibull; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Rate</th>
                                                <td><?php echo $dt_rate; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Intercept</th>
                                                <td><?php echo $dt_intercept; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Shape</th>
                                                <td><?php echo $dt_shape; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Scale</th>
                                                <td><?php echo $dt_scale; ?></td>
                                            </tr>
                                            <tr colspan="9">
                                                <td colspan="9" style="font-size: 16px; padding: 20px;"><?php echo '<b>MDT : </b>'.$mdt.' ('.$distribusi_mdt.')'; ?></td>
                                            </tr>
                                        </thead>
                                    </table>
                                    <?php unset($_SESSION['selected_subsystem']); ?>
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
                                        <div class="col-md-12" style="margin-top: 15px; margin-bottom: 15px;">
                                            <form method="POST" action="<?php echo base_url(); ?>index.php/masterdata/changeSubsystem">
                                                <div class="col-md-3">
                                                <select name="select_asset" id="select_asset2" class="form-control input-sm" style="font-size: 11px; padding: 5px;">
                                                    <option disabled selected>-- Pilih Asset --</option>
                                                    <?php $no=1; foreach($assets as $asset) { ?>
                                                        <option value="<?php echo $asset->id; ?>"><?php echo $asset->name; ?></option>
                                                    <?php $no++; } ?>
                                                </select>
                                                </div>
                                                <div class="col-md-3">
                                                <select onchange="this.form.submit()" class="form-control col-md-5 input-sm" id="select_subsystem2" name="changed_subsystem">
                                                    <option disabled selected>-- Pilih Asset Terlebih Dahulu --</option>
                                                </select>
                                                </div>
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

    $(document).ready(function() {

        $('#select_asset').on('change', function() {
            let baseUrl = $('#base_url').val();
            let assetId = $(this).val();
            $.ajax({
                type: "GET",
                url: baseUrl+'index.php/cour/set_form_subsystem/'+assetId,
                dataType: 'json',
                success: function(response) {
                    $('#subsystem').empty();
                    var total_subsys = response.length;
                    for (var i = 0; i < total_subsys; i++) {
                        $('#subsystem').append(
                            '<option value="'+response[i].id+'">'+
                                response[i].name+
                            '</option>'
                        );
                    }

                }
            });
        });

        $('#select_asset2').on('change', function() {
            let baseUrl = $('#base_url').val();
            let assetId = $(this).val();
            $.ajax({
                type: "GET",
                url: baseUrl+'index.php/cour/set_form_subsystem/'+assetId,
                dataType: 'json',
                success: function(response) {
                    console.log(response[0].id);
                    $('#select_subsystem2').empty();
                    var total_subsys = response.length;
                    $('#select_subsystem2').append(
                            '<option disabled selected>'+
                            '-- Pilih Subsystem --</option>'
                        );
                    for (var i = 0; i < total_subsys; i++) {
                        $('#select_subsystem2').append(
                            '<option value="'+response[i].id+'">'+
                                response[i].name+
                            '</option>'
                        );
                    }

                }
            });
        });

    });

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
