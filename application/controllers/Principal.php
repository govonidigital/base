<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {


	public function index()
	{
		
		$this->load->library('base');
		$data = $this->base->site();


		$data['seo_title'] = '';
		$data['seo_description'] = '';
		$data['seo_keywords'] = '';

		$this->load->model('banners_model');
       
        $data['banners'] = $this->banners_model->lista('SIM');

		$this->template->load('_template','principal', $data);
	}
}
