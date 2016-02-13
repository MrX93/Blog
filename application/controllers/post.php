<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Post extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index($id_kategorija = NULL) {
		$this->load->view('head');
		$this->load->view('navigation');
		$this->load->view('content');
		$this->load->view('aside');
		$this->load->view('footer');
	}

	public function postavi() {
		
	}

	public function prikazi($id = 0) {
		
	}

	public function komentarisi($id_post = 0) {
		
	}

}

/* End of file post.php */
/* Location: ./application/controllers/post.php */