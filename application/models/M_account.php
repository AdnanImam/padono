 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_account extends CI_Model {

       public function daftar($data)
       {
            $this->db->insert('users',$data);
       }

       public function update($data, $where)
       {
       		$this->db->where($where);
       		return $this->db->update('users', $data);
       }

       public function getAllBy($where)
       {
       		$this->db->where($where);
       		$query = $this->db->get('users');
       		if($query->num_rows() > 0) {
       			return $query->row();
       		}
       		return false;
       }
  }
 
