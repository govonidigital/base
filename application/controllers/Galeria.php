<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {


	public function index()
	{

		$this->load->library('base');
		$data = $this->base->site();
		
		$data['seo_title'] = '';
		$data['seo_description'] = '';
		$data['seo_keywords'] = '';

		$this->load->model('galeria_model');
       
        $data['galerias'] = $this->galeria_model->lista();

		$this->template->load('_template','galeria', $data);
	}
}
