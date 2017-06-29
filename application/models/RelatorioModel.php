<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class RelatorioModel extends CI_Model {
	
	public function __construct()
	{
		
		// 		Call the Model constructor
		parent::__construct();
		
	}
	
	/*function User(){
		
		parent::Model();
		
	}*/
    public function index(){
        
    }


	
    public function getdespesas($despesas){
		$db = $this->load->database();
		$despesas = array();
        if($despesas['data_ano'])
        {
            $ano = $this->db->select('Year('.$despesas['data_ano'].')');
            $ano = $this->db->from('despesas');
            $this->db->select('c.*, d.*, cb.*');
            $this->db->join('contas_bancarias cb', 'cb.id = d.id_conta_bancaria');
            $this->db->join('categorias c', 'c.id = d.id_categoria');
            $this->db->join('fornecedores f', 'f.id = d.id_fornecedor');
            $this->db->where('data_entrada =',$ano);
            $this->db->from('despesas d');

            $pesquisa = $this->db->get()->result();
            return $pesquisa;

        }
        elseif($despesas['data_mes']){
            $mes = $this->db->select('Month('.$despesas['data_mes'].')');
            $mes = $this->db->from('despesas');
            $this->db->select('c.*, d.*, cb.*');
            $this->db->join('contas_bancarias cb', 'cb.id = d.id_conta_bancaria');
            $this->db->join('categorias c', 'c.id = d.id_categoria');
            $this->db->join('fornecedores f', 'f.id = d.id_fornecedor');
            $this->db->where('data_entrada =',$mes);
            $this->db->from('despesas d');

            $pesquisa = $this->db->get()->result();
            return $pesquisa;
        }
        elseif($despesas['data1_forn']){
            if($despesas['data2_forn']){
                if($despesas['id_fornecedor']){
                    $this->db->select('c.*, d.*, cb.*');
                    $this->db->join('contas_bancarias cb', 'cb.id = d.id_conta_bancaria');
                    $this->db->join('categorias c', 'c.id = d.id_categoria');
                    $this->db->join('fornecedores f', 'f.id = d.id_fornecedor');
                    $this->db->where('data_entrada >=',$despesas['data1_forn']);
                    $this->db->where('data_entrada <=',$despesas['data2_forn']);
                    $this->db->where('id_fornecedor',$despesas['id_fornecedor']);
                    $this->db->from('despesas d');

                    $pesquisa = $this->db->get()->result();
                    return $pesquisa;
                }
            }
        }
        else{
            echo "Selecione um filtro";
        }
    }

    public function getreceitas($receitas){
		$db = $this->load->database();
		$receitas = array();
        if($receitas['data_ano'])
        {
            $ano = $this->db->select('Year('.$receitas['data_ano'].')');
            $ano = $this->db->from('receitas');
            $this->db->select('c.*, d.*, cb.*');
            $this->db->join('contas_bancarias cb', 'cb.id = d.id_conta_bancaria');
            $this->db->join('categorias c', 'c.id = d.id_categoria');
            $this->db->join('clientes cl', 'cl.id = d.id_cliente');
            $this->db->where('data_entrada =',$ano);
            $this->db->from('receitas d');

            $pesquisa = $this->db->get()->result();
            return $pesquisa;

        }
        elseif($receitas['data_mes']){
            $mes = $this->db->select('Month('.$receitas['data_mes'].')');
            $mes = $this->db->from('receitas');
            $this->db->select('c.*, d.*, cb.*');
            $this->db->join('contas_bancarias cb', 'cb.id = d.id_conta_bancaria');
            $this->db->join('categorias c', 'c.id = d.id_categoria');
            $this->db->join('clientes cl', 'cl.id = d.id_cliente');
            $this->db->where('data_entrada =',$mes);
            $this->db->from('receitas d');

            $pesquisa = $this->db->get()->result();
            return $pesquisa;
        }
        elseif($receitas['data1_forn']){
            if($receitas['data2_forn']){
                if($receitas['id_fornecedor']){
                    $this->db->select('c.*, d.*, cb.*');
                    $this->db->join('contas_bancarias cb', 'cb.id = d.id_conta_bancaria');
                    $this->db->join('categorias c', 'c.id = d.id_categoria');
                    $this->db->join('clientes cl', 'cl.id = d.id_cliente');
                    $this->db->where('data_entrada >=',$receitas['data1_forn']);
                    $this->db->where('data_entrada <=',$receitas['data2_forn']);
                    $this->db->where('id_cliente',$receitas['id_cliente']);
                    $this->db->from('receitas d');

                    $pesquisa = $this->db->get()->result();
                    return $pesquisa;
                }
            }
        }
        else{
            echo "Selecione um filtro";
        }
    }


    public function getclientes($id_empresa){
		$db = $this->load->database();
		$this->db->select('em.*, em.nome_fantasia as nomeempresa, es.*, c.*');
		$this->db->join('estados es', 'es.id = c.id_estado');
        $this->db->join('empresas em', 'em.id = c.id_empresa');
        $this->db->where('id_empresa',$id_empresa);
		$this->db->from('clientes c');
		$clientes = $this->db->get()->result();

		return $clientes; 
	}
    

}