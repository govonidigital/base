<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {


	public function index(){
		
		$this->load->library('base');
		$data = $this->base->site();

		$data['seo_title'] = '';
		$data['seo_description'] = '';
		$data['seo_keywords'] = '';

		$this->load->model('email_model');
       
        $data['email'] = $this->email_model->lista();


		$this->template->load('_template','contato', $data);
	}




	public function enviar(){
        
        $this->load->library('email_envia');
        $ret = $this->email_envia->enviar(
            'atendimento@sindlocrs.com.br',
            'Contato do site',
            'testando conf'
        );

        if ($ret['status'] == 'ok'){
            $retorno = "email enviado com sucesso";
        }else{
            $retorno = "Erro: " . $ret['mensagem'];
        }

        redirect('admin/email?retorno_teste='.$retorno,'refresh');

    }
}
