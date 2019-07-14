 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Ram extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
         $this->load->model('Asset_model', 'asset');
         $this->load->model('Subsystem_model', 'subsys');
         $this->load->model('Master_data_model', 'master');
     }
 
     //Load Halaman dashboard
     public function index() {
     	 $data['assets'] = $this->asset->getAllBy(array('user_id' => $_SESSION['id']));
     	 $data['first_asset'] = $this->asset->getFirstAsset();
     	 // $data['subsystem_of_first_asset'] = $this->subsys->getAllBy(array('asset_id' => $data['first_asset']->id));
     	 $data['subsystem_of_first_asset'] = $this->subsys->getAllBy(array('asset_id' => 5));

     	 $this->load->library('kalkulasi');
     	 $master_data_of_subsystem = array();
     	 for ($i=0; $i < count($data['subsystem_of_first_asset']); $i++) { 
     	 	$master_data = $this->master->getAllBy(array('subsystem_id' => $data['subsystem_of_first_asset'][$i]->id));
     	 	array_push($master_data_of_subsystem, $master_data);
     	 }

     	 $ttf_of_master_data = array();
     	 for ($i=0; $i < count($master_data_of_subsystem); $i++) { 
     	 	$no = 0;
     	 	$ttfs = array();
			foreach($master_data_of_subsystem[$i] as $master) {
				if($no == 0) {
					$no++;
					continue;
				}
				$no++;
				array_push($ttfs, $master->ttf);
			}
			$ttf_data = array(
				'ttf' => $ttfs
			);
			array_push($ttf_of_master_data, $ttf_data);     	 	
     	 }

     	 $data_reliability = array();
     	 for ($i=0; $i < count($ttf_of_master_data); $i++) { 
     	 	$reliability = $this->kalkulasi->calculateReliability(2, $ttf_of_master_data[$i]['ttf']);
     	 	array_push($data_reliability, $reliability);
     	 }


     	 echo "<pre>";
     	 print_r($data_reliability);
     	 echo "</pre>";

     	 // $data['reliabilities'] = $data_reliability;

       //   $this->load->view('account/v_ram', $data);
     }
 }