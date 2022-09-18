<?php
Class Galeria_fotos_model extends CI_Model{
    function lista_galeria_fotos($ativo = '', $id_galeria){
        $this->db->select('*');
        $this->db->from('galeria_fotos');
        $this->db->where('id_galeria', $id_galeria);
        
        if ($ativo == 'SIM'){
            $this->db->where('ativo', 'SIM');
        }

        $this->db->order_by('galeria','ASC');

        $qry = $this->db->get();
        return $qry->result();
    }

        
    function ver($id_galeria_fotos){    
        $this->db->select('*');
        $this->db->from('galeria_fotos');
        $this->db->where('id_galeria_fotos', $id_galeria_fotos);
        
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
    
    function galeria_fotos_edita_salva($id_galeria_fotos,$data){
        $this->db->where('id_galeria_fotos', $id_galeria_fotos);
        $this->db->update('galeria_fotos', $data);

        $retorno = array(  
            'sql'       => $this->db->last_query()
        );

        return $retorno;  
        
    }
    
    function galeria_fotos_deleta($data){
        $this->db->where('id_galeria_fotos',$data);
        $this->db->delete('galeria_fotos');
        
        $retorno = array(  
            'sql'       => $this->db->last_query()
        );

        return $retorno;  
    }
    
}
