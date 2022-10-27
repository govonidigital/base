<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {

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

		$this->load->model('galeria_model');
       
        $data['galerias'] = $this->galeria_model->lista();

        $this->template->load('admin/_template', 'admin/galeria', $data);
	}


	public function novo(){

        $data = '';
        $this->template->load('admin/_template', 'admin/galeria_novo', $data);
    }

	function novo_salva(){

        $this->load->model('galeria_model');
        
        $data = array(
        'galeria' => $this->input->post('galeria'), 
        'tag' => $this->input->post('tag'),
        'ativo' => $this->input->post('ativo'),
        );
        
        $retorno = $this->galeria_model->novo($data);
          

        redirect('admin/galeria','refresh');
    }

	public function edita(){

        $this->load->model('galeria_model');
        

        $data['galeria'] = $this->galeria_model->ver($this->uri->segment(4));
        
        $this->template->load('admin/_template', 'admin/galeria_edita', $data);
    }

	public function edita_salva(){

        

        $this->load->model('galeria_model');
        
        $data = array(
			'galeria' => $this->input->post('galeria'), 
			'tag' => $this->input->post('tag'),
			'ativo' => $this->input->post('ativo'),
		);
        
        $retorno = $this->galeria_model->edita_salva($this->input->post('id_galeria'),$data);
        
 

        redirect('admin/galeria','refresh');
    }

	public function galeria_deleta($data){

        $this->load->model('galeria_model');
        
        $row = $this->uri->segment(4);
        
        $retorno = $this->galeria_model->deleta($row);
   

        redirect($_SERVER['HTTP_REFERER']);
    }
}
