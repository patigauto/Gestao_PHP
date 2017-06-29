<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Empresa extends CI_Controller {
	
public function __construct()
       {
            parent::__construct();
			$this->load->view('menu');
       }
	
	
	public function index()
	{		
		$this->load->helper('form');
		$this->load->model('combobox');
        $data['tipo_atividade'] = $this->combobox->gettipoatividade();
        $data['estados'] = $this->combobox->getestados();
		$data['status'] = $this->combobox->getstatus();
        $this->load->view('Empresa/create', $data);

	}
	
	
	public function create() {	
		$nome_fantasia= ($this->input->post('nome_fantasia'));
		$razao_social= ($this->input->post('razao_social'));
		$cnpj= ($this->input->post('cnpj'));
		$inscricao_estadual= ($this->input->post('inscricao_estadual'));
		$inscricao_municipal= ($this->input->post('inscricao_municipal'));
		$id_tipo_atividade=($this->input->post('tipo_atividade'));
		$telefone=($this->input->post('telefone'));
        $endereco=($this->input->post('endereco'));
        $cidade=($this->input->post('cidade'));
        $id_estado=($this->input->post('estado'));
		$id_status=($this->input->post('id_status'));

		$empresa = array( 
		'nome_fantasia' => $nome_fantasia, 
		'razao_social' => $razao_social,
		'cnpj' => $cnpj,
		'inscricao_estadual' => $inscricao_estadual,
		'inscricao_municipal' => $inscricao_municipal,
		'id_tipo_atividade' => $id_tipo_atividade,
		'telefone' => $telefone,
		'endereco' => $endereco,
        'cidade' => $cidade,
        'id_estado' => $id_estado,
		'id_status' => $id_status
		);
		    

		$empresa_cad = $this->EmpresaModel->create($empresa);
		
	}
	


	public function list_empresa(){
		$dados['empresas'] = $this->EmpresaModel->get_empresas();

		$this->load->view('Empresa/list', $dados);
	}

	function editar($id)  {	
		
		$data['empresas'] = $this->EmpresaModel->editar($id);
	
		$this->load->view('Empresa/update', $data);
	}

	function alterar() {		
			$id= ($this->input->post('idemp'));
			$nome_fantasia= ($this->input->post('nome_fantasia'));
			$razao_social= ($this->input->post('razao_social'));
			$cnpj= ($this->input->post('cnpj'));
			$inscricao_estadual= ($this->input->post('inscricao_estadual'));
			$inscricao_municipal= ($this->input->post('inscricao_municipal'));
			$id_tipo_atividade=($this->input->post('tipo_atividade'));
			$telefone=($this->input->post('telefone'));
			$endereco=($this->input->post('endereco'));
			$cidade=($this->input->post('cidade'));
			$id_estado=($this->input->post('estado'));

		$data = array( 
		'nome_fantasia' => $nome_fantasia, 
		'razao_social' => $razao_social,
		'cnpj' => $cnpj,
		'inscricao_estadual' => $inscricao_estadual,
		'inscricao_municipal' => $inscricao_municipal,
		'id_tipo_atividade' => $id_tipo_atividade,
		'telefone' => $telefone,
		'endereco' => $endereco,
        'cidade' => $cidade,
        'id_estado' => $id_estado
		);

	
		$empresas['empresas'] = $this->EmpresaModel->alterar($data, $id);
		

		header("Location: ../list_empresa");
		//$this->load->view('Empresa/list_empresa');

		}

	public function Excluir($id){
		$this->load->model('EmpresaModel');
		if ($this->EmpresaModel->excluir($id)) {
			redirect('Empresa');
		} else {
			log_message('error', 'Erro ao deletar...');
		}
	}



}

?>