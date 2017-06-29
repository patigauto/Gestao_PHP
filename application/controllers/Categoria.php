<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Categoria extends CI_Controller {
	
public function __construct()
       {
            parent::__construct();
			$this->load->view('menu');
       }
	
	
	public function index()
	{		
		$this->load->helper('form');
		$this->load->model('combobox');
        $data['tipo_categoria'] = $this->combobox->gettpcategoria();
        $this->load->view('Categoria/create', $data);

	}
	
	
	public function create() {	
		$nome= ($this->input->post('nome'));
		$id_tipo_categoria= ($this->input->post('id_tipo_categoria'));

		$categorias = array( 
		'nome' => $nome, 
		'id_tipo_categoria' => $id_tipo_categoria
		);
		    

		$categoria_cad = $this->CategoriaModel->create($categorias);
		
	}
	


	public function list_categorias(){
		$dados['categorias'] = $this->CategoriaModel->get_categorias();

		$this->load->view('Categoria/list', $dados);
	}


	public function excluir($id){
		$this->load->model('CategoriaModel');
		if ($this->CategoriaModel->excluir($id)) {
			redirect('Categoria/list_categorias');
		} else {
			log_message('error', 'Erro ao deletar...');
		}
	}



}

?>