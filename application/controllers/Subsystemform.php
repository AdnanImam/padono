 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Subsystemform extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
          $this->load->model('Asset_model', 'asset');
          $this->load->model('Subsystem_model', 'subsys');
     }
 
     //Load Halaman dashboard
     public function index() {
        $data['user'] = $this->m_account->getAllBy(array('id_user' => $_SESSION['id']));
     	$data['assets'] = $this->asset->getAllBy(array('user_id' => $_SESSION['id']));
        $data['subsys'] = $this->subsys->getAllBy(array('user_id' => $_SESSION['id']));
        
		
		if($data['assets'] == null)
            $data['assets'] = array();
        		
		if($data['subsys'] == null)
            $data['subsys'] = array();
         
        $this->load->view('account/v_subsystemform', $data);
     }

     public function create()
     {
     	$data = $this->input->post();
     	$insert = $this->subsys->insert(array(
     		'name' => $data['subsys_name'],
     		'description' => $data['subsys_desc'],
     		'asset_id' => $data['asset'],
     		'user_id' => $_SESSION['id'],
     	));
     	if($insert > 0) {
     		$_SESSION['subsys-created'] = "Your Subsystem Created Successfully";
     		redirect('subsystemform');
     	}
     }
 }