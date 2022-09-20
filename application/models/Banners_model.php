<?php
Class Banners_model extends CI_Model{
    
    function lista($ativo = ''){
    
       $this ->db->select('*');
       $this ->db->from('banners');

       if($ativo != ''){
            $this->db->where('ativo',$ativo);
       }
       
       $qry = $this->db->get();
       return $qry->result();

    }
    
    function mostra_logo($id_banner){
        $this->db->select('logo');
        $this->db->from('banners');
        $this->db->where('banner.id_banner',$id_banner);
        
        $qry = $this->db->get();
        $retorno = $qry->row();  
        
        return $retorno->logo;
    }
    
    function banners_novo($data){
        $this->db->insert('banners',$data);

        $retorno = array( 
            'id_banner'   => $this->db->insert_id(),
            'sql'         => $this->db->last_query()
        );

        return $retorno;  
    }
    
    function banners_edita_salva($id_banner,$data){
        $this->db->where('id_banner', $id_banner);
        $this->db->update('banners', $data);

        $retorno = array(  
            'sql'       => $this->db->last_query()
        );

        return $retorno;  
        
    }
    
    function banners_deleta($data){
        $this->db->where('id_banner',$data);
        $this->db->delete('banners');
        
        $retorno = array(  
            'sql'       => $this->db->last_query()
        );

        return $retorno;  
    }
    
    function ver($id_banner){    
        $this->db->select('*');
        $this->db->from('banners');
        $this->db->where('id_banner', $id_banner);

        $qry = $this->db->get();
        
        return $qry->result();    
    } 
  
}