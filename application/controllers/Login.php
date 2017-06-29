<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {
	
public function __construct()
       {
            parent::__construct();
       }
	

    public function index(){
        $this->load->view('login');
    }

    public function login(){
        $email= ($this->input->post('email'));
        $senha= MD5(($this->input->post('senha')));
        $entrar= ($this->input->post('entrar'));


        if( $email && $senha ) {

            


        $usuario['usuario'] = $this->LoginModel->logar($email, $senha);
            if ($usuario > 0){
                $this->session->set_userdata( 'usuario', $email );
				$this->session->set_userdata( 'logado', true );
                $this->load->view('home');
            } else {
                header('location: ../..');
                echo "Erro ao salvar";
        }	
		} else {
            
            redirect(site_url('login'));
            echo "Campos vazios";
		
		    
        }
    }


    public function Logout(){
        session_start();
        session_destroy();
        header('location: ../..');
    }

}

?>