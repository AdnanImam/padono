<?php
defined ('BASEPATH') OR EXIT ('No Direct Script Access Allowed');

class Plant_model extends CI_Model {

        public function insert($data)
        {
        	$query = $this->db->insert('plant', $data);
        	return $this->db->insert_id();
        }

        public function getAllBy($where)
        {
        	$this->db->where($where);
        	$query = $this->db->get('plant');
        	if($query->num_rows() > 0) {
        		return $query->result();
        	} else {
        		return null;
        	}
        }

        public function getCountAllBy($where)
        {
        	$this->db->where($where);
        	$query = $this->db->get('plant');
        	return $query->num_rows();
        }

}