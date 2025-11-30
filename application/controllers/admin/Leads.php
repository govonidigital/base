<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leads extends CI_Controller {

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

        $this->load->library('base_admin');
		$data = $this->base_admin->site();

        $this->load->model('leads_model');
       
        $data['leads'] = $this->leads_model->lista();

        $this->template->load('admin/_template', 'admin/leads', $data);  
    }
    
    public function novo(){

        $this->load->library('base_admin');
		$data = $this->base_admin->site();

        $this->load->model('leads_model');
        $data['leads'] = $this->leads_model->ver($this->uri->segment(4));
        
        $this->template->load('admin/_template', 'admin/leads_novo', $data);
    }
    
    function novo_salva(){

        $this->load->model('leads_model');

        
        $data = array(
            'nome'     => $this->input->post('nome'),
            'cadastro' => date('Y-m-d'),
            'email'    => $this->input->post('email'),
            'fone'     => $this->input->post('fone'),
            'msg'      => $this->input->post('msg')
        );

        
        
        $retorno = $this->leads_model->novo($data);
        

        redirect('admin/leads','refresh');
    }
    
    public function edita(){

        $this->load->library('base_admin');
		$data = $this->base_admin->site();

        $this->load->model('leads_model');
        $data['leads'] = $this->leads_model->ver($this->uri->segment(4));
        
        $this->template->load('admin/_template', 'admin/leads_edita', $data);
    }
    
    public function edita_salva(){

        $this->load->model('leads_model');

        
        $data = array(
            'nome'     => $this->input->post('nome'),
            'email'    => $this->input->post('email'),
            'fone'     => $this->input->post('fone'),
            'msg'      => $this->input->post('msg')
        );
       
        
        $retorno = $this->leads_model->edita($this->input->post('id_lead'),$data);
        


        redirect('admin/leads','refresh');
    }
    
    public function deleta($id){

        $this->load->model('leads_model');
        $row = $this->uri->segment(4);
        $retorno = $this->leads_model->deleta($row);


        redirect($_SERVER['HTTP_REFERER']);
    }
}