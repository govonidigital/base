<?php
Class Leads_model extends CI_Model{
    
    function lista(){
    
       $this ->db->select('*');
       $this ->db->from('leads');
       
       $qry = $this->db->get();
       return $qry->result();

    }
    
    
    function novo($data){

        $this->db->insert('leads',$data);
        return $this->db->insert_id();  

    }

    
    function edita($id,$data){

        $this->db->where('id_Lead', $id);
        $this->db->update('leads', $data);

        return true;  
        
    }
    
    function deleta($id){

        $this->db->where('id_Lead',$id);
        $this->db->delete('leads');
        
        return true;  

    }
    
    function ver($id){    

        $this->db->select('*');
        $this->db->from('leads');
        $this->db->where('id_Lead', $id);

        $qry = $this->db->get();
        
        return $qry->result();    
    } 
  
}