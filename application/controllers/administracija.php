<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Administracija extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {

		$data = array();
		$data['link1'] = anchor('administracija/unesi/korisnik', 'Edituj Korisnika');
		$data['link2'] = anchor('administracija/unesi/uloga', 'Edituj Ulogu');
		$data['link3'] = anchor('administracija/unesi/post', 'Edituj Post');

		$this->load->view('head');
		$this->load->view('navigation', $data);
		$this->load->view('content');
		$this->load->view('footer');
	}

	public function unesi($tip = NULL) {
		$data = array();
		$data['link1'] = anchor('administracija/unesi/korisnik', 'Edituj Korisnika');
		$data['link2'] = anchor('administracija/unesi/uloga', 'Edituj Ulogu');
		$data['link3'] = anchor('administracija/unesi/post', 'Edituj Post');

		switch ($tip) {
			case 'korisnik':
				echo 'korisnik';
				break;
			case 'uloga':
				echo 'uloga';
				break;
			case 'post':
				echo 'post';
				break;

			default:
				break;
		}

		$this->load->view('head');
		$this->load->view('navigation', $data);
		$this->load->view('content');
		$this->load->view('footer');
	}

	public function izmeni($tip = NULL, $id = NULL) {
		$data = array();
		$data['link1'] = anchor('administracija/unesi/korisnik', 'Edituj Korisnika');
		$data['link2'] = anchor('administracija/unesi/uloga', 'Edituj Ulogu');
		$data['link3'] = anchor('administracija/unesi/post', 'Edituj Post');

		$this->load->view('head');
		$this->load->view('navigation', $data);
		$this->load->view('content');
		$this->load->view('footer');
	}

	public function brisanje($tip = NULL, $id = NULL) {
		$data = array();
		$data['link1'] = anchor('administracija/unesi/korisnik', 'Edituj Korisnika');
		$data['link2'] = anchor('administracija/unesi/uloga', 'Edituj Ulogu');
		$data['link3'] = anchor('administracija/unesi/post', 'Edituj Post');

		$this->load->view('head');
		$this->load->view('navigation', $data);
		$this->load->view('content');
		$this->load->view('footer');
	}

}

/* End of file administracija.php */
/* Location: ./application/controllers/administracija.php */