<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AgenciaModel extends CI_Model {
	
	public function __construct()
	{
		
		// 		Call the Model constructor
		parent::__construct();
		
	}
	
	/*function User(){
		
		parent::Model();
		
	}*/
	
 public function create($agencia){
    $db = $this->load->database();

		$inserir = $this->db->insert('agencias', $agencia);
		header("Location: ./list_agencia/");
	}	

public function get_agencias() {
		$db = $this->load->database();
		$agencias = array();
		$this->db->select('es.*,es.nome as estado,b.nome as banco, a.*');
		$this->db->join('estados es', 'es.id = a.id_estado');
		$this->db->join('bancos b', 'b.id = a.id_banco');
		$this->db->from('agencias a');
		$agencias = $this->db->get()->result();

		return $agencias; 
	}
}

?>