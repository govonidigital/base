<?php
Class Email_model extends CI_Model{
    
    
    function lista(){
    
       $this ->db->select('*');
       $this ->db->from('email');
       $qry = $this->db->get();

       return $qry->result();

    }
    
    function edita($data){

        $this->db->where('id_email', '1');
        $this->db->update('email', $data);

        $retorno = array(
            'sql'      => $this->db->last_query()
        );

        return $retorno;         
        
    }
    
    function mostra(){
        $this->db->select('*');
        $this->db->from('email');
        $this->db->limit(1);
        
        $qry = $this->db->get();
        return $qry->result();
    }

    function atualiza($id_email,$data){
        $this->db->where('id_email',$id_email);
        $this->db->update('email', $data);

        $retorno = array(
            'sql'      => $this->db->last_query()
        );

        return $retorno;         
    }
}