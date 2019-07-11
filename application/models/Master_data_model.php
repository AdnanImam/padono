<?php
defined ('BASEPATH') OR EXIT ('No Direct Script Access Allowed');

class Master_data_model extends CI_Model {

        public function insert($data)
        {
        	$query = $this->db->insert('master_data', $data);
        	return $this->db->insert_id();
        }

        public function insert_batch($data)
        {
                return $this->db->insert_batch('master_data', $data);
        }

        public function getAllBy($where)
        {
        	$this->db->where($where);
        	$query = $this->db->get('master_data');
        	if($query->num_rows() > 0) {
        		return $query->result();
        	} else {
        		return null;
        	}
        }

        public function getCountAllBy($where)
        {
        	$this->db->where($where);
        	$query = $this->db->get('master_data');
        	return $query->num_rows();
        }

        public function update($data,$where) {
                $this->db->update('master_data', $data, $where);
                return $this->db->affected_rows();
        }

}