<?php
Class Codigos_model extends CI_Model{
    
    function mostra(){
        $this->db->select('*');
        $this->db->from('codigos');
        $this->db->limit(1);
        
        $qry = $this->db->get();
        return $qry->result();
    }
    
    function atualiza($id_codigo,$data){
        $this->db->where('id_codigo',$id_codigo);
        $this->db->update('codigos', $data);

        $retorno = array(
            'sql'      => $this->db->last_query()
        );

        return $retorno;         
    }

}