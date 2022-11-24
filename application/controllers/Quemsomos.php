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

		$this->template->load('_template','quemsomos', $data);
	}
}
