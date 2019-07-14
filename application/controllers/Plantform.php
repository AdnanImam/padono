 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Plantform extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
         $this->load->model('Plant_model', 'plant');
     }
 
     //Load Halaman dashboard
     public function index() {
        $data['plants'] = $this->plant->getAllBy(array('user_id' => $_SESSION['id']));
        if($data['plants'] == null)
            $data['plants'] = array();
        $this->load->view('account/v_plantform', $data);
     }

     public function create()
     {
     	$data = $this->input->post();
     	$insert = $this->plant->insert(array(
     		'plant' => $data['plant'],
     		'description' => $data['description'],
     		'user_id' => $_SESSION['id'],
     	));
     	if($insert > 0) {
     		$_SESSION['plant-created'] = "Your Plant Created Successfully";
     		redirect('plantform');
     	}
     }
 }