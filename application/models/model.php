<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	//ambil semua data (select *)
	public function getAll($table){
		return $this->db->get($table);
	}

	public function get_detail($tgl,$id_trans)
	{
		# code...
		$this->db->select('a.*,b.*,c.*');
		$this->db->from('detail_trans a'); 
		$this->db->join('menu b', 'b.id_menu = a.id_menu', 'left');
		$this->db->join('transaksi c', 'c.id_trans = a.id_trans', 'left');
		$this->db->like('c.tgl_trans', $tgl);
		$this->db->where('a.id_trans', $id_trans);
		// $this->db->order_by('a.id_detail', 'asc');
		return $this->db->get();
	}

	public function sum_qty($tgl)
	{
		# code...
		$this->db->select_sum('a.qty');
		$this->db->from('detail_trans a');
		$this->db->join('transaksi c', 'c.id_trans = a.id_trans', 'left');
		$this->db->like('tgl_trans', $tgl);
		return $this->db->get();
	}
	
} ?>