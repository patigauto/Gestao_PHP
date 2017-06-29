<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Receita extends CI_Controller {
	
public function __construct()
       {
            parent::__construct();
			$this->load->view('menu');
       }
	
	
	public function index()
	{		
		 $this->load->helper('form');
		$this->load->model('combobox');
        $data['categorias'] = $this->combobox->getcategoriareceitas();
        $data['contas_bancarias'] = $this->combobox->getcontabancaria();
        $this->load->view('Receitas/create', $data);
	}
	
	
	public function create() {	
		$motivo= ($this->input->post('motivo'));
		$id_categoria= ($this->input->post('id_categoria'));
		$id_conta_bancaria=($this->input->post('id_conta_bancaria'));

		$receita = array( 
		'motivo' => $motivo, 
		'id_categoria' => $id_categoria,
		'id_conta_bancaria' => $id_conta_bancaria,
		'data_entrada' => date('Y-m-d')
		);
		    

		$receita_cad = $this->ReceitaModel->create($receita);
		
	}
	public function list_receitas(){
		$dados['receitas'] = $this->ReceitaModel->get_receitas();

		$this->load->view('Receitas/list', $dados);
	}

	public function editar() {
		


	}

	public function excluir($id){
		$this->load->model('ReceitaModel');
		if ($this->ReceitaModel->excluir($id)) {
			redirect('Receita/list_receitas');
		} else {
			log_message('error', 'Erro ao deletar...');
		}
	}


}

?>