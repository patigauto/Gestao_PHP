<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ReceitaModel extends CI_Model {
	
	public function __construct()
	{
		
		// 		Call the Model constructor
		parent::__construct();
		
	}
	
	/*function User(){
		
		parent::Model();
		
	}*/
	
 public function create($receita){
    $db = $this->load->database();

		$inserir = $this->db->insert('receitas', $receita);
		header("Location: ../../");
	}

    public function get_receitas() {
		$db = $this->load->database();
		$receita = array();
		$this->db->select('r.id as idrec, c.nome as nome_categoria,c.*,cb.numero as numeroconta, cb.nome as nomeconta,cb.*, r.*');
		$this->db->join('contas_bancarias cb', 'cb.id = r.id_conta_bancaria');
		$this->db->join('categorias c', 'c.id = r.id_categoria');
		$this->db->join('clientes cl', 'cl.id = r.id_cliente');
		$this->db->from('receitas r');
		$receita = $this->db->get()->result();

		return $receita; 
	}

	public function excluir($id){
		$db = $this->load->database();
		if(is_null($id))
			return false;

		$this->db->where('id', $id);
		return $this->db->delete('receitas');
  	}	
}


?>