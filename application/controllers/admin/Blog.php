<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
    
	public function index(){

		$this->load->model('blog_model');
       
        $data['blog'] = $this->blog_model->lista();

        $this->template->load('admin/_template', 'admin/blog', $data);
	}

    public function lista(){ 
        $this->load->model('blog_model');
       
        $data['blog'] = $this->blog_model->lista();

        $this->template->load('admin/_template', 'admin/blog', $data);  
    }
    
    public function blog_novo(){
        $this->load->model('blog_model');
        
        $data['blog'] = $this->blog_model->ver($this->uri->segment(4));
        
        $this->template->load('admin/_template', 'admin/blog_novo', $data);
    }
    
    function blog_novo_salva(){
        $this->load->model('blog_model');

        $config['upload_path']          = './assets/img/blog/';
        $config['allowed_types']        = 'JPG|PNG|JPEG|jpg|png|jpeg';
        $config['encrypt_name']        = true;

        
        $this->load->library('upload');
        $this->upload->initialize($config);
        
        
        $data = array(
            'data' => $this->input->post('data'),
            'nome' => $this->input->post('nome'),
            'resumo' => $this->input->post('resumo'),
            'texto' => $this->input->post('texto')
        );


        if ($this->upload->do_upload('imagem')){
            $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
            $file_name = $upload_data['file_name'];
            $data = $data + array('imagem' => $file_name);

            $config['image_library'] = 'gd2';
            $config['source_image'] = "./assets/img/blog/$file_name";
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 2000;

            $this->load->library('image_lib', $config);

            $this->image_lib->resize();

        }else{
            echo $this->upload->display_errors();

            $data['upload_data'] = $this->upload->data();
            echo  $data['upload_data']['file_name'];


        }
        
        
        $retorno = $this->blog_model->blog_novo($data);
        

        redirect('admin/blog/lista','refresh');
    }
    
    public function blog_edita(){
        $this->load->model('blog_model');
        
        $data['blog'] = $this->blog_model->ver($this->uri->segment(4));
        
        $this->template->load('admin/_template', 'admin/blog_edita', $data);
    }
    
    public function blog_edita_salva() {
        $this->load->model('blog_model');
    
        $config['upload_path'] = './assets/img/blog/';
        $config['allowed_types'] = 'JPG|PNG|JPEG|jpg|png|jpeg';
        $config['encrypt_name'] = true;
    
        $this->load->library('upload', $config);
    
        $data = array(
            'data' => $this->input->post('data'),
            'nome' => $this->input->post('nome'),
            'resumo' => $this->input->post('resumo'),
            'texto' => $this->input->post('texto')
        );
    
        // Check if a file is being uploaded
        if ($this->upload->do_upload('imagem')) {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data['imagem'] = $file_name;
    
            $resize_config['image_library'] = 'gd2';
            $resize_config['source_image'] = "./assets/img/blog/$file_name";
            $resize_config['maintain_ratio'] = TRUE;
            $resize_config['width'] = 2000;
    
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
        $id_blog = $this->input->post('id_blog');
        $this->blog_model->blog_edita_salva($id_blog, $data);
    
        redirect('admin/blog/lista', 'refresh');
    }

   
    
    public function blog_deleta($data){
        $this->load->model('blog_model');
        
        $row = $this->uri->segment(4);
        
        $retorno = $this->blog_model->blog_deleta($row);


        redirect($_SERVER['HTTP_REFERER']);
    }
}