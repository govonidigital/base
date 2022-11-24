<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {


	public function index()
	{

		$this->load->library('base');
		$data = $this->base->site();
		
		$data['seo_title'] = '';
		$data['seo_description'] = '';
		$data['seo_keywords'] = '';

		$this->load->model('blog_model');
        $data['blog'] = $this->blog_model->lista();

		$this->template->load('_template','blog', $data);
	}

	public function ver()
	{
		$this->load->model('blog_model');
		$data['blog'] = $this->blog_model->ver($this->uri->segment(3));

		$this->template->load('_template','blog_ver', $data);
	}
}
