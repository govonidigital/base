<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {


	public function index()
	{
		$data['seo_title'] = '';
		$data['seo_description'] = '';
		$data['seo_keywords'] = '';

		$this->template->load('_template','contato', $data);
	}
}
