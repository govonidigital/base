<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {


	public function index(){

		$this->load->library('base');
		$data = $this->base->site();
		
		$data['seo_title'] = '';
		$data['seo_description'] = '';
		$data['seo_keywords'] = '';

		$this->load->model('galeria_model');
       
        $data['galerias'] = $this->galeria_model->lista();

		$this->load->model('layout_model');
        $data['layout'] = $this->layout_model->get_config();
		$pasta = $data['layout']->template;

		$this->template->load($pasta.'/_template',$pasta.'/galeria', $data);

	}



	public function ver(){

		$this->load->library('base');
		$data = $this->base->site();

        $this->load->model('galeria_fotos_model');
        $data['galeria_fotos'] = $this->galeria_fotos_model->lista_galeria_fotos($this->uri->segment(3));

		$this->load->model('layout_model');
        $data['layout'] = $this->layout_model->get_config();
		$pasta = $data['layout']->template;

        $this->template->load($pasta.'/_template',$pasta.'/galeria_fotos', $data);
    }
}
