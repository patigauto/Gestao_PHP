<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class combobox extends CI_Model {
    function getestados() {
        $db = $this->load->database();
        $data = array();
        $query = $this->db->get('estados');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }

    function gettipoatividade() {
        $db = $this->load->database();
        $data = array();
        $query = $this->db->get('tipo_atividade');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }

    function gettipopessoa() {
        $db = $this->load->database();
        $data = array();
        $query = $this->db->get('tipo_pessoa');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }

    function getagencia() {
        $db = $this->load->database();
        $data = array();
        $query = $this->db->get('agencias');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }

    function getbanco() {
        $db = $this->load->database();
        $data = array();
        $query = $this->db->get('bancos');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }

    function getusuario() {
        $db = $this->load->database();
        $data = array();
        $query = $this->db->get('usuarios');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }

    function gettpcategoria() {
        $db = $this->load->database();
        $data = array();
        $query = $this->db->get('tipo_categoria');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }

    function getcategoriareceitas() {
        $db = $this->load->database();
        $data = array();
        $query = $this->db->where('id_tipo_categoria = 1');
        $query = $this->db->get('categorias');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }

    function getcategoriadespesas() {
        $db = $this->load->database();
        $data = array();
        $query = $this->db->where('id_tipo_categoria = 2');
        $query = $this->db->get('categorias');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }

    function getcontabancaria() {
        $db = $this->load->database();
        $data = array();
        $query = $this->db->get('contas_bancarias');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }


    function getclientes() {
        $db = $this->load->database();
        $data = array();
        $query = $this->db->get('clientes');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }

    function getstatus() {
        $db = $this->load->database();
        $data = array();
        $query = $this->db->get('status');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }

    function getfornecedores() {
        $db = $this->load->database();
        $data = array();
        $query = $this->db->get('fornecedores');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }

    function getempresas() {
        $db = $this->load->database();
        $data = array();
        $query = $this->db->get('empresas');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }


}
?>