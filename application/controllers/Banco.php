<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Banco extends CI_Controller {
	
public function __construct()
       {
            parent::__construct();
			$this->load->view('menu');
       }
	
	
	public function index()
	{		
		$this->load->helper('form');
        $this->load->view('Banco/create');
	}
	
	
	public function create() {	
		$nome= ($this->input->post('nome'));
		$numero= ($this->input->post('numero'));

		$banco = array( 
		'nome' => $nome, 
		'numero' => $numero
		);
		    

		$banco_cad = $this->BancoModel->create($banco);
		
	}
	public function list_bancos(){
		$dados['bancos'] = $this->BancoModel->get_bancos();

		$this->load->view('Banco/list', $dados);
	}

public function excluir($id){
		$this->load->model('BancoModel');
		if ($this->BancoModel->excluir($id)) {
			redirect('Banco/list_bancos');
		} else {
			log_message('error', 'Erro ao deletar...');
		}
	}

}

?>