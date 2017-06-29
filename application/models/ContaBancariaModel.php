<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ContaBancariaModel extends CI_Model {
	
	public function __construct()
	{
		
		// 		Call the Model constructor
		parent::__construct();
		
	}
	
	/*function User(){
		
		parent::Model();
		
	}*/
	
 public function create($contabancaria){
    $db = $this->load->database();

		$inserir = $this->db->insert('contas_bancarias', $contabancaria);
		header("Location: ./list_contas");
	}	

	public function get_contas() {
		$db = $this->load->database();
		$contas = array();
		$this->db->select('a.*, a.numero as agencia, b.*, c.*, b.nome as banco, tp.*, cb.*, c.nome as cliente, tp.nome as tipo');
		$this->db->join('agencias a', 'a.id = cb.id_agencia');
		$this->db->join('bancos b', 'b.id = cb.id_banco');
		$this->db->join('clientes c', 'c.id = cb.id_titular');
		$this->db->join('tipo_pessoa tp', 'tp.id = cb.id_tipo_pessoa');
		$this->db->from('contas_bancarias cb');
		$contas = $this->db->get()->result();

		return $contas; 
	}

	public function excluir($id){
		$db = $this->load->database();
		if(is_null($id))
			return false;

		$this->db->where('id', $id);
		return $this->db->delete('contas_bancarias');
  	}
}


?>