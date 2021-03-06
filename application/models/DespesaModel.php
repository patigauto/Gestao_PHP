<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DespesaModel extends CI_Model {
	
	public function __construct()
	{
		
		// 		Call the Model constructor
		parent::__construct();
		
	}
	
	/*function User(){
		
		parent::Model();
		
	}*/
	
 public function create($despesa){
    $db = $this->load->database();

		$inserir = $this->db->insert('despesas', $despesa);
		$atualizar = $this->db->where('id',$despesa['id_conta_bancaria']);
		$atualizar=$this->db->set('saldo',('saldo'-$despesa['valor']));
		$atualizar = $this->db->update('contas_bancarias');
		header("Location: ./list_despesas");
	}

    public function get_despesas() {
		$db = $this->load->database();
		$despesa = array();
		$this->db->select('c.*, d.*, cb.*,c.nome as categoria, cb.nome as conta');
		$this->db->join('contas_bancarias cb', 'cb.id = d.id_conta_bancaria');
		$this->db->join('categorias c', 'c.id = d.id_categoria');
		$this->db->join('fornecedores f', 'f.id = d.id_fornecedor');
		$this->db->from('despesas d');
		$despesa = $this->db->get()->result();

		return $despesa; 
	}

	public function excluir($id){
		$db = $this->load->database();
		if(is_null($id))
			return false;

		$this->db->where('id', $id);
		return $this->db->delete('despesas');
  	}	
}


?>