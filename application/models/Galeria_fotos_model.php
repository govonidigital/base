<?php
Class Galeria_fotos_model extends CI_Model{

    function lista_galeria_fotos($id_galeria){
        $this->db->select('*');
        $this->db->from('galeria_fotos');
        $this->db->where('id_galeria', $id_galeria);
        

        $qry = $this->db->get();
        return $qry->result();
    }

        
    function ver($id_galeria_foto){    
        $this->db->select('*');
        $this->db->from('galeria_fotos');
        $this->db->where('id_galeria_foto', $id_galeria_foto);
        
        $qry = $this->db->get();
        
        return $qry->result();    
    } 
    
    function galeria_fotos_novo($data){
        $this->db->insert('galeria_fotos',$data);

        $retorno = array( 
            'id_banner'   => $this->db->insert_id(),
            'sql'         => $this->db->last_query()
        );

        return $retorno;  
    }
    
    function galeria_fotos_edita_salva($id_galeria_foto,$data){
        $this->db->where('id_galeria_foto', $id_galeria_foto);
        $this->db->update('galeria_fotos', $data);

        $retorno = array(  
            'sql'       => $this->db->last_query()
        );

        return $retorno;  
        
    }
    
    function galeria_fotos_deleta($data){
        $this->db->where('id_galeria_foto',$data);
        $this->db->delete('galeria_fotos');
        
        $retorno = array(  
            'sql'       => $this->db->last_query()
        );

        return $retorno;  
    }
    
}
