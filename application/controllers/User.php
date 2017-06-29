<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller {
	
public function __construct()
       {
            parent::__construct();
			$this->load->view('menu');
       }
	
	
	public function index()
	{		
		 $this->load->helper('form');
		$this->load->model('combobox');
        $data['estados'] = $this->combobox->getestados();
        $this->load->view('User/create', $data);
	}
	
	
	public function create() {	
		$nome= ($this->input->post('nome'));
		$data_nasc= ($this->input->post('data_nascimento'));
		$cpf= ($this->input->post('cpf'));
		$telefone= ($this->input->post('telefone'));
		$email= ($this->input->post('email'));
		$senha=($this->input->post('senha'));
		$endereco=($this->input->post('endereco'));

		$data_nascimento = date("Y-m-d", strtotime($data_nasc));


		$usuario = array( 
		'nome' => $nome, 
		'data_nasc' => $data_nascimento,
		'cpf' => $cpf,
		'telefone' => $telefone,
		'endereco' => $endereco,
		'email' => $email,
		'senha' => MD5($senha),
		'data_cadastro' => date('Y-m-d')
		);
		    

		$usuario_cad = $this->UserModel->create($usuario);
		
	}

	public function list_usuario(){
		$dados['usuarios'] = $this->UserModel->get_usuarios();

		$this->load->view('User/list', $dados);
	}


	public function excluir($id){
		$this->load->model('UserModel');
		if ($this->UserModel->excluir($id)) {
			redirect('User/list_usuario');
		} else {
			log_message('error', 'Erro ao deletar...');
		}
	}

	public function update_user() {
		


	}




}

?>