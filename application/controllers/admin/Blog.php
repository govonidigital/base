<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog extends CI_Controller {

    private function verifica_sessao(){
    
        if(!$this->session->userdata('logado')){
            //print "<script type=\"text/javascript\">alert('Sessão expirou, você deve se logar novamente!');</script>";
            //If no session, redirect to login page
            redirect('admin/login', 'refresh');
        }else{
            return true;
        }
        
        return true;
    }

    public function __construct(){

        parent::__construct();
        if ($this->verifica_sessao()){

        }

    }
    
	public function index(){

		$this->load->model('blog_model');
       
        $data['blog'] = $this->blog_model->lista();

        $this->template->load('admin/_template', 'admin/blog', $data);
	}

    public function lista(){ 
        $this->load->model('blog_model');
       
        $data['blog'] = $this->blog_model->lista();

        $this->template->load('admin/_template', 'admin/blog', $data);  
    }
    
    public function blog_novo(){
        $this->load->model('blog_model');
        
        $data['blog'] = $this->blog_model->ver($this->uri->segment(4));
        
        $this->template->load('admin/_template', 'admin/blog_novo', $data);
    }
    
    function blog_novo_salva(){
        $this->load->model('blog_model');
        
        
        $data = array(
            'data' => $this->input->post('data'),
            'nome' => $this->input->post('nome'),
            'resumo' => $this->input->post('resumo'),
            'texto' => $this->input->post('texto')
        );
        
        
        $retorno = $this->blog_model->blog_novo($data);
        

        redirect('admin/blog/lista','refresh');
    }
    
    public function blog_edita(){
        $this->load->model('blog_model');
        
        $data['blog'] = $this->blog_model->ver($this->uri->segment(4));
        
        $this->template->load('admin/_template', 'admin/blog_edita', $data);
    }
    
    public function blog_edita_salva(){
        $this->load->model('blog_model');
        
        
        $data = array(
            'data' => $this->input->post('data'),
            'nome' => $this->input->post('nome'),
            'resumo' => $this->input->post('resumo'),
            'texto' => $this->input->post('texto')
        );
        
        
        $retorno = $this->blog_model->blog_edita_salva($this->input->post('id_blog'),$data);
        


        redirect('admin/blog/lista','refresh');
    }
    
    public function blog_deleta($data){
        $this->load->model('blog_model');
        
        $row = $this->uri->segment(4);
        
        $retorno = $this->blog_model->blog_deleta($row);


        redirect($_SERVER['HTTP_REFERER']);
    }
}