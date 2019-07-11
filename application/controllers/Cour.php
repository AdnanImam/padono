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
     	$total_biaya_peralatan = $data['price_per_material'] + $data['material_price'];
     	$data['total_biaya_peralatan'] = $total_biaya_peralatan;
     	
     	$jumlah_jam_kerja_perbulan = $data['workday_per_month'] * $data['shift_per_day'] * $data['workhour_per_shift'];
     	$data['jumlah_jam_kerja_perbulan'] = $jumlah_jam_kerja_perbulan;

     	$upah_per_jam = $data['technician_salary'] / $jumlah_jam_kerja_perbulan;
     	$hasil_akhir = $data['techniciant_per_maintenance'] * $upah_per_jam;
     	$data['biaya_engineer'] = $hasil_akhir;

        $lost_revenue = $data['machine_capacity_per_hour'] * $data['product_price'];
        $data['lost_revenue'] = $lost_revenue;

        $num_of_failure = $this->input->post('subsys_num_of_failure');
        $subsys_ids = $this->input->post('subsys_id');

        $failure_rate = "";
        $subsys = "";
        for ($i=0; $i < count($subsys_ids); $i++) { 
            $subsys = $this->db->query("SELECT * FROM subsystems WHERE id='$subsys_ids[$i]'")->row();
            $subsys_mttf = $subsys->mttf;
            $subsys_mttr = $subsys->mttr;
            $subsys_mdt = $subsys->mdt;

            $failure_rate = 1 / $subsys_mttf;
            $data_failure_rate = array('failure_rate' => $failure_rate);
            $this->db->update('subsystems', $data_failure_rate, array('id' => $subsys_ids[$i]));

            $corrective_lost_time = $subsys_mttr * $num_of_failure[$i];
            $data_corrective_lost_time = array('corrective_lost_time' => $corrective_lost_time);
            $this->db->update('subsystems', $data_corrective_lost_time, array('id' => $subsys_ids[$i]));

            $downtime_lost_time = $subsys_mdt * $num_of_failure[$i];
            $data_downtime_lost_time = array('downtime_lost_time' => $downtime_lost_time);
            $this->db->update('subsystems', $data_downtime_lost_time, array('id' => $subsys_ids[$i]));

            // corrective cour
            $lost_production_cost = $corrective_lost_time * $lost_revenue;
            $equipment_cost = $corrective_lost_time * $total_biaya_peralatan;
            $labor_maintenance_cost = $corrective_lost_time * $hasil_akhir;
            $corrective_cour = $lost_production_cost + $equipment_cost + $labor_maintenance_cost;
            $data_correctives = array(
                'corrective_lpc' => $lost_production_cost,
                'corrective_ec' => $equipment_cost,
                'corrective_lmc' => $labor_maintenance_cost,
                'corrective_cour' => $corrective_cour,
            );
            $this->db->update('subsystems', $data_correctives, array('id' => $subsys_ids[$i]));


            // downtime cour
            $dt_lost_production_cost = $downtime_lost_time * $lost_revenue;
            $dt_equipment_cost = $downtime_lost_time * $total_biaya_peralatan;
            $dt_labor_maintenance_cost = $downtime_lost_time * $hasil_akhir;
            $downtime_cour = $dt_lost_production_cost + $dt_equipment_cost + $dt_labor_maintenance_cost;
            $data_downtime = array(
                'downtime_lpc' => $dt_lost_production_cost,
                'downtime_ec' => $dt_equipment_cost,
                'downtime_lmc' => $dt_labor_maintenance_cost,
                'downtime_cour' => $downtime_cour,
            );
            $this->db->update('subsystems', $data_downtime, array('id' => $subsys_ids[$i]));
        }

        $data['subsystems_from_asset'] = $this->subsys->getAllBy(array('asset_id' => $data['asset_id']));

        

        //$data['subsystems'] = $subsys;

     	//$total_gaji = $data['techniciant_per_maintenance'] * $data['technician_salary'];

     	//$gaji_teknisi_per_jam = $total_gaji / $jumlah_jam_kerja_perbulan;
     	//$data['gaji_teknisi_per_jam'] = $jumlah_jam_kerja_perbulan;

     	

     	// $failure_rate =  1 / $mttf; 

     	$this->load->view('account/v_cour', $data);
     }

     public function set_form_subsystem($asset_id)
     {
     	$subsystems = $this->subsys->getAllBy(array('asset_id' => $asset_id, 'user_id' => $_SESSION['id']));
		return $this->output
        			->set_content_type('application/json')
        			->set_output(json_encode($subsystems));
     }
 }