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
			if($master_data!=null){
				foreach ($master_data as $key => $value) {
					array_push($ttf_data, $value->ttf);
				}
			}
     	 	array_push($master_data_of_subsystem, array('name'=>$data['subsystem_of_first_asset'][$i]->name, 'mttr'=>$data['subsystem_of_first_asset'][$i]->mttr, 'mttf'=>$data['subsystem_of_first_asset'][$i]->mttf, 'mdt'=>$data['subsystem_of_first_asset'][$i]->mdt, 'ttf'=>$ttf_data));
		  }

		  $data['max_size'] = 0;
		  $data['max_size_maintainability'] = 0;
		  $data_reliability = array();
		  $data_maintainability = array();
		  $data_inherent_availability = array();
		  $data_operational_availability = array();
		  foreach ($master_data_of_subsystem as $key => $value) {
				if (sizeof($value['ttf'])!=0) {
					array_splice($value['ttf'], 0, 1);
					$reliability = $this->kalkulasi->calculateReliability($data['first_asset']->operation_hours_day, $value['ttf']);
					array_push($data_reliability, array('name'=>$value['name'], 'reliability'=>$reliability));
					if($data['max_size']<sizeof($reliability)){
						$data['max_size'] = sizeof($reliability);
					}
				}
				$maintainability = $this->kalkulasi->calculateMaintainability($value['mttr']);
				if($data['max_size_maintainability']<sizeof($maintainability)){
					$data['max_size_maintainability'] = sizeof($maintainability);
				}
				array_push($data_maintainability, array('name'=>$value['name'], 'maintainability'=>$maintainability));
				array_push($data_inherent_availability, array('name'=>$value['name'], 'mttr'=>$value['mttr'], 'mttf'=>$value['mttf']));
				array_push($data_operational_availability, array('name'=>$value['name'], 'oprational_time'=>$data['first_asset']->operation_hours_year, 'mdt'=>$value['mdt']));
		  }


     	//  echo "<pre>";
     	//  print_r($data_inherent_availability);
     	//  echo "</pre>";

     	 $data['reliabilities'] = $data_reliability;
     	 $data['maintainabilities'] = $data_maintainability;
     	 $data['inherent_availabilities'] = $data_inherent_availability;
     	 $data['operational_availabilities'] = $data_operational_availability;

         $this->load->view('account/v_ram', $data);
     }
 }