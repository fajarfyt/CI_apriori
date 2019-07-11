<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {
	protected $_ci;

	function __construct(){
		$this->_ci = &get_instance();
	}

	function render_page($content, $data = NULL) {
		$data['content'] = $this->_ci->load->view($content, $data, TRUE);

		$this->_ci->load->view('welcome_message', $data);
	}
}
?>