<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Fornecedor extends CI_Controller {
	
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
        $this->load->view('Fornecedor/create', $data);
	}
	
	
	public function create() {	
		$nome= ($this->input->post('nome'));
		$telefone= ($this->input->post('telefone'));
		$endereco=($this->input->post('endereco'));
        $cidade = ($this->input->post('cidade'));
        $id_estado = ($this->input->post('id_estado'));

		$fornecedor = array( 
		'nome' => $nome, 
		'telefone' => $telefone,
		'endereco' => $endereco,
		'data_cadastro' => date('Y-m-d'),
        'cidade' => $cidade,
        'id_estado' => $id_estado
		);
		    

		$fornecedor_cad = $this->FornecedorModel->create($fornecedor);
		
	}
	public function list_fornecedores(){
		$dados['fornecedores'] = $this->FornecedorModel->get_fornecedores();

		$this->load->view('Fornecedor/list', $dados);
	}

	public function editar() {
		


	}

	public function excluir($id){
		$this->load->model('FornecedorModel');
		if ($this->FornecedorModel->excluir($id)) {
			redirect('Fornecedor/list_fornecedores');
		} else {
			log_message('error', 'Erro ao deletar...');
		}
	}


}

?>