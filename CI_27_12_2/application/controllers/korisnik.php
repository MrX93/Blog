<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Korisnik extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index($id = NULL) {
		$this->load->view('head');
		$this->load->view('navigation');
		$this->load->view('content');
		$this->load->view('aside');
		$this->load->view('footer');
	}

	public function registracija($param) {
		
	}

}

/* End of file korisnik.php */
/* Location: ./application/controllers/korisnik.php */