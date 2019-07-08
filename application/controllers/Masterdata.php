 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Masterdata extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
         $this->load->model('Subsystem_model', 'subsys');
         $this->load->model('Asset_model', 'asset');
         $this->load->model('Master_data_model', 'master');
     }
 
     //Load Halaman dashboard
     public function index() {
     	$data['subsystems'] = $this->subsys->getAllBy(array('user_id' => $_SESSION['id']));
        $data['assets'] = $this->asset->getAllBy(array('user_id' => $_SESSION['id']));
     	$data['data_master_submit'] = $this->master->getAllBy(array('user_id' => $_SESSION['id']));
        $this->load->view('account/v_masterdata', $data);
     }

     public function import_master()
     {
        // upload photo
        $location_path = './uploads/users/import_excel/';
        $filename = $_SESSION['username']."_".time();
        $fieldName = 'excel_file';
        $upload = $this->upload_excel($location_path, $filename, $fieldName);

        if (!$upload) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }
        else {
            $data = array('upload_data' => $upload);
            $input_data = $this->input->post();
            $filepath = $location_path.$data['upload_data']['file_name'];
            $this->load->library('libexcel');
            $import = $this->libexcel->import_master($filepath);
            $total_data = count($import);
            for ($i=0; $i < $total_data; $i++) { 
            	$import[$i]['subsystem_id'] = $input_data['subsystem'];
            	$import[$i]['user_id'] = $_SESSION['id'];
            }
            $data['import_preview'] = $import;
            $data['subsystems'] = $this->subsys->getAllBy(array('user_id' => $_SESSION['id']));
            $_SESSION['data-master'] = $data['import_preview'];
            $_SESSION['imported'] = "true";
            $this->load->view('account/v_masterdata', $data);
        }
     }

     public function submit_master()
     {
     	if(!empty($_SESSION['data-master'])) {
     		$insert_master = $this->master->insert_batch($_SESSION['data-master']);
     		if($insert_master) {
     			redirect('masterdata');
     			unset($_SESSION['imported']);
     		}
     	}
     }

     public function changeSubsystem()
     {
         $subsystem_id = $this->input->post('changed_subsystem');
         $data['subsystems'] = $this->subsys->getAllBy(array('user_id' => $_SESSION['id']));
         $data['data_master_submit'] = $this->master->getAllBy(array('user_id' => $_SESSION['id'], 'subsystem_id' => $subsystem_id));
         $_SESSION['selected_subsystem'] = $subsystem_id;
         $this->load->view('account/v_masterdata', $data);
     }

     public function makeDir($location_path)
     {
         if(!is_dir($location_path))
            mkdir($location_path, 0755, true);
     }

     public function upload_excel($location_path, $filename, $fieldName)
     {
        $this->makeDir($location_path);
        $config['upload_path']          = $location_path;
        $config['allowed_types']        = 'xls|xlsx|csv';
        $config['file_name']            = $filename;
        $this->load->library('upload', $config);
        $upload = $this->upload->do_upload($fieldName);
        if($upload) {
            return $this->upload->data();
        }
        return false;
     }

     public function download_template($value='')
     {
         $this->load->helper('download');
         force_download('./assets/template_excel/template_master.xlsx', NULL);
     }
 }