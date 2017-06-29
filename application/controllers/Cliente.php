<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cliente extends CI_Controller {
	
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
        $this->load->view('Cliente/create', $data);
	}
	
	
	public function create() {	
		$nome= ($this->input->post('nome'));
		$data_nascimento= ($this->input->post('data_nascimento'));
		$cpf= ($this->input->post('cpf'));
		$telefone= ($this->input->post('telefone'));
		$email= ($this->input->post('email'));
		$endereco=($this->input->post('endereco'));
        $cidade = ($this->input->post('cidade'));
        $estado = ($this->input->post('estado'));

		$cliente = array( 
		'nome' => $nome, 
		'data_nasc' => $data_nascimento,
		'cpf' => $cpf,
		'telefone' => $telefone,
		'endereco' => $endereco,
		'email' => $email,
		'data_cadastro' => date('Y-m-d'),
        'cidade' => $cidade,
        'id_estado' => $estado
		);
		    

		$cliente_cad = $this->ClienteModel->create($cliente);
		
	}
	public function list_cliente(){
		$dados['clientes'] = $this->ClienteModel->get_clientes();

		$this->load->view('Cliente/list', $dados);
	}

	public function editar() {
		


	}

	public function excluir($id){
		$this->load->model('ClienteModel');
		if ($this->ClienteModel->excluir($id)) {
			redirect('Cliente/list_cliente');
		} else {
			log_message('error', 'Erro ao deletar...');
		}
	}


}

?>