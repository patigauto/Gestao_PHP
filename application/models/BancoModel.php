<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BancoModel extends CI_Model {
	
	public function __construct()
	{
		
		// 		Call the Model constructor
		parent::__construct();
		
	}
	
	/*function User(){
		
		parent::Model();
		
	}*/
	
 public function create($banco){
    $db = $this->load->database();

		$inserir = $this->db->insert('bancos', $banco);
		header("Location: ../../");
	}	
}


?>