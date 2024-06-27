<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

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

		$this->load->model('usuarios_model');
        $data['usuarios'] = $this->usuarios_model->lista();

        $this->template->load('admin/_template', 'admin/usuarios', $data);
	}

    
    public function novo(){

        $this->load->model('usuarios_model');
        $data['usuarios'] = $this->usuarios_model->ver($this->uri->segment(4));
        
        $this->template->load('admin/_template', 'admin/usuarios_novo', $data);

    }

    
    function novo_salva(){

        $data = array(
            'email' => $this->input->post('email'),
            'senha' => MD5($this->input->post('senha'))
        );

        $this->load->model('usuarios_model');
        $retorno = $this->usuarios_model->novo($data);

        redirect('admin/usuarios','refresh');

    }

    
    public function edita(){

        $this->load->model('usuarios_model');
        $data['usuario'] = $this->usuarios_model->ver($this->uri->segment(4));
        
        $this->template->load('admin/_template', 'admin/usuarios_edita', $data);

    }

    
    public function edita_salva(){

        $this->load->model('usuarios_model');

        $data = array(
            'email' => $this->input->post('email')
        );

        if ($this->input->post('senha') != '000000'){
            $data['senha'] = MD5($this->input->post('senha'));
        }

        $retorno = $this->usuarios_model->edita($this->input->post('id_usuario'),$data);
        
        redirect('admin/usuarios','refresh');

    }

    
    public function deleta(){

        $id = $this->uri->segment(4);

        $this->load->model('usuarios_model');
        $retorno = $this->usuarios_model->deleta($id);

        redirect($_SERVER['HTTP_REFERER']);

    }
}