<?php
class Account_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function register($data){
        return $this->db->insert('users',$data);
    }
    public function login($username, $password){
        $this->db->select('*')->from('users');
        $this->db->where('password', $password);
        $this->db->where('username', $username);
        $this->db->or_where('email',$username);
        $query = $this->db->get();
       
        return $query->row_array();
    }
}
?>