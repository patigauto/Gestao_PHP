<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Agencia extends CI_Controller {
	
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
        $data['bancos'] = $this->combobox->getbanco();
        $this->load->view('Agencia/create', $data);
	}
	
	
	public function create() {	
		$nome= ($this->input->post('nome'));
		$numero= ($this->input->post('numero'));
        $id_banco= ($this->input->post('id_banco'));
        $endereco= ($this->input->post('endereco'));
        $cidade= ($this->input->post('cidade'));
        $id_estado= ($this->input->post('id_estado'));
        $telefone= ($this->input->post('telefone'));

		$agencia = array( 
		'nome' => $nome, 
		'numero' => $numero,
        'id_banco' => $id_banco, 
        'endereco' => $endereco, 
        'cidade' => $cidade, 
        'id_estado' => $id_estado, 
        'telefone' => $telefone
		);
		    

		$agencia_cad = $this->AgenciaModel->create($agencia);
		
	}


}

?>