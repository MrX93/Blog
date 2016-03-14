<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Logovanje extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function login() {
		$admin_ime = 'Admin';
		$admin_lozinka = 'Admin';

		$user_ime = 'Student';
		$user_lozinka = 'Student';

		$uneseno_ime = $this->input->post('username');
		$unesena_lozinka = $this->input->post('password');

		if ($uneseno_ime == $admin_ime && $admin_lozinka == $admin_lozinka) {

			$newdata = array(
					'ime' => 'Administrator',
					'poruka' => 'Uspesno ste ulogovani kao korisnik Pera i vasa uloga je admin',
			);
			$this->session->set_userdata($newdata);
			//$this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Uspesno ste se ulogovali</div>');

			redirect('administracija/');
		} elseif ($uneseno_ime == $user_ime && $user_lozinka == $user_lozinka) {
			$newdata = array(
					'ime' => 'Student',
					'poruka' => 'Uspesno ste ulogovani kao korisnik Student i vasa uloga je korisnik',
			);
			$this->session->set_userdata($newdata);
			$this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Uspesno ste se ulogovali</div>');

			redirect('');
		}
	}

	public function logout() {
		$this->session->unset_userdata('ime');
		$this->session->unset_userdata('poruka');
		$this->session->sess_destroy();
		redirect('');
	}

}

/* End of file logovanje.php */
/* Location: ./application/controllers/logovanje.php */