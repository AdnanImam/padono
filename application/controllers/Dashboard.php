 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Dashboard extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
         $this->load->model('Plant_model', 'plant');
         $this->load->model('Asset_model', 'asset');
         $this->load->model('Subsystem_model', 'subsys');
     }
 
     //Load Halaman dashboard
     public function index() {
     	$data['total_plant'] = $this->plant->getCountAllBy(array('user_id' => $_SESSION['id']));
     	$data['total_asset'] = $this->asset->getCountAllBy(array('user_id' => $_SESSION['id']));
        $data['total_subsystem'] = $this->subsys->getCountAllBy(array('user_id' => $_SESSION['id']));
        $this->load->view('account/v_dashboard', $data);
     }
 }