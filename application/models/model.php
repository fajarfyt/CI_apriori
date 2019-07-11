<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

    public function auth($username, $password){
		$this->db->where('username', $username);
		$query = $this->db->get('users');
		$result = $query->row_array();

		if (!empty($result) && password_verify($password, $result['password'])) {
			return $result;
		} else {
			return false;
		}
	}

	public function getAll($table) {
		return $this->db->get($table);
	}

	public function storeData($table, $data){
		$this->db->insert($table, $data);
	}

	// select id_trans berdasarkan tgl now()
	public function getIDdate($table,$tgl) {
		$this->db->select('id_trans');
		$this->db->from($table);
		$this->db->like('tgl_trans', $tgl);
		return $this->db->get();
	}

	// select detail trans berdasarkan id transs
	public function getMenu($id){
		$this->db->select('D.id_trans,M.nama_menu,D.qty');
		$this->db->from('detail_trans D');
		$this->db->join('menu M', 'D.id_menu = M.id_menu');
		$this->db->where('D.id_trans', $id);
		return $this->db->get();
	}
	
} ?>