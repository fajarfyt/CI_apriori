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
		$jml = $this->model->jmlItem($tgl)->result();

		echo "<pre>";
		var_dump($jml);
		var_dump(count($get_id));
		
		$j=[];
		foreach ($jml as $key) {
			$item[$key->id_menu] = ($key->jmlItem/count($get_id))*100;
			if ($item[$key->id_menu]>$min_sup) {
				array_push($j, [
					$key->id_menu => $item[$key->id_menu]
				]);
			}
		}
		print_r($j);

	}
}
?>