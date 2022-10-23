<?php
Class Login_model extends CI_Model{
    
    
    function loga($email, $senha){
        $this->db->select('*');
        $this->db->from('login');
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
    
    function cadastro($dados){

        $this->db->insert('login', $dados);

        return true;
        

    }
    function inclui($data){
        $this->db->insert('login',$data);

        $retorno = array( 
            'id_login'   => $this->db->insert_id(),
            'sql'         => $this->db->last_query()
        );

        return $retorno;  

    }
    
    function edita($id_login,$dados){
        $this->db->where('id_login',$id_login);
        $this->db->update('login',$dados);
    }
    
    function consulta($email){
        
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('email', $email);

        $this->db->limit(1);
        
        $query = $this->db->get();
        $data = $query->row();

        if($query->num_rows() == 1){
            return $data;
        }else{
            return false;
        }
    }
    
    
    
    function mostra($id_login){
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('id_login', $id_login);
        $this->db->limit(1);
        
        $qry = $this->db->get();

        if($qry->num_rows() == 1){
            return $qry->result();
        }else{
            return false;
        }
    }
    
    function compara($email){
        $this->db->select('id_login');
        $this->db->from('login');
        $this->db->where('email', $email);
        $this->db->limit(1);
        
        $qry = $this->db->get();

        return $qry->result();
    }
    
    function compara_admin($email){
        $this->db->select('id_usuario');
        $this->db->from('login');
        $this->db->where('email', $email);
        $this->db->limit(1);
        
        $qry = $this->db->get();

        return $qry->result();
    }
    
    function nova_senha($id_login,$data){
        $this->db->where('id_login',$id_login);
        $this->db->update('login',$data);
    }
     
        
}