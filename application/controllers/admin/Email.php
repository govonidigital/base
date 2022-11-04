<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {    

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

		$this->load->model('email_model');
       
        $data['email'] = $this->email_model->lista();

        $this->template->load('admin/_template', 'admin/email', $data);
	}

    public function lista(){ 
		$this->load->model('email_model');
       
        $data['email'] = $this->email_model->lista();

        $this->template->load('admin/_template', 'admin/email', $data);
    }
    

    public function salva(){
        $this->load->model('email_model');
        
        $c = $this->email_model->mostra();
        
        $data = array(
            'protocol' => $this->input->post('protocol'),
            'nome_email' => $this->input->post('nome_email'),
            'smtp_host' => $this->input->post('smtp_host'),
            'smtp_port' => $this->input->post('smtp_port'),
            'smtp_user' => $this->input->post('smtp_user'),
            'smtp_pass' => $this->input->post('smtp_pass'),
            'charset' => $this->input->post('charset'),
            'subject' => $this->input->post('subject'),
            'mail_to' => $this->input->post('mail_to')
        );

        $retorno = $this->email_model->atualiza($c[0]->id_email,$data);
         

        redirect('admin/email/lista','refresh');
    }



}