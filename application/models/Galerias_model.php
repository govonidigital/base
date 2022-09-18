<?php
Class Galerias_model extends CI_Model{

    function lista_galerias($ativo = ''){
        $this->db->select('*');
        $this->db->from('galerias');
        
        if ($ativo == 'SIM'){
            $this->db->where('ativo', 'SIM');
        }

        $this->db->order_by('galeria','ASC');

        $qry = $this->db->get();
        return $qry->result();
    }

        
    function ver($id_galeria){    
        $this->db->select('*');
        $this->db->from('galerias');
        $this->db->where('id_galeria', $id_galeria);
        
        $qry = $this->db->get();
        
        return $qry->result();    
    } 
    
    function galerias_novo($data){
        $this->db->insert('galerias',$data);

        $retorno = array( 
            'id_galeria'   => $this->db->insert_id(),
            'sql'         => $this->db->last_query()
        );

        return $retorno;  
    }
    
    function galerias_edita_salva($id_galeria,$data){
        $this->db->where('id_galeria', $id_galeria);
        $this->db->update('galerias', $data);

        $retorno = array(  
            'sql'       => $this->db->last_query()
        );

        return $retorno;  
        
    }
    
    function galerias_deleta($data){
        $this->db->where('id_galeria',$data);
        $this->db->delete('galerias');
        
        $retorno = array(  
            'sql'       => $this->db->last_query()
        );

        return $retorno;  
    }
}
