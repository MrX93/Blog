<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Administracija extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['linkovi'] = $this->_meni();

		$this->load->view('head');
		$this->load->view('navigation', $data);
		$this->load->view('content');
		$this->load->view('footer');
	}

	public function unesi($tip = NULL) {
		$data['linkovi'] = $this->_meni();

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
		$data['linkovi'] = $this->_meni();

		$this->load->view('head');
		$this->load->view('navigation', $data);
		$this->load->view('content');
		$this->load->view('footer');
	}

	public function brisanje($tip = NULL, $id = NULL) {
		$data['linkovi'] = $this->_meni();

		$this->load->view('head');
		$this->load->view('navigation', $data);
		$this->load->view('content');
		$this->load->view('footer');
	}

	public function _meni() {
		$linkovi = array();
		$linkovi[] = anchor('administracija/unesi/korisnik', 'Edituj Korisnika');
		$linkovi[] = anchor('administracija/unesi/uloga', 'Edituj Ulogu');
		$linkovi[] = anchor('administracija/unesi/post', 'Edituj Post');
		return $linkovi;
	}

}

/* End of file administracija.php */
/* Location: ./application/controllers/administracija.php */