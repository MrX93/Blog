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
	
	public function ajaxTest() {
		if ($this->session->userdata('ime')) {
			$postPodaci = array(
					'ime' => $this->input->post('ime'),
					'godine' => $this->input->post('godine')
			);
		}
		
		$cars = array(
				array("Volvo", 22, 18),
				array("BMW", 15, 13),
				array("Saab", 5, 2),
				array("Land Rover", 17, 15)
		);
		
		echo json_encode($cars);
	}

}

/* End of file post.php */
/* Location: ./application/controllers/post.php */