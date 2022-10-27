<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	private function verifica_sessao(){
    
        if(!$this->session->userdata('logado')){
            print "<script type=\"text/javascript\">alert('Sessão expirou, você deve se logar novamente!');</script>";
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


	public function index()
	{
		$data['seo_title'] = '';
		$data['seo_description'] = '';
		$data['seo_keywords'] = '';

		$this->template->load('admin/_template','admin/principal', $data);
	}
}
