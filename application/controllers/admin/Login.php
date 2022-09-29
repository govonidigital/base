<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$data['seo_title'] = '';
		$data['seo_description'] = '';
		$data['seo_keywords'] = '';

		$this->load->view('admin/login', $data);
	}

	 // LOGAR USUARIO
	 public function loga(){
        
        $this->load->model('login_model');
        
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');
        
	    $dados['email'] = $this->login_model->loga($email,$senha);
        if ($dados['email'] == ''){
            
            redirect('admin/login', 'refresh');
        }else{
            redirect('admin/principal', 'refresh');
            
        }
    }
    
    public function recuperarsenha(){
        
        if($this->uri->segment(4) == 'erro'){
            $data['alerta'] = "<div class='alert alert-danger' role='alert'>".$this->lang->line('usuario_invalido')."</div>";
        }
        else if($this->uri->segment(4) == 'ok'){
            $data['alerta'] = "<div class='alert alert-success' role='alert'>".$this->lang->line('recupera_enviado')."</div>";
        }
        else{
            $data['alerta'] = '';
        }
        
        $this->load->view('admin/recuperasenha',$data);
    }
    
    public function recupera_senha(){

        $this->load->model('login_model');
        
        $email_user = $this->input->post('email');
        $this->load->helper('string');
        
        $id = $this->login_model->compara_admin($email_user);
        
        
        
        if ($id){
            
            $data = array(
            'id_cliente' => $id[0]->id_usuario,
            'email' => $email_user,
            'recupera' => random_string('md5')
            );
            
            $this->login_model->deleta_troca($id[0]->id_usuario);
            
            $insert_id = $this->login_model->cria_recupera($data);
            
            $this->load->model('email_model');
        
            $data_email = $this->email_model->lista();

            $this->load->library('email');
            
                $config['protocol']     = $data_email[0]->protocol;
                $config['smtp_host']    = $data_email[0]->smtp_host;
                $config['smtp_port']    = $data_email[0]->smtp_port;
                $config['smtp_timeout'] = '7';
                $config['smtp_user']    = $data_email[0]->smtp_user;
                $config['smtp_pass']    = $data_email[0]->smtp_pass;
                $config['charset']      = $data_email[0]->charset;
                $config['newline']      = "\r\n";
                $config['mailtype'] = 'text'; // or html
                $config['validation'] = TRUE; // bool whether to validate email or not      
                $email_config['mailtype'] = 'html';
                
            $this->email->initialize($config);

            $data['msg'] = $this->login_model->envia($email_user, $insert_id);

            
            $cliente = $data['msg']->id_cliente;
            $codigo = $data['msg']->recupera;
            
            $this->email->from($data_email[0]->smtp_user, $data_email[0]->nome_email);
            $this->email->to($email_user);
            $this->email->subject('Solicitacao de troca de senha');
            $this->email->message(
                $this->lang->line('email_recupera_senha')." ".base_url('login/admin/trocasenha/').$cliente."/".$codigo
            );
            
            $this->email->send();
            redirect('admin/login/recuperarsenha/ok', 'refresh');

        }else{
            redirect('admin/login/recuperarsenha/erro', 'refresh');
        }
        
        redirect('admin/login', 'refresh');
        
    }
    
    public function trocasenha(){
        
        if($this->uri->segment(3) <> ''){
            $this->load->model('login_model');
            $data['troca_senha']     = $this->login_model->troca_senha($this->uri->segment(3),$this->uri->segment(4));
        }
        else{
            echo "Página inválida";exit;
        }
        
        $this->load->view('admin/trocasenha',$data);
    }
    
    public function salva_trocasenha(){
        
        $url = 'admin/login/trocasenha/'.$this->input->post('uri3').'/'.$this->input->post('uri4');
        
        if ($this->input->post('nova') == $this->input->post('nova_repete')){
            $this->load->model('login_model');
            
            $data = array(
                'senha' => md5($this->input->post('nova'))
            );
            
            $this->login_model->nova_senha_admin($this->input->post('uri3'),$data);
            
            redirect('admin/login', 'refresh');
        }
        else{
            redirect($url, 'refresh');
        }
    }
    
    public function sair(){
        $this->session->sess_destroy();
        redirect('admin/login', 'refresh');
    }
}
