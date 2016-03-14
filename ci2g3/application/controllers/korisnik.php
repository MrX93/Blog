<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Korisnik extends CI_Controller {

	private $ulogovan=FALSE;
        private $poruke="";
            function __construct() {
            parent::__construct();
            if($this->session->userdata('username')){
              $this->ulogovan=TRUE;   
            }
            if(!$ulogovan){
                redirect('Post/Index');
            }
            $this->poruke=$this->session->flashdata('poruka');
        }
	public function index($id=null)
	{
		//prikazi podatke o korisniku
	}
        
        public function registracija()
	{
		//prikazi forme za registraciju
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */