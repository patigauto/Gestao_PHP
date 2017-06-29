<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ContaBancaria extends CI_Controller {
	
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
        $data['tipo_pessoa'] = $this->combobox->gettipopessoa();
        $data['agencias'] = $this->combobox->getagencia();
        $data['bancos'] = $this->combobox->getbanco();
        $data['clientes'] = $this->combobox->getclientes();
        $this->load->view('Conta_Bancaria/create', $data);
	}
	
	
	public function create() {	
		$nome= ($this->input->post('nome'));
		$numero= ($this->input->post('numero'));
		$id_agencia= ($this->input->post('id_agencia'));
		$id_banco= ($this->input->post('id_banco'));
		$id_titular= ($this->input->post('id_titular'));
		$id_tipo_pessoa=($this->input->post('id_tipo_pessoa'));
		$saldo_inicial=($this->input->post('saldo_inicial'));

		$contabancaria = array( 
		'nome' => $nome, 
		'numero' => $numero,
		'id_agencia' => $id_agencia,
		'id_banco' => $id_banco,
		'id_titular' => $id_titular,
		'id_tipo_pessoa' => $id_tipo_pessoa,
		'saldo_inicial' => $saldo_inicial,
		'saldo'=>$saldo_inicial
		);
		    

		$contab_cad = $this->ContaBancariaModel->create($contabancaria);
		
	}

	public function list_contas(){
		$contas['contas'] = $this->ContaBancariaModel->get_contas();

		$this->load->view('Conta_Bancaria/list', $contas);
	}

	public function excluir($id){
		$this->load->model('ContaBancariaModel');
		if ($this->ContaBancariaModel->excluir($id)) {
			redirect('ContaBancaria/list_contas');
		} else {
			log_message('error', 'Erro ao deletar...');
		}
	}


}

?>