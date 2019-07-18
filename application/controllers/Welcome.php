<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->cek_login();
		$this->load->library('template');
	}

	private function cek_login(){
        if (!$this->session->userdata('ses_id')){
            redirect('auth');
        }
    }

	public function index()
	{
		$data['sql'] = $this->model->getAll('menu')->result();
		$this->template->render_page('page/dashboard', $data);
	}
}
?>