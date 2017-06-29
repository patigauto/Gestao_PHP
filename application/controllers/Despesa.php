<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Despesa extends CI_Controller {
	
public function __construct()
       {
            parent::__construct();
			$this->load->view('menu');
       }
	
	
	public function index()
	{		
		 $this->load->helper('form');
		$this->load->model('combobox');
        $data['categorias'] = $this->combobox->getcategoriadespesas();
        $data['contas_bancarias'] = $this->combobox->getcontabancaria();
		$data['fornecedores'] = $this->combobox->getfornecedores();
        $this->load->view('Despesas/create', $data);
	}
	
	
	public function create() {	
		$motivo= ($this->input->post('motivo'));
		$id_categoria= ($this->input->post('id_categoria'));
		$id_conta_bancaria=($this->input->post('id_conta_bancaria'));
		$id_fornecedor=($this->input->post('id_fornecedor'));
		$valor=($this->input->post('valor'));

		$despesa = array( 
		'motivo' => $motivo, 
		'id_categoria' => $id_categoria,
		'id_conta_bancaria' => $id_conta_bancaria,
		'data_entrada' => date('Y-m-d'),
		'id_fornecedor' => $id_fornecedor,
		'valor'=>$valor
		);
		    

		$despesa_cad = $this->DespesaModel->create($despesa);
		
	}
	public function list_despesas(){
		$dados['despesas'] = $this->DespesaModel->get_despesas();

		$this->load->view('Despesas/list', $dados);
	}

	public function editar() {
		


	}

	public function excluir($id){
		$this->load->model('DespesaModel');
		if ($this->DespesaModel->excluir($id)) {
			redirect('Despesa/list_despesas');
		} else {
			log_message('error', 'Erro ao deletar...');
		}
	}


}

?>