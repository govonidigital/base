<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$data['seo_title'] = '';
		$data['seo_description'] = '';
		$data['seo_keywords'] = '';

		$this->load->view('admin/login', $data);
	}

	 // LOGAR USUARIO
	 public function loga(){
        
        $this->load->model('login_model');
        
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');
        
	    $dados['email'] = $this->login_model->loga($email,$senha);
        if ($dados['email'] == ''){
            
            redirect('admin/login', 'refresh');
        }else{
            redirect('admin/principal', 'refresh');
            
        }
    }

    public function novologin(){
        $this->load->view('admin/novologin');

    }

    public  function incluilogin(){
        $this->load->model('login_model');
        
        $data = array(
        'email' => $this->input->post('email'),
        'senha' => MD5($this->input->post('senha')),
        'ativo' => 'SIM'
        );
        
        $retorno = $this->login_model->novo($data);
          
        redirect('admin/login','refresh');
    }
    
    public function recuperarsenha(){
        $this->load->view('admin/recuperasenha');
    }
    
    public function recupera_senha(){

        $this->load->model('login_model');
        
        $email_user = $this->input->post('email');
        $id = $this->login_model->compara_admin($email_user);
        
        
        
        if ($id){
                
                $nova_senha = MD5($this->input->post('senha'));
                
                $data = array(
                    'senha' => $nova_senha,
                );
                
                $this->login_model->nova_senha($id,$data);
                
        
        }

        redirect('admin/login','refresh');
    }
    

    public function sair(){
        $this->session->sess_destroy();
        redirect('admin/login', 'refresh');
    }
}
