<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Codigos extends CI_Controller
{
    public function __construct(){
        
        parent::__construct();

        if(!$this->session->userdata('logado')){
            redirect('admin/login', 'refresh');
        }

        $this->load->model('Codigos_model');
        $this->load->library('session');
    }


    public function index(){

        $this->load->library('base_admin');
		$data = $this->base_admin->site();

        
        $data['codigos'] = $this->Codigos_model->mostra();

        if (!empty($data['codigos'])) {
            $data['c'] = $data['codigos'][0];
        } else {
            $data['c'] = (object) [
                'id_codigo'          => '',
                'google_analytics'   => '',
                'google_analytics_old' => '',
                'facebook_pixel'     => '',
                'css'                => '',
                'tags'               => '',
                'js'                 => ''
            ];
        }

        // Mostra mensagem de sucesso, se houver
        $data['mensagem'] = $this->session->flashdata('mensagem');

        // Carrega dentro do template admin
        $this->template->load('admin/_template', 'admin/codigos', $data);
    }

    public function salva()
    {
        $c = $this->Codigos_model->mostra();

        $data = [
            'css'              => $this->input->post('css'),
            'tags'             => $this->input->post('tags'),
            'js'               => $this->input->post('js'),
            'google_analytics' => $this->input->post('google_analytics'),
            'facebook_pixel'   => $this->input->post('facebook_pixel')
        ];

        if (!empty($c)) {
            // Atualiza o registro existente
            $retorno = $this->Codigos_model->atualiza($c[0]->id_codigo, $data);
            $sql_log = $retorno['sql'] ?? 'UPDATE codigos SET ...';
        } else {
            // Caso ainda não exista, insere um novo
            $this->db->insert('codigos', $data);
            $sql_log = $this->db->last_query();
        }

        // LOG
        $dadosU = [
            'usuario' => $this->session->userdata('nome'),
            'modulo'  => 'CODIGOS',
            'acao'    => 'UPDATE',
            'log'     => $sql_log,
            'data'    => date("Y-m-d H:i:s")
        ];

        $this->Logs_model->cadastrar($dadosU);

        // 🔔 Mensagem de sucesso
        $this->session->set_flashdata('mensagem', 'Códigos atualizados com sucesso!');

        // ⚡ Volta para a mesma tela (mantém usuário nela)
        redirect('admin/codigos', 'refresh');
    }
}
