 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Profile extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
     }
 
     //Load Halaman dashboard
     public function index() {
        $data['user'] = $this->m_account->getAllBy(array('id_user' => $_SESSION['id']));
        $this->load->view('account/v_profile', $data);
     }

     public function completeYourProfile()
     {
     	$this->load->view('account/v_complete_profile');
     }

     public function updateProfilePicture()
     {
            $user_id = $_SESSION['id'];
            $username = $_SESSION['username'];

            // upload photo
            $location_path = './uploads/users/photo/';
            $filename = $username."_".time();
            $fieldName = 'photo';
            $upload = $this->uploadPhoto($location_path, $filename, $fieldName);

            if (!$upload) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
            else {
                $data = array('upload_data' => $upload);
                $update = $this->m_account->update(array('photo' => $data['upload_data']['file_name'],), array('id_user' => $user_id));
                if($update) {
                    $_SESSION['update-photo-success'] = "Your Photo Updated Successfully!";
                    redirect('profile');  
                } 
            }
     }

     public function updateUserInfo()
     {
            $data = $this->input->post(NULL, TRUE);
            $user_data = array(
                'nama' => $data['fullname'],
                'email' => $data['email'],
                'username' => $data['username'],
                'address' => $data['address'],
                'company' => $data['company'],
                'position' => $data['position'],
            );
            $update = $this->m_account->update($user_data, array('id_user' => $data['user_id']));
            if($update) {
                $_SESSION['update-profile-success'] = "Your Profile Info Updated Successfully!";
                redirect('profile');
            }
     }

     public function completeProfile()
     {
        $data = $this->input->post(NULL, TRUE);

        // upload
        $location_path = './uploads/users/photo/';
        $filename = $data['username'].'_'.time();
        $fieldName = 'photo';
        $upload = $this->uploadPhoto($location_path, $filename, $fieldName);

        if (!$upload) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }
        else {
            $upload_data = array('upload_data' => $upload);
            $user_data = array(
                'nama' => $data['fullname'],
                'email' => $data['email'],
                'username' => $data['username'],
                'address' => $data['address'],
                'company' => $data['company'],
                'position' => $data['position'],
                'photo' => $upload_data['upload_data']['file_name'],
                'is_complete_profile' => 1
            );
            $update = $this->m_account->update($user_data, array('id_user' => $data['user_id']));
            if($update) redirect('dashboard');
        }
     }

     public function makeDir($location_path)
     {
         if(!is_dir($location_path))
            mkdir($location_path, 0755, true);
     }

     public function uploadPhoto($location_path, $filename, $fieldName)
     {
        $this->makeDir($location_path);
        $config['upload_path']          = $location_path;
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['file_name']            = $filename;
        $this->load->library('upload', $config);
        $upload = $this->upload->do_upload($fieldName);
        if($upload) {
            return $this->upload->data();
        }
        return false;
     }
 }