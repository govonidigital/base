<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout_model extends CI_Model {

    private $tabela = 'layout';

    public function __construct() {
        parent::__construct();
    }

    // -------------------------------------
    // BUSCA A CONFIGURAÇÃO (APENAS 1 REGISTRO)
    // -------------------------------------
    public function get_config()
    {
        $query = $this->db->get($this->tabela);
        return $query->row(); // retorna apenas 1 linha
    }

    // -------------------------------------
    // SALVAR OU ATUALIZAR A CONFIGURAÇÃO
    // -------------------------------------
    public function salvar_config($dados)
    {
        // Verifica se já existe um registro
        $query = $this->db->get($this->tabela);
        
        if ($query->num_rows() > 0) {
            // UPDATE
            return $this->db->update($this->tabela, $dados);
        } else {
            // INSERT
            return $this->db->insert($this->tabela, $dados);
        }
    }
}
