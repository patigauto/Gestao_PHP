<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
	
	public function __construct()
	{
		
		// 		Call the Model constructor
		parent::__construct();
		
	}
	
	/*function User(){
		
		parent::Model();
		
	}*/
	
 public function create($usuario){
    $db = $this->load->database();

		$inserir = $this->db->insert('usuarios', $usuario);
		header("Location: ../../");
	}	
}


?>