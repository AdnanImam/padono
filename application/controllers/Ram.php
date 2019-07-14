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
     	 $data['subsystem_of_first_asset'] = $this->subsys->getAllBy(array('asset_id' => $data['first_asset']->id));

     	 $this->load->library('kalkulasi');
     	 $master_data_of_subsystem = array();
     	 for ($i=0; $i < count($data['subsystem_of_first_asset']); $i++) { 
			$ttf_data = array();
			$master_data = $this->master->getAllBy(array('subsystem_id' => $data['subsystem_of_first_asset'][$i]->id));
			foreach ($master_data as $key => $value) {
				array_push($ttf_data, $value->ttf);
			}
     	 	array_push($master_data_of_subsystem, array('name'=>$data['subsystem_of_first_asset'][$i]->name, 'ttf'=>$ttf_data));
		  }

		  $data['max_size'] = 0;
		  $data_reliability = array();
		  foreach ($master_data_of_subsystem as $key => $value) {
			array_splice($value['ttf'], 0, 1);
			$reliability = $this->kalkulasi->calculateReliability($data['first_asset']->operation_hours_day, $value['ttf']);
			array_push($data_reliability, array('name'=>$value['name'], 'reliability'=>$reliability));
			if($data['max_size']<sizeof($reliability)){
				$data['max_size'] = sizeof($reliability);
			}
		  }


     	//  echo "<pre>";
     	//  print_r($data_reliability);
     	//  echo "</pre>";

     	 $data['reliabilities'] = $data_reliability;

         $this->load->view('account/v_ram', $data);
     }
 }