<?php
Class Noticias_model extends CI_Model{
    
    function lista(){
    
       $this ->db->select('*');
       $this ->db->from('noticias');
       $this ->db->order_by('nome');
       
       $qry = $this->db->get();
       return $qry->result();

    }
    
    
    function noticias_novo($data){
        $this->db->insert('noticias',$data);

        $retorno = array( 
            'id_noticia'   => $this->db->insert_id(),
            'sql'         => $this->db->last_query()
        );

        return $retorno;  
    }
    
    function noticias_edita_salva($id_noticia,$data){
        $this->db->where('id_noticia', $id_noticia);
        $this->db->update('noticias', $data);

        $retorno = array(  
            'sql'       => $this->db->last_query()
        );

        return $retorno;  
        
    }
    
    function noticias_deleta($data){
        $this->db->where('id_noticia',$data);
        $this->db->delete('noticias');
        
        $retorno = array(  
            'sql'       => $this->db->last_query()
        );

        return $retorno;  
    }
    
    function ver($id_noticia){    
        $this->db->select('*');
        $this->db->from('noticias');
        $this->db->where('id_noticia', $id_noticia);

        $qry = $this->db->get();
        
        return $qry->result();    
    } 
  
}