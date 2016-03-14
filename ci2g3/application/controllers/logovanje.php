<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logovanje extends CI_Controller {

    public function login() {
        $is_post = $this->input->server('REQUEST_METHOD') == 'POST';
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $test_username = "test";
        $test_password = "test";
        if ($is_post) {
            if ($test_username == $username && $test_password == $password) {
                $korisnik_podaci = array(
                    'username' => $username,
                    'password' => $password
                );
                $this->session->set_userdata($korisnik_podaci);
                
                    redirect('Post/Index');
            }else{
                $this->session->set_flashdata('poruka', 'Pokusaj logovanja nije uspeo !!!');
                redirect('Post/Index');
            }
        }
//kod za proveru korisnika i dodelu podataka u 
        //sesiju
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('Post/Index');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */