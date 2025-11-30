<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Layout_model');
        $this->load->helper('file');
    }

      private function verifica_sessao() {
        if (!$this->session->userdata('logado')) {
            redirect('admin/login', 'refresh');
        }
    }


    // -------------------------------
    // TELA DE CONFIGURAÇÃO DO ADMIN
    // -------------------------------
    public function index(){

        $this->load->library('base_admin');
		$data = $this->base_admin->site();

        
        $config = $this->Layout_model->get_config();

        // Se não existir config, cria objeto vazio para evitar erros na view
        if (!$config) {
            $config = (object)[
                'template'      => '',
                'cor_fundo'     => '',
                'cor_fonte'     => '',
                'cor_1'         => '',
                'cor_2'         => '',
                'cor_3'         => '',
                'cor_fonte_1'   => '',
                'cor_fonte_2'   => '',
                'cor_fonte_3'   => '',
                'fonte'         => '',
                'fonte_tamanho' => '',
                'logo_1'        => '',
                'logo_2'        => '',
                'favicon'       => ''
            ];
        }

        $data['config'] = $config;

        $this->template->load('admin/_template', 'admin/layout', $data);
    }

    // -------------------------------------
    // SALVAR CONFIGURAÇÕES E UPLOAD
    // -------------------------------------
    public function salvar()
    {
        $dados = [
            'template'      => $this->input->post('template'),
            'cor_fundo'     => $this->input->post('cor_fundo'),
            'cor_fonte'     => $this->input->post('cor_fonte'),
            'cor_1'         => $this->input->post('cor_1'),
            'cor_2'         => $this->input->post('cor_2'),
            'cor_3'         => $this->input->post('cor_3'),
            'cor_fonte_1'   => $this->input->post('cor_fonte_1'),
            'cor_fonte_2'   => $this->input->post('cor_fonte_2'),
            'cor_fonte_3'   => $this->input->post('cor_fonte_3'),
            'fonte'         => $this->input->post('fonte'),
            'fonte_tamanho' => $this->input->post('fonte_tamanho')
        ];

        // Lista dos 3 campos de imagem
        $imagens = ['logo_1', 'logo_2', 'favicon'];

        $this->load->library('upload');

        foreach ($imagens as $campo) {

            if (!empty($_FILES[$campo]['name'])) {

                $configUpload = [
                    'upload_path'   => './assets/img/layout/',
                    'allowed_types' => 'jpg|jpeg|png|webp|ico',
                    'max_size'      => 4096,
                    'encrypt_name'  => true,
                ];

                $this->upload->initialize($configUpload);

                if ($this->upload->do_upload($campo)) {
                    $dados[$campo] = $this->upload->data('file_name');
                }
            }
        }

        // Salva ou atualiza
        $this->Layout_model->salvar_config($dados);

        redirect('admin/layout');
    }

    // -------------------------------------
    // DELETAR IMAGEM
    // -------------------------------------
    public function deletar_imagem($campo)
    {
        $config = $this->Layout_model->get_config();

        if ($config && !empty($config->$campo)) {

            $arquivo = './assets/img/layout/' . $config->$campo;

            if (file_exists($arquivo)) {
                unlink($arquivo);
            }

            // limpa o campo no banco
            $this->Layout_model->salvar_config([$campo => '']);
        }

        redirect('admin/layout');
    }
}
