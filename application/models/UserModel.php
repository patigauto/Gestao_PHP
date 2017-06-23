<?php

defined('BASEPATH') OR exit('No direct script access allowed');

 class UserModel extends Model {
	
	function UserModel(){
		
		parent::Model();
		
	}
	
	function addUsuario($usuario){
		
		$this->db->insert('user', $usuario);
		
	}
	
}

?>