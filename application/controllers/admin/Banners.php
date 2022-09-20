<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banners extends CI_Controller {
    
	public function index(){

		$this->load->model('banners_model');
       
        $data['banners'] = $this->banners_model->lista();

        $this->template->load('admin/_template', 'admin/banners', $data);
	}

    
    public function lista(){ 
        $this->load->model('banners_model');
       
        $data['banners'] = $this->banners_model->lista();

        $this->template->load('admin/_template', 'admin/banners', $data);  
    }
    
    public function banner_novo(){
        $this->load->model('banners_model');
        
        $data['banners'] = $this->banners_model->ver($this->uri->segment(4));
        
        $this->template->load('admin/_template', 'admin/banners_novo', $data);
    }
    
    function banner_novo_salva(){
        $this->load->model('banners_model');
        
        $config['upload_path']          = './assets/img/banner/';
        $config['allowed_types']        = 'JPG|PNG|JPEG|jpg|png|jpeg';
        $config['encrypt_name']        = true;

        
        $this->load->library('upload');
        $this->upload->initialize($config);
        
        $data = array(
        'link' => $this->input->post('link'),
        'ativo' => $this->input->post('ativo')
        );
        
        if ($this->upload->do_upload('imagem')){
            $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
            $file_name = $upload_data['file_name'];
            $data = $data + array('imagem' => $file_name);

            $config['image_library'] = 'gd2';
            $config['source_image'] = "./assets/img/banner/$file_name";
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 1600;

            $this->load->library('image_lib', $config);

            $this->image_lib->resize();

        }else{
            echo $this->upload->display_errors();

            $data['upload_data'] = $this->upload->data();
            echo  $data['upload_data']['file_name'];


        }
        
        $retorno = $this->banners_model->banners_novo($data);
        

        redirect('admin/banners/lista','refresh');
    }
    
    public function banner_edita(){
        $this->load->model('banners_model');
        
        

        $data['banners'] = $this->banners_model->ver($this->uri->segment(4));
        
        $this->template->load('admin/_template', 'admin/banners_edita', $data);
    }
    
    public function banner_edita_salva(){
        $this->load->model('banners_model');
        
        $config['upload_path']          = './assets/img/banner/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['encrypt_name']        = 'true';
        $config['max_size']             = 2000;
        $config['max_width']            = 2000;
        $config['max_height']           = 1000;
        
        $this->load->library('upload', $config);
        
        $data = array(
        'link' => $this->input->post('link'),
        'ativo' => $this->input->post('ativo')
        );
        
        if ($this->upload->do_upload('imagem')){
                $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                $file_name = $upload_data['file_name'];
                $data = $data + array('imagem' => $file_name);  
            }
            
        
        $retorno = $this->banners_model->banners_edita_salva($this->input->post('id_banner'),$data);
        

        redirect('admin/banners/lista','refresh');
    }
    
    public function banner_deleta($data){
        $this->load->model('banners_model');
        
        $row = $this->uri->segment(4);
        
        $retorno = $this->banners_model->banners_deleta($row);

        // LOGS
        $this->load->model('logs_model');
        $dadosU = array(
            'usuario'   => $this->session->userdata('nome'),
            'modulo'    => 'BANNERS',
            'acao'      => 'DELETE',
            'log'       => $retorno['sql'],
            'data'      => date("Y-m-d H:i:s")
        );
        $this->logs_model->cadastrar($dadosU);    

        redirect($_SERVER['HTTP_REFERER']);
    }
}