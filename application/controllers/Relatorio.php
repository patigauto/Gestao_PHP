<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Relatorio extends CI_Controller {
	
public function __construct()
       {
            parent::__construct();
			$this->load->view('menu');
			
       }
	
	
	public function index()
	{		
		 $this->load->helper('form');
		 
		 $this->load->view('Relatorios/Index');
	}

	public function Despesas()
	{
		$this->load->model('combobox');
		$data['fornecedores'] = $this->combobox->getfornecedores();
		$this->load->view('Relatorios/Despesas', $data);
	}

	public function pesquisadespesas()
	{
		$id_fornecedor = ($this->input->post('id_fornecedor'));
		$data1_forn = ($this->input->post('data1_forn'));
		$data2_forn = ($this->input->post('data2_forn'));
		$data_ano = ($this->input->post('data_ano'));
		$data_mes = ($this->input->post('data_mes'));

		$despesas = array(
		'id_fornecedor'=> $id_fornecedor,
		'data_entrada' => date("Y-m-d", strtotime($data1_forn)),
		'data_entrada' => date("Y-m-d", strtotime($data2_forn)),
		'data_entrada' => date("Y-m-d", strtotime($data_ano)),
		'data_entrada' => date("Y-m-d", strtotime($data_mes))
		);

		$filtros_pesquisa['despesas'] = $this->RelatorioModel->getdespesas($despesas);

		$this->load->view('Despesas/Relatorio', $filtros_pesquisa);

	
	}

		public function Receitas()
	{
		$this->load->model('combobox');
		$data['clientes'] = $this->combobox->getclientes();
		$this->load->view('Relatorios/Receitas', $data);
	}

	public function pesquisareceitas()
	{
		$id_cliente = ($this->input->post('id_cliente'));
		$data1_forn = ($this->input->post('data1_forn'));
		$data2_forn = ($this->input->post('data2_forn'));
		$data_ano = ($this->input->post('data_ano'));
		$data_mes = ($this->input->post('data_mes'));

		$receitas = array(
		'id_cliente'=> $id_cliente,
		'data_entrada' => date("Y-m-d", strtotime($data1_forn)),
		'data_entrada' => date("Y-m-d", strtotime($data2_forn)),
		'data_entrada' => date("Y-m-d", strtotime($data_ano)),
		'data_entrada' => date("Y-m-d", strtotime($data_mes))
		);

		$filtros_pesquisa['receitas'] = $this->RelatorioModel->getdespesas($receitas);

		$this->load->view('Relatorio/filtroreceitas', $filtros_pesquisa);

	
	}
	public function Clientes()
	{
		$this->load->model('combobox');
		$data['empresas'] = $this->combobox->getempresas();
		$this->load->view('Relatorios/Clientes', $data);
	}

	public function pesquisaclientes()
	{
		$id_empresa = ($this->input->post('id_empresa'));

		$filtros_pesquisa['clientes'] = $this->RelatorioModel->getclientes($id_empresa);

		$this->load->view('Relatorios/filtroclientes', $filtros_pesquisa);

	}




	
}
?>