<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galerias extends CI_Controller {


	public function index()
	{
		$data['seo_title'] = '';
		$data['seo_description'] = '';
		$data['seo_keywords'] = '';

		$this->template->load('template','galerias', $data);
	}

	public function lista(){ 
        $this->load->model('galerias_model');
       
        $data['galerias'] = $this->galerias_model->lista_galerias();

        $this->template->load('admin/template', 'admin/galerias', $data);  
    }

	public function galerias_novo(){
        $this->load->model('galerias_model');
        
        $data['galerias'] = $this->galerias_model->ver($this->uri->segment(4));
        
        $this->template->load('admin/template', 'admin/galerias_novo', $data);
    }

	function galerias_novo_salva(){
        $this->load->model('');
        
        $data = array(
        'galeria' => $this->input->post('galeria'), 
        'tag' => $this->input->post('tag'),
        'ativo' => $this->input->post('ativo'),
        );
        
        $retorno = $this->galerias_model->galerias_novo($data);
        

        // LOGS
        $this->load->model('logs_model');
        $dadosU = array(
            'usuario'   => $this->session->userdata('nome'),
            'modulo'    => 'GELERIAS',
            'acao'      => 'INSERT',
            'log'       => $retorno['sql'],
            'data'      => date("Y-m-d H:i:s")
        );
        $this->logs_model->cadastrar($dadosU);    

        redirect('admin/galerias/lista','refresh');
    }

	public function galerias_edita(){
        $this->load->model('galerias_model');
        
        

        $data['galerias'] = $this->galerias_model->ver($this->uri->segment(4));
        
        $this->template->load('admin/template', 'admin/galerias_edita', $data);
    }

	public function galerias_edita_salva(){
        $this->load->model('galerias_model');
        
        $data = array(
			'galeria' => $this->input->post('galeria'), 
			'tag' => $this->input->post('tag'),
			'ativo' => $this->input->post('ativo'),
		);
        
        $retorno = $this->galerias_model->galerias_edita_salva($this->input->post('id_galeria'),$data);
        

        // LOGS
        $this->load->model('logs_model');
        $dadosU = array(
            'usuario'   => $this->session->userdata('nome'),
            'modulo'    => 'galerias',
            'acao'      => 'UPDATE',
            'log'       => $retorno['sql'],
            'data'      => date("Y-m-d H:i:s")
        );
        $this->logs_model->cadastrar($dadosU);  

        redirect('admin/galerias/lista','refresh');
    }

	public function galerias_deleta($data){
        $this->load->model('galerias_model');
        
        $row = $this->uri->segment(4);
        
        $retorno = $this->galerias_model->galerias_deleta($row);

        // LOGS
        $this->load->model('logs_model');
        $dadosU = array(
            'usuario'   => $this->session->userdata('nome'),
            'modulo'    => 'galerias',
            'acao'      => 'DELETE',
            'log'       => $retorno['sql'],
            'data'      => date("Y-m-d H:i:s")
        );
        $this->logs_model->cadastrar($dadosU);    

        redirect($_SERVER['HTTP_REFERER']);
    }
}
