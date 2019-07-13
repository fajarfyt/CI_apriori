<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function sign_up() {
		$nama     = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = [
			'id'       => '',
			'nama'     => $nama,
			'username' => $username,
			'password' => password_hash($password, PASSWORD_BCRYPT)
		];

		$this->model->storeData('users', $data);
		redirect('auth');
	}

	public function sign_in() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$sql = $this->model->auth($username, $password);

		if ($sql != false) {
			$this->session->set_userdata('ses_id',$sql['id']);
            $this->session->set_userdata('ses_nama',$sql['username']);

			redirect('welcome');
		} else {
			redirect('auth');
		}
	}

	public function sign_out(){
        $this->session->unset_userdata('ses_id');
        $this->session->unset_userdata('ses_nama');
        redirect('auth');
    }
}
