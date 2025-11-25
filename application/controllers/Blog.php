<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {


	public function index(){

		$this->load->library('base');
		$data = $this->base->site();
		
		$data['seo_title'] = '';
		$data['seo_description'] = '';
		$data['seo_keywords'] = '';

		$this->load->model('blog_model');
        $data['blog'] = $this->blog_model->lista();

		$this->load->model('layout_model');
        $data['layout'] = $this->layout_model->get_config();
		$pasta = $data['layout']->template;

		$this->template->load($pasta.'/_template',$pasta.'/blog', $data);

	}

	public function ver(){

		$this->load->library('base');
		$data = $this->base->site();
		
		$data['seo_title'] = '';
		$data['seo_description'] = '';
		$data['seo_keywords'] = '';

		$this->load->model('blog_model');
		$data['blog'] = $this->blog_model->ver($this->uri->segment(3));

		$this->load->model('layout_model');
        $data['layout'] = $this->layout_model->get_config();
		$pasta = $data['layout']->template;

		$this->template->load($pasta.'/_template',$pasta.'/blog_ver', $data);
	}
}
