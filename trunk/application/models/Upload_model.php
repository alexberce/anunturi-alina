<?php
class Upload_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function setfiles($data_files){
        $this->db->insert('uploads',$data_files);
    }
}


?>