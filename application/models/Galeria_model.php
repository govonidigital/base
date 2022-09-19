<?php
Class Galeria_model extends CI_Model{

    function lista($ativo = ''){
        $this->db->select('*');
        $this->db->from('galeria');
        
        if ($ativo == 'SIM'){
            $this->db->where('ativo', 'SIM');
        }

        $this->db->order_by('galeria','ASC');

        $qry = $this->db->get();
        return $qry->result();
    }

        
    function ver($id_galeria){    
        $this->db->select('*');
        $this->db->from('galeria');
        $this->db->where('id_galeria', $id_galeria);
        
        $qry = $this->db->get();
        
        return $qry->result();    
    } 
    
    function novo($data){
        $this->db->insert('galeria',$data);

        $retorno = array( 
            'id_galeria'   => $this->db->insert_id(),
            'sql'         => $this->db->last_query()
        );

        return $retorno;  
    }
    
    function edita_salva($id_galeria,$data){
        $this->db->where('id_galeria', $id_galeria);
        $this->db->update('galeria', $data);

        $retorno = array(  
            'sql'       => $this->db->last_query()
        );

        return $retorno;  
        
    }
    
    function deleta($data){
        $this->db->where('id_galeria',$data);
        $this->db->delete('galeria');
        
        $retorno = array(  
            'sql'       => $this->db->last_query()
        );

        return $retorno;  
    }
}