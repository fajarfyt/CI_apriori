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
		$item = [];
		$tgl = date('Y-m');
		
		$get_id = $this->model->getIDdate('transaksi',$tgl)->result();
		foreach ($get_id as $data) {
			$id = $data->id_trans;
			$get_menu = $this->model->getMenu($id)->result();

			foreach ($get_menu as $key) {
				$a[$key->id_trans][]=$key->nama_menu;
				if ($key->qty > 1) {
					for ($i=1; $i < $key->qty; $i++) { 
						$a[$key->id_trans][]=$key->nama_menu;
					}
				}
			}
		}
		print_r($a);
	}
}
