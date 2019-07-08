 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Cour extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
         $this->load->model('Asset_model', 'asset');
         $this->load->model('Subsystem_model', 'subsys');
     }
 
     //Load Halaman dashboard
     public function index() {
     	 $data['assets'] = $this->asset->getAllBy(array('user_id' => $_SESSION['id']));
     	 //$data['subsystems'] = $this->asset->getAllBy(array('user_id' => $_SESSION['id']));
         $this->load->view('account/v_cour', $data);
     }

     public function analyze()
     {
     	$data = $this->input->post();

     	$total_peralatan = $data['price_per_material'] + $data['material_price'];

     	$jumlah_jam_kerja_perbulan = $data['workday_per_month'] * $data['shift_per_day'] * $data['shift_per_day'];
     	$total_gaji = $data['techniciant_per_maintenance'] * $data['technician_salary'];

     	$gaji_teknisi_per_jam = $total_gaji / $jumlah_jam_kerja_perbulan;
     	$lost_revenue = $data['machine_capacity_per_hour'] * $data['product_price'];


     }

     public function set_form_subsystem($asset_id)
     {
     	$subsystems = $this->subsys->getAllBy(array('asset_id' => $asset_id, 'user_id' => $_SESSION['id']));
		return $this->output
        			->set_content_type('application/json')
        			->set_output(json_encode($subsystems));
     }
 }