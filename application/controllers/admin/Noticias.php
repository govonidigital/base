<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {
    
	public function index(){

		$this->load->model('noticias_model');
       
        $data['noticias'] = $this->noticias_model->lista();

        $this->template->load('admin/_template', 'admin/noticias', $data);
	}

    public function lista(){ 
        $this->load->model('noticias_model');
       
        $data['noticias'] = $this->noticias_model->lista();

        $this->template->load('admin/_template', 'admin/noticias', $data);  
    }
    
    public function noticia_novo(){
        $this->load->model('noticias_model');
        
        $data['noticias'] = $this->noticias_model->ver($this->uri->segment(4));
        
        $this->template->load('admin/_template', 'admin/noticias_novo', $data);
    }
    
    function noticia_novo_salva(){
        $this->load->model('noticias_model');
        
        
        $data = array(
            'data' => $this->input->post('data'),
            'nome' => $this->input->post('nome'),
            'resumo' => $this->input->post('resumo'),
            'texto' => $this->input->post('texto')
        );
        
        
        $retorno = $this->noticias_model->noticias_novo($data);
        

        redirect('admin/noticias/lista','refresh');
    }
    
    public function noticia_edita(){
        $this->load->model('noticias_model');
        
        $data['noticias'] = $this->noticias_model->ver($this->uri->segment(4));
        
        $this->template->load('admin/_template', 'admin/noticias_edita', $data);
    }
    
    public function noticia_edita_salva(){
        $this->load->model('noticias_model');
        
        
        $data = array(
            'data' => $this->input->post('data'),
            'nome' => $this->input->post('nome'),
            'resumo' => $this->input->post('resumo'),
            'texto' => $this->input->post('texto')
        );
        
        
        $retorno = $this->noticias_model->noticias_edita_salva($this->input->post('id_noticia'),$data);
        


        redirect('admin/noticias/lista','refresh');
    }
    
    public function noticia_deleta($data){
        $this->load->model('noticias_model');
        
        $row = $this->uri->segment(4);
        
        $retorno = $this->noticias_model->noticias_deleta($row);


        redirect($_SERVER['HTTP_REFERER']);
    }
}