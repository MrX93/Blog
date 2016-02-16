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
		$this->load->view('aside');
		$this->load->view('footer');
	}

	public function unesi($tip = NULL) {
		$data['linkovi'] = $this->_meni();

		$this->load->view('head');
		$this->load->view('navigation', $data);
		if (isset($tip)) {
			$this->load->view($tip);
		}
		$this->load->view('aside');
		$this->load->view('footer');
	}

	public function izmeni($tip = NULL, $id = NULL) {
		$data['linkovi'] = $this->_meni();

		$this->load->view('head');
		$this->load->view('navigation', $data);
		$this->load->view('content');
		$this->load->view('aside');
		$this->load->view('footer');
	}

	public function brisanje($tip = NULL, $id = NULL) {
		$data['linkovi'] = $this->_meni();

		$this->load->view('head');
		$this->load->view('navigation', $data);
		$this->load->view('content');
		$this->load->view('aside');
		$this->load->view('footer');
	}

	public function _meni() {
		$linkovi = array();
		$linkovi[] = anchor('administracija/unesi/korisnik', 'Upravljanje korisnicima');
		$linkovi[] = anchor('administracija/unesi/uloga', 'Upravljanje ulogama');
		$linkovi[] = anchor('administracija/unesi/post', 'Upravljanje postovima');
		return $linkovi;
	}

}

/* End of file administracija.php */
/* Location: ./application/controllers/administracija.php */