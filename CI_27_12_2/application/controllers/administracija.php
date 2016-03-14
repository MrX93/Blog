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

	public function unesi($tip = NULL) 
	{
		$this->load->model('Uloga_model');
		
		$data['linkovi'] = $this->_meni();
		
		$this->load->view('head');
		$this->load->view('navigation', $data);
		
		switch ($tip) {
			case 'uloga':
				$this->form_validation->set_rules('name', 'Naziv', 'required|min_length[5]');
				break;

			case 'korisnik':
				$this->form_validation->set_rules('username', 'Korisnicko ime', 'required|alpha_numeric');
				$this->form_validation->set_rules('password', 'Lozinka', 'required|alpha_numeric');
				$this->form_validation->set_rules('password', 'Lozinka', 'required|alpha_numeric');
				$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
				break;

			default:
				break;
		}

		$this->form_validation->set_message('required', 'Polje %s je obavezno!');
		$this->form_validation->set_message('min_length', 'Polje %s mora da bude duze od %d karaktera');
		$this->form_validation->set_message('alpha_numeric', 'Polje %s moze da sadrzi samo slova i brojeve!');
		$this->form_validation->set_message('valid_email', 'Polje %s nije u dobrom formatu');
		
		if ($tip && $this->form_validation->run() != FALSE) {
			switch ($tip) {
				case 'uloga':
					$data = array();
					$this->Uloga_model->naziv = $this->input->post('name');
					$this->Uloga_model->unesi();
					$this->load->view($tip);
					break;
				case 'korisnik':
					$data['korisnik'] = array(
							'ime' => $this->input->post('username'),
							'sifra' => $this->input->post('password'),
							'email' => $this->input->post('email'),
							'uloga' => $this->input->post('uloga'),
					);
					$this->load->view($tip, $data);
					break;
				default:
					break;
			}
		} else {
			//$this->load->view($tip);
			$this->load->model('Uloga_model');
			$this->load->library('table');
			$uloge = $this->Uloga_model->lista()->result();
			//var_dump($uloge);
			$this->table->set_heading('Operacije', 'Naziv');
			foreach ($uloge as $uloga) {
				$link_edit = anchor('Administracija/izmeni/uloga/' . $uloga->id, 'Izmeni');
				$link_delete = anchor('Administracija/obrisi/uloga/' . $uloga->id, 'Obrisi');
				$this->table->add_row($link_edit . ' ' . $link_delete, $uloga->naziv);
			}
			$data['podaci'] = $this->table->generate();
			$this->load->view('uloga', $data);
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
		
		if (isset($_POST['korisnik'])) {
			$data['id'] = $_POST['korisnik'];
		}

		$this->load->view('head');
		$this->load->view('navigation', $data);
		$this->load->view($tip, $data);
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