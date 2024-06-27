<?php
Class Usuarios_model extends CI_Model{
    
    
    function loga($email, $senha){
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('email', $email);
        $this->db->where('senha', MD5($senha));
        $this->db->limit(1);
        
        $query = $this->db->get();
        $data = $query->row();
        
        if($query->num_rows() == 1){
            $this->session->set_userdata('logado', true);
            return $query->result();
        }else{
            return false;
        }
    }


    function lista(){

        $this->db->select('*');
        $this->db->from('usuarios');
        
        $qry = $this->db->get();

        return $qry->result();
        
    }
    

    function novo($data){

        $this->db->insert('usuarios',$data);
        return $this->db->insert_id();  

    }

    
    function edita($id_usuario,$dados){

        $this->db->where('id_usuario',$id_usuario);
        $this->db->update('usuarios',$dados);

    }
    
    
    function ver($id_usuario){

        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('id_usuario', $id_usuario);
        
        $qry = $this->db->get();

        return $qry->result();
        
    }


    function deleta($data){

        $this->db->where('id_usuario',$data);
        $this->db->delete('usuarios');
        
        return true;
        
    }
    
     
        
}