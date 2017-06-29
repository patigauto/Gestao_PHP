<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {
	
	public function __construct()
	{
		
		// 		Call the Model constructor
		parent::__construct();
		
	}

    public function logar($email, $senha){
        $db = $this->load->database();
        $this->db->select('*');
        $this->db->where('email',$email);
        $this->db->where('senha',$senha);
		$this->db->from('usuarios');
		$usuario = $this->db->get()->result();

		return $usuario; 
    }

}

