<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quemsomos extends CI_Controller {


	public function index()
	{
		$this->load->library('base');
		$data = $this->base->site();
		
		$data['seo_title'] = '';
		$data['seo_description'] = '';
		$data['seo_keywords'] = '';

		$this->load->model('layout_model');
        $data['layout'] = $this->layout_model->get_config();
		$pasta = $data['layout']->template;

		$this->template->load($pasta.'/_template',$pasta.'/quemsomos', $data);

	}
}
