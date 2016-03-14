<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Post extends CI_Controller {

    private $ulogovan = FALSE;
    private $poruke = "";

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('username')) {
            $this->ulogovan = TRUE;
        }
        $this->poruke = $this->session->flashdata('poruka');
    }

    //prikazuje listu posotova
    public function index($idKategorija = null) {
        $podaci['ulogovan'] = $this->ulogovan;
        $podaci['poruke'] = $this->poruke;
        $this->load->view('zaglavlje', $podaci);
        $this->load->view('sadrzaj', $podaci);
        $this->load->view('desnastrana', $podaci);
        $this->load->view('footer', $podaci);
    }

    //forma za unos posta
    public function postavi() {
        //prikaz forme 	
    }

    //prikazuje sadrzaj konkretnog posta
    public function prikazi($id = null) {
        //sadrzaj	
    }

    //forma za postavljanje komentara za post
    public function komentarisi($idPost = null) {
        
    }

    public function ajaxTest() {
        if($this->ulogovan){
        $postPodaci=array(
            'ime'=>  $this->input->post('ime'),
            'godine'=>  $this->input->post('godine'),
        );    
        $cars = array(
            $postPodaci,
            array("Volvo", 22, 18),
            array("BMW", 15, 13),
            array("Saab", 5, 2),
            array("Land Rover", 17, 15)
        );
        
        print json_encode($cars);
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */