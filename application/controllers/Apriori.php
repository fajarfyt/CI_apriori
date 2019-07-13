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
		$min_sup = 50;
		$tgl = date('Y-m');
		
		$get_id = $this->model->getIDdate('transaksi',$tgl)->result();
		// foreach ($get_id as $data) {
		// 	$id = $data->id_trans;
		// 	$get_menu = $this->model->getMenu($id)->result();

		// 	foreach ($get_menu as $key) {
		// 		$a[$key->id_trans][]=$key->nama_menu;
		// 		if ($key->qty > 1) {
		// 			for ($i=1; $i < $key->qty; $i++) { 
		// 				$a[$key->id_trans][]=$key->nama_menu;
		// 			}
		// 		}
		// 	}
		// }
		// echo "<pre>";
		// print_r($a);

		$jml = $this->model->jmlItem($tgl)->result();
		echo "<pre>";
		var_dump($jml);
		var_dump(count($get_id));
		
		$j=[];
		foreach ($jml as $key) {
			$item[$key->id_menu] = ($key->id/count($get_id))*100;
			if ($item[$key->id_menu]>$min_sup) {
				// $c1[$key->id_menu] = $item[$key->id_menu];
				array_push($j, [
					'id_menu' => $key->id_menu,
					'support' => $item[$key->id_menu]
				]);
			}
		}
		print_r($j);

	}
}
?>