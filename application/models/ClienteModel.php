<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ClienteModel extends CI_Model {
	
	public function __construct()
	{
		
		// 		Call the Model constructor
		parent::__construct();
		
	}
	
	/*function User(){
		
		parent::Model();
		
	}*/
	
 public function create($cliente){
    $db = $this->load->database();

		$inserir = $this->db->insert('clientes', $cliente);
		header("Location: ../../");
	}

    public function get_clientes() {
		$db = $this->load->database();
		$clientes = array();
		$this->db->select('es.*, c.*');
		$this->db->join('estados es', 'es.id = c.id_estado');
		$this->db->from('clientes c');
		$clientes = $this->db->get()->result();

		return $clientes; 
	}

	public function excluir($id){
		$db = $this->load->database();
		if(is_null($id))
			return false;

		$this->db->where('id', $id);
		return $this->db->delete('clientes');
  	}	
}


?>