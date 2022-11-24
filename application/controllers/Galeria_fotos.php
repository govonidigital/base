<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria_fotos extends CI_Controller {


	public function index()
	{
		$this->load->library('base');
		$data = $this->base->site();

		$data['seo_title'] = '';
		$data['seo_description'] = '';
		$data['seo_keywords'] = '';

		$this->load->model('galeria_fotos_model');
       
        $data['galerias'] = $this->galeria_fotos_model->lista();

		$this->template->load('_template','galeria_fotos', $data);
	}

	public function lista(){

		$this->load->library('base');
		$data = $this->base->site();

        $this->load->model('galeria_fotos_model');
        $data['galeria_fotos'] = $this->galeria_fotos_model->lista_galeria_fotos($this->uri->segment(3));

        $this->template->load('_template','galeria_fotos', $data);
    }
}
