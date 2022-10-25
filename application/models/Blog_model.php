<?php
Class Blog_model extends CI_Model{
    
    function lista(){
    
       $this ->db->select('*');
       $this ->db->from('blog');
       $this ->db->order_by('nome');
       
       $qry = $this->db->get();
       return $qry->result();

    }
    
    
    function blog_novo($data){
        $this->db->insert('blog',$data);

        $retorno = array( 
            'id_blog'   => $this->db->insert_id(),
            'sql'         => $this->db->last_query()
        );

        return $retorno;  
    }
    
    function blog_edita_salva($id_blog,$data){
        $this->db->where('id_blog', $id_blog);
        $this->db->update('blog', $data);

        $retorno = array(  
            'sql'       => $this->db->last_query()
        );

        return $retorno;  
        
    }
    
    function blog_deleta($data){
        $this->db->where('id_blog',$data);
        $this->db->delete('blog');
        
        $retorno = array(  
            'sql'       => $this->db->last_query()
        );

        return $retorno;  
    }
    
    function ver($id_blog){    
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('id_blog', $id_blog);

        $qry = $this->db->get();
        
        return $qry->result();    
    } 
  
}