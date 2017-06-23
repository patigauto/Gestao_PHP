<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller {
	
public function __construct()
       {
            parent::__construct();
       }

	function User()
	{
		$this->load->model('UserModel');
	}
	
	
	public function index()
	{		
		$this->load->helper('url');	
		$this->load->view('User/create');
	}
	
	
	public function salvar(){
		
		$nome= ($this->input->post('nome'));
		$data_nascimento= ($this->input->post('data_nascimento'));
		$cpf= ($this->input->post('cpf'));
		$telefone= ($this->input->post('telefone'));
		$email= ($this->input->post('email'));
		$senha=($this->input->post('senha'));
		$endereco=($this->input->post('endereco'));

		$usuario = array( 
		'nome' => $nome, 
		'data_nasc' => $data_nascimento,
		'cpf' => $cpf,
		'telefone' => $telefone,
		'endereco' => $endereco,
		'email' => $email,
		'senha' => MD5($senha),
		'data_cadastro' => CURRENT_TIMESTAMP()
		);
		
		$usuario_cad = $this->UserModel->addUsuario($usuario);
		$data['message'] = "";

		if($usuario_cad){	
			$data['message'] = "Usuário cadastrado com sucesso!";
			$this->load->view('User/create');
		}	
	}
}
?>