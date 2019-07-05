<?php
defined ('BASEPATH') OR EXIT ('No Direct Script Access Allowed');

class Asset_model extends CI_Model {

        public function insert($data)
        {
        	$query = $this->db->insert('assets', $data);
        	return $this->db->insert_id();
        }

        public function getAllBy($where)
        {
        	$this->db->where($where);
        	$query = $this->db->get('assets');
        	if($query->num_rows() > 0) {
        		return $query->result();
        	} else {
        		return null;
        	}
        }

        public function getCountAllBy($where)
        {
        	$this->db->where($where);
        	$query = $this->db->get('assets');
        	return $query->num_rows();
        }

}