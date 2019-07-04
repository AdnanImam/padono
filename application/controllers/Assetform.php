 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Assetform extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
         $this->load->model('Plant_model', 'plant');
         $this->load->model('Asset_model', 'asset');
     }
 
     //Load Halaman dashboard
     public function index() {
     	$data['plants'] = $this->plant->getAllBy(array('user_id' => $_SESSION['id']));
     	$data['assets'] = $this->asset->getAllBy(array('user_id' => $_SESSION['id']));
        $this->load->view('account/v_assetform', $data);
     }

     public function create()
     {
     	$data = $this->input->post();
     	$insert = $this->asset->insert(array(
     		'name' => $data['name'],
     		'product_type' => $data['product_type'],
     		'manufacturer' => $data['manufacturer'],
     		'description' => $data['description'],
     		'start_operation' => $data['start_operation'],
     		'operation_hours_day' => $data['operation_hours_day'],
     		'operation_hours_month' => $data['operation_hours_month'],
     		'operation_hours_year' => $data['operation_hours_year'],
     		'plant_id' => $data['plant'],
     		'user_id' => $_SESSION['id'],
     	));
     	if($insert > 0) {
     		$_SESSION['asset-created'] = "Your Asset Created Successfully";
     		redirect('assetform');
     	}
     }
 }