<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('template');
	}

	public function index()
	{
		$data['sql'] = $this->model->getAll('menu')->result();
		$this->template->render_page('page/dashboard', $data);
	}
}
?>