<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apriori extends CI_Controller {

	private $dataset = array(array());

	public function __construct()
	{
	    parent::__construct();
		// $this->load->helper(array('form', 'url'));
		// $this->load->model('model');
		// $this->load->library('session');

		// if(!$this->session->userdata('logged_in')){
		// 	redirect(base_url("login"));
		// }

		// if($this->session->userdata('admin')){
		// 	$this->role = $this->session->userdata('admin');
		// } 
	}

	public function index()
	{
		// echo $this->dataset;
		echo '<pre>';
		// $item = [];
		$tgl = date('Y-m');
		$jumlah_trans = $this->model->getAll('transaksi')->result();
		$qty = $this->model->sum_qty($tgl)->result();
		foreach ($qty as $d) {
			$jumlah = $d->qty;
		}
		
		foreach ($jumlah_trans as $data) {
			$id_trans = $data->id_trans;
			$detail_menu = $this->model->get_detail($tgl,$id_trans)->result();
			// $this->datasets[] = $id_trans; 
			// var_dump($this->dataset);
		}

		var_dump($jumlah_qty);

		// foreach ($detail_menu as $menu) {
		// 		// array_push($this->dataset, [
		// 		// 	$id_trans => $menu->nama_menu
		// 		// ]);
		// 		$qty = $menu->qty;
		// 		$nama = $menu->nama_menu;

		// 		var_dump($qty);
		// 	}
		
		// $this->load->view('welcome_message');
	}
}
