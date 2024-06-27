<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {


	public function index(){
		
		$this->load->library('base');
		$data = $this->base->site();

		$data['seo_title'] = '';
		$data['seo_description'] = '';
		$data['seo_keywords'] = '';

		$this->load->model('email_model');
       
        $data['email'] = $this->email_model->lista();


		$this->template->load('_template','contato', $data);
	}




	public function envia(){


        $this->load->model('email_model');
        $email = $this->email_model->lista();



        if ($this->input->post('total') == $this->input->post('validacao') and $this->input->post('total') <> ''){

            $this->load->library('email');


            $config['protocol']     = $email[0]->protocol;
            $config['smtp_host']    = $email[0]->smtp_host;
            $config['smtp_port']    = $email[0]->smtp_port;
            $config['smtp_timeout'] = '7';
            $config['smtp_user']    = $email[0]->smtp_user;
            $config['smtp_pass']    = $email[0]->smtp_pass;
            $config['charset']      = $email[0]->charset;
            $config['newline']      = "\r\n";
            $config['crlf']         = "\r\n";
            $config['mailtype']     = 'html';
            $config['validation']   = TRUE;
            if ($email[0]->smtp_crypto != ''){
                $config['smtp_crypto']   = $email[0]->smtp_crypto;
            }

            $this->email->initialize($config);


            $this->email->from($email[0]->smtp_user, 'Contato do site');
            $this->email->to($email[0]->mail_to);
            $this->email->subject('Mensagem do site');
            $this->email->message(

                $this->input->post('nome')."\r\n".
                $this->input->post('email')."\r\n".
                $this->input->post('telefone')."\r\n".
                $this->input->post('mensagem')."\r\n"

            );



            $r = $this->email->send(FALSE);

            //$this->email->print_debugger();

            redirect('contato','refresh');
        }




    }
}
