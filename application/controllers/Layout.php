<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Layout_model');
    }

    public function index() {

        $config = $this->Layout_model->get_config();

        // Se não existir registro no banco, cria valores padrão
        if (!$config) {
            $config = (object)[

                'template' => '',
                'cor_fundo' => '',
                'cor_fonte' => '',
                'cor_1' => '',
                'cor_2' => '',
                'cor_3' => '',
                'cor_fonte_1' => '',
                'cor_fonte_2' => '',
                'cor_fonte_3' => '',               
                'fonte' => '',
                'fonte_tamanho' => '',
                'logo_1' => '',
                'logo_2' => '',
                'favicon' => ''      
                
            ];
        }

        $data = [

            'template' => $config->template,
            'cor_fundo' => $config->cor_fundo,
            'cor_fonte' => $config->cor_fonte,
            'cor_1' => $config->cor_1,
            'cor_2' => $config->cor_2,
            'cor_3' => $config->cor_3,
            'cor_fonte_1' => $config->cor_fonte_1,
            'cor_fonte_2' => $config->cor_fonte_2,
            'cor_fonte_3' => $config->cor_fonte_3,               
            'fonte' => $config->fonte,
            'fonte_tamanho' => $config->fonte_tamanho,
         
            // IMAGENS
            'logo_1' => $config->logo_1,
            'logo_2' => $config->logo_2,
            'favicon' => $config->favicon
           
        ];

        // Carrega a view dinâmica
        $this->load->view("layout/" . $config->view, $data);
    }
}
