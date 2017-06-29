<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EmpresaModel extends CI_Model {
	

	public function __construct()
	{
		
		// 		Call the Model constructor
		parent::__construct();
		
	}
	
	/*function User(){
		
		parent::Model();
		
	}*/
	
 public function create($empresa){
	 	$db = $this->load->database();
		$inserir = $this->db->insert('empresas', $empresa);
		header("Location: ../../");
	}	

	public function get_empresas() {
		$db = $this->load->database();
		$empresas = array();
		$this->db->select('em.id as idemp, em.*,es.*, es.nome as estado, tp.*, tp.nome as tipo_atividade, s.*, s.nome as status');
		$this->db->join('estados es', 'es.id = em.id_estado');
		$this->db->join('tipo_atividade tp', 'tp.id = em.id_tipo_atividade');
		$this->db->join('status s','s.id = em.id_status');
		$this->db->from('empresas em');
		$empresas = $this->db->get()->result();

		return $empresas; 
	}

	function editar($id) {
		$db = $this->load->database();
		$empresas = array();
		$this->db->select('em.id as idemp, es.*, em.*, tp.*');
		$this->db->join('estados es', 'es.id = em.id_estado');
		$this->db->join('tipo_atividade tp', 'tp.id = em.id_tipo_atividade');
		$this->db->join('status s','s.id=em.id_status');
		$this->db->from('empresas em');
		$empresas = $this->db->get()->result();

		return $empresas; 
		
	}

	function alterar($data, $idemp) {
		$db = $this->load->database();
		$this->db->set($data);
		$this->db->where('id',$idemp);
		$this->db->update('empresas', $data);
		return $this->db->get()->result();
	}

	/*public function excluir($id){
		$db = $this->load->database();
		if(is_null($id))
			return false;

		$this->db->where('id', $id);
		return $this->db->delete('empresas');
  	}*/
	
}


?>