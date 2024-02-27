<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leads extends CI_Controller {


	public function index(){
		
		$this->load->library('base');
		$data = $this->base->site();

		$data['seo_title'] = '';
		$data['seo_description'] = '';
		$data['seo_keywords'] = '';


		$this->template->load('_template','leads', $data);
	}



	function novo_salva(){

        $data = array(
            'nome' => $this->input->post('nome'),
			'cadastro' => date('Y-m-d'),
            'email' => $this->input->post('email'),
            'fone' => $this->input->post('fone'),
            'msg' => $this->input->post('msg')
        );
        
        $this->load->model('leads_model');
        $retorno = $this->leads_model->novo($data);

        redirect('leads/agradecimento','refresh');
    }


	public function agradecimento(){
		
		$this->load->library('base');
		$data = $this->base->site();

		$data['seo_title'] = '';
		$data['seo_description'] = '';
		$data['seo_keywords'] = '';


		$this->template->load('_template','agradecimento', $data);
	}



}
