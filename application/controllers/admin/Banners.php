<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banners extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('banners_model');
        $this->load->library('session');
        $this->load->helper('url');

        $this->verifica_sessao();
    }

    private function verifica_sessao() {
        if (!$this->session->userdata('logado')) {
            redirect('admin/login', 'refresh');
        }
    }

    public function index() {
        $data['banners'] = $this->banners_model->lista();
        $this->template->load('admin/_template', 'admin/banners', $data);
    }

    public function lista() {
        $data['banners'] = $this->banners_model->lista();
        $this->template->load('admin/_template', 'admin/banners', $data);
    }

    public function banner_novo() {
        $data['banners'] = $this->banners_model->ver($this->uri->segment(4));
        $this->template->load('admin/_template', 'admin/banners_novo', $data);
    }

    public function banner_novo_salva() {
        $config['upload_path'] = './assets/img/banner/';
        $config['allowed_types'] = 'JPG|PNG|JPEG|jpg|png|jpeg';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);
        $data = array(
            'link' => $this->input->post('link'),
            'ativo' => $this->input->post('ativo'),
            'tipo' => $this->input->post('tipo')
        );

        if ($this->upload->do_upload('imagem')) {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data['imagem'] = $file_name;

            $resize_config['image_library'] = 'gd2';
            $resize_config['source_image'] = "./assets/img/banner/$file_name";
            $resize_config['maintain_ratio'] = TRUE;
            $resize_config['width'] = 1600;

            $this->load->library('image_lib', $resize_config);
            $this->image_lib->resize();
        } else {
            echo $this->upload->display_errors();
        }

        $this->banners_model->banners_novo($data);
        redirect('admin/banners/lista', 'refresh');
    }

    public function banner_edita() {
        $data['banners'] = $this->banners_model->ver($this->uri->segment(4));
        $this->template->load('admin/_template', 'admin/banners_edita', $data);
    }

    public function banner_edita_salva() {
        $config['upload_path'] = './assets/img/banner/';
        $config['allowed_types'] = 'JPG|PNG|JPEG|jpg|png|jpeg';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        $data = array(
            'link' => $this->input->post('link'),
            'ativo' => $this->input->post('ativo'),
            'tipo' => $this->input->post('tipo')
        );

       
        if ($this->upload->do_upload('imagem')) {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data['imagem'] = $file_name;

            $resize_config['image_library'] = 'gd2';
            $resize_config['source_image'] = "./assets/img/banner/$file_name";
            $resize_config['maintain_ratio'] = TRUE;
            $resize_config['width'] = 1600;

            $this->load->library('image_lib', $resize_config);
            $this->image_lib->resize();
        } else {
            echo $this->upload->display_errors();
        }

   
        $id_banner = $this->input->post('id_banner');
        $this->banners_model->banners_edita_salva($id_banner, $data);
        redirect('admin/banners/lista', 'refresh');
    }



    public function banner_deleta($data) {
        $row = $this->uri->segment(4);
        $this->banners_model->banners_deleta($row);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
