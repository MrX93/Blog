<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administracija extends CI_Controller {
        
        private $ulogovan=FALSE;
        private $poruke="";
        function __construct() {
            parent::__construct();
            if($this->session->userdata('username')){
              $this->ulogovan=TRUE;   
            }
            if(!$this->ulogovan){
                redirect('Post/Index');
            }
            $this->poruke=$this->session->flashdata('poruka');
        }
	
	public function index()
	{
            
	    $podaci['opcije']=array(
                anchor('administracija/unesi/uloge','Upravljenje ulogama'),
                anchor('administracija/unesi/korisnik','Upravljenje korisnicima'),
                anchor('administracija/unesi/post','Upravljenje postovima'),
            );
            $this->load->view('zaglavlje');
            $this->load->view('adminstracija',$podaci);
            $this->load->view('desnastrana');
            $this->load->view('footer');
	}
        
        public function unesi($tip=null){
            $this->load->view('zaglavlje');
            $is_post=$this->input->server('REQUEST_METHOD') == 'POST';
            $this->load->library('form_validation');
            if($tip!=null && $tip=="uloge"){
                $this->form_validation->set_rules('naziv','Naziv','required');  
                $this->form_validation->set_message('required','Polje %s je obavezno !!!');
                if($is_post && $this->form_validation->run()){
                             //klik unos u bazu podataka
                    
                }
                $this->load->view('admin/uloge');
            }
            
            if($tip!=null && $tip=="korisnik"){
               if($is_post){
                             //klik unos u bazu podataka
                }
                $this->load->view('admin/korisnik');
            }
            if($tip!=null && $tip=="post"){
               if($is_post){
                             //klik unos u bazu podataka
                }
                $this->load->view('admin/post');
            }
            $this->load->view('desnastrana');            
            $this->load->view('footer');
            
        }
        public function izmeni($tip=null,$id=null){
    $is_post=$this->input->server('REQUEST_METHOD') == 'POST';
    $this->load->view('zaglavlje');
            
            
            if($tip!=null && $id!=null && $tip=="uloge"){
                if($is_post){
                    //podaci su dosli sa forme uradi update
                }
               $this->load->view('admin/uloge');  
            }
            if($tip!=null && $id!=null && $tip=="korisnik"){
                if($is_post){
                    //podaci su dosli sa forme uradi update
                }
               $this->load->view('admin/korisnik');  
            }
            if($tip!=null && $id!=null && $tip=="post"){
                if($is_post){
                    //podaci su dosli sa forme uradi update
                }
               $this->load->view('admin/post');  
            }
            $this->load->view('desnastrana');            
            $this->load->view('footer');
        }
        public function brisanje($tip=null,$id=null){
            $this->load->view('zaglavlje');
            if($tip!=null && $id!=null && $tip="uloga"){
                $this->load->view('admin/uloga');
            }
            if($tip!=null && $id!=null && $tip="korisnik"){
                $this->load->view('admin/korisnik');
            }
            if($tip!=null && $id!=null && $tip="post"){
                $this->load->view('admin/post');
            }        
            $this->load->view('desnastrana');            
            $this->load->view('footer');
        } 
}
