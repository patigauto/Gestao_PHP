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
		header("Location: ./list_bancos/");
	}	

	public function get_bancos() {
		$db = $this->load->database();
		$bancos = array();
		$this->db->select('*');
		$this->db->from('bancos');
		$bancos = $this->db->get()->result();

		return $bancos; 
	}

	public function excluir($id){
		$db = $this->load->database();
		if(is_null($id))
			return false;

		$this->db->where('id', $id);
		return $this->db->delete('bancos');
  	}	
}




?>