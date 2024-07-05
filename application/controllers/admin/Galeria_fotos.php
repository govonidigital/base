<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria_fotos extends CI_Controller {

    private function verifica_sessao(){
    
        if(!$this->session->userdata('logado')){
            //print "<script type=\"text/javascript\">alert('Sessão expirou, você deve se logar novamente!');</script>";
            //If no session, redirect to login page
            redirect('admin/login', 'refresh');
        }else{
            return true;
        }
        
        return true;
    }

    public function __construct(){

        parent::__construct();
        if ($this->verifica_sessao()){

        }

    }


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


        $this->load->model('galeria_fotos_model');
        
        $data['galeria_fotos'] = $this->galeria_fotos_model->ver($this->uri->segment(4));
        
        $this->template->load('admin/_template', 'admin/galeria_fotos_edita', $data);
    }

	public function edita_salva() {
        $this->load->model('galeria_fotos_model');
        
        $config['upload_path'] = './assets/img/galeria/';
        $config['allowed_types'] = 'JPG|PNG|JPEG|jpg|png|jpeg';
        $config['encrypt_name'] = true;
    
        $this->load->library('upload', $config);
    
        $data = array(
            'titulo' => $this->input->post('titulo'), 
            'id_galeria' => $this->input->post('id_galeria'), 
            'link' => $this->input->post('link'),
            'ordem' => $this->input->post('ordem'),
            'ativo' => $this->input->post('ativo')
        );
    
        // Check if a file is being uploaded
        if ($this->upload->do_upload('imagem')) {
            $upload_data = $this->upload->data(); // Returns array of containing all of the data related to the file you uploaded.
            $file_name = $upload_data['file_name'];
            $data['imagem'] = $file_name;
    
            $resize_config['image_library'] = 'gd2';
            $resize_config['source_image'] = "./assets/img/galeria/$file_name";
            $resize_config['maintain_ratio'] = TRUE;
            $resize_config['width'] = 1600;
    
            $this->load->library('image_lib', $resize_config);
            $this->image_lib->resize();
        } else {
            // If an image was uploaded, do nothing and continue
            if (!empty($_FILES['imagem']['name'])) {
                echo $this->upload->display_errors();
                return;
            }
        }
    
        // Save the updated data to the database
        $id_galeria_foto = $this->input->post('id_galeria_foto');
        $this->galeria_fotos_model->galeria_fotos_edita_salva($id_galeria_foto, $data);
    
        redirect('admin/galeria_fotos/lista/' . $this->input->post('id_galeria'), 'refresh');
    }
    



	public function deleta($data){


        $this->load->model('galeria_fotos_model');
        $row = $this->uri->segment(4);
        $retorno = $this->galeria_fotos_model->galeria_fotos_deleta($row);


        redirect('admin/galeria','refresh');
    }
}
