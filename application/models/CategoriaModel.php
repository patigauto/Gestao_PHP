<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriaModel extends CI_Model {
	
	public function __construct()
	{
		
		// 		Call the Model constructor
		parent::__construct();
		
	}
	
	/*function User(){
		
		parent::Model();
		
	}*/
	
 public function create($categorias){
    $db = $this->load->database();

		$inserir = $this->db->insert('categorias', $categorias);
		header("Location: ./list_categorias");
	}

    public function get_categorias() {
		$db = $this->load->database();
		$categorias = array();
		$this->db->select('tc.*, c.*, tc.nome as categoria');
		$this->db->join('tipo_categoria tc', 'tc.id = c.id_tipo_categoria');
		$this->db->from('categorias c');
		$categorias = $this->db->get()->result();

		return $categorias; 
	}

	public function excluir($id){
		$db = $this->load->database();
		if(is_null($id))
			return false;

		$this->db->where('id', $id);
		return $this->db->delete('categorias');
  	}
}


?>