<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria_fotos extends CI_Controller {


	public function lista(){

        $this->load->model('galeria_fotos_model');
        $data['galeria_fotos'] = $this->galeria_fotos_model->lista_galeria_fotos($this->uri->segment(4));

        $this->template->load('admin/_template', 'admin/galeria_fotos', $data);  
    }

	public function novo(){

        $data['id_galeria'] = $this->uri->segment(4);
        $this->template->load('admin/_template', 'admin/galeria_fotos_novo', $data);
    }

	function novo_salva(){
        $this->load->model('galeria_fotos_model');
        
        $config['upload_path']          = './assets/img/galeria/';
        $config['allowed_types']        = 'JPG|PNG|JPEG|jpg|png|jpeg';
        $config['encrypt_name']        = true;

        
        $this->load->library('upload');
        $this->upload->initialize($config);
        
        $data = array(
        'titulo' => $this->input->post('titulo'), 
        'id_galeria' => $this->input->post('id_galeria'), 
        'link' => $this->input->post('link'),
        'ordem' => $this->input->post('ordem'),
        'ativo' => $this->input->post('ativo'),
        );
        
        if ($this->upload->do_upload('imagem')){
            $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
            $file_name = $upload_data['file_name'];
            $data = $data + array('imagem' => $file_name);

            $config['image_library'] = 'gd2';
            $config['source_image'] = "./assets/img/galeria/$file_name";
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 1600;

            $this->load->library('image_lib', $config);

            $this->image_lib->resize();

        }else{
            echo $this->upload->display_errors();

            $data['upload_data'] = $this->upload->data();
            echo  $data['upload_data']['file_name'];


        }
        
        $retorno = $this->galeria_fotos_model->galeria_fotos_novo($data);
        
   

        redirect('admin/galeria_fotos/lista/'.$this->input->post('id_galeria'),'refresh');
    }

	public function edita(){


        $this->load->model('galeria_fotoss_model');
        
        $data['galeria_fotoss'] = $this->galeria_fotoss_model->ver($this->uri->segment(5));
        
        $this->template->load('admin/_template', 'admin/galeria_fotoss_edita', $data);
    }

	public function edita_salva(){

        $this->load->model('galeria_fotoss_model');
        
        $config['upload_path']          = './assets/img/galeria_fotos/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['encrypt_name']        = 'true';
        $config['max_size']             = 2000;
        $config['max_width']            = 2000;
        $config['max_height']           = 1000;
        
        $this->load->library('upload', $config);
        
        $data = array(
        'titulo' => $this->input->post('titulo'), 
        'link' => $this->input->post('link'),
        'ordem' => $this->input->post('ordem'), 
        'ativo' => $this->input->post('ativo'),
        );
        
        if ($this->upload->do_upload('imagem')){
                $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                $file_name = $upload_data['file_name'];
                $data = $data + array('imagem' => $file_name);  
            }
            
        
        $retorno = $this->galeria_fotoss_model->galeria_fotos_edita_salva($this->input->post('id_galeria_fotos'),$data);
        

 

        redirect('admin/galeria_fotoss/lista','refresh');
    }



	public function deleta($data){


        $this->load->model('galeria_fotoss_model');
        $row = $this->uri->segment(4);
        $retorno = $this->galeria_fotoss_model->galeria_fotoss_deleta($row);

        // LOGS
        $this->load->model('logs_model');
        $dadosU = array(
            'usuario'   => $this->session->userdata('nome'),
            'modulo'    => 'galeria_fotos',
            'acao'      => 'DELETE',
            'log'       => $retorno['sql'],
            'data'      => date("Y-m-d H:i:s")
        );
        $this->logs_model->cadastrar($dadosU);    

        redirect($_SERVER['HTTP_REFERER']);
    }
}
