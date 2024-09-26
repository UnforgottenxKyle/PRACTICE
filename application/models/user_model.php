<?php 

class User_model extends CI_Model{
    
    public function insertUser($arraydata){
        
        // $this->db->query('insert into'); MANUAL QUERY COMMAND
        // $arraydata = array('first_name'=>$first_name,);
        // return $this->db->affected_rows();
        $this->db->insert('login', $arraydata);
        if($this->db->affected_rows() >= 0){
            return true;
        }else{
            return false;
        }
    }

    public function userLogin($firstname, $lastname){
        $this->db->where('first_name', $firstname, true);
        $this->db->where('last_name', $lastname, true);
        $query = $this->db->get('login');

        if($query->num_rows() == 1){
            return $this->db->row_array();
        } else {
            return false;
        }
    }

    public function fetchuser($id){
        $this->db->where('id',$id);
        $query = $this->db->get('login')->result_array();
        // select * from login where id = ?
        // limit 1 row_array
        // all result result array
        return $query;

    }

    public function updateUser($id,$arraydata){
        
        $this->db->where('id', $id);        
        $this->db->update('login',$arraydata);

        
    }
}