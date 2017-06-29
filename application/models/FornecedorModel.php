<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FornecedorModel extends CI_Model {
	
	public function __construct()
	{
		
		// 		Call the Model constructor
		parent::__construct();
		
	}
	
	/*function User(){
		
		parent::Model();
		
	}*/
	
 public function create($fornecedor){
    $db = $this->load->database();

		$inserir = $this->db->insert('fornecedores', $fornecedor);
		header("Location: ../../");
	}

    public function get_fornecedores() {
		$db = $this->load->database();
		$fornecedor = array();
		$this->db->select('es.*, f.*');
		$this->db->join('estados es', 'es.id = f.id_estado');
		$this->db->from('fornecedores f');
		$fornecedor = $this->db->get()->result();

		return $fornecedor; 
	}

	public function excluir($id){
		$db = $this->load->database();
		if(is_null($id))
			return false;

		$this->db->where('id', $id);
		return $this->db->delete('fornecedores');
  	}	
}


?>