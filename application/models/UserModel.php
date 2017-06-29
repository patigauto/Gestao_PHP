<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
	
	public function __construct()
	{
		
		// 		Call the Model constructor
		parent::__construct();
		
	}
	
	/*function User(){
		
		parent::Model();
		
	}*/
	
 public function create($usuario){
    $db = $this->load->database();

		$inserir = $this->db->insert('usuarios', $usuario);
		header("Location: ./list_usuario");
	}	

	public function get_usuarios() {
		$db = $this->load->database();
		$usuarios = array();
		$this->db->select('es.*, u.*, es.nome as estado');
		$this->db->join('estados es', 'es.id = u.id_estado');
		$this->db->from('usuarios u');
		$usuarios = $this->db->get()->result();

		return $usuarios; 
	}

	public function excluir($id){
		$db = $this->load->database();
		if(is_null($id))
			return false;

		$this->db->where('id', $id);
		return $this->db->delete('usuarios');
  	}	
}


?>