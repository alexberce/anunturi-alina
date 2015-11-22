<?php
class Account extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function login(){
        $this->data['view']='login_register';
        $this->load->view('layout',$this->data);
    }
}
?>