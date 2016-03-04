<?php
class Account extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Account_model');
    }
    public function login(){
        $username = $this->input->post('username_login');
        $password = $this->input->post('password_login');
        $this->form_validation->set_rules('username_login', 'Username', 'required');
        $this->form_validation->set_rules('password_login', 'Password', 'required|md5');
        if($this->form_validation->run() == true){
            $user = $this->Account_model->login($username, md5($password));
            
            if($user){
                $userdata = array(
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'id' => $user['id'],
                    'loggedIn' => true
                );
                $this->session->set_userdata($userdata);
            }
        }
        $this->data['view']='login_register';
        $this->load->view('layout',$this->data);
        
    }
    public function register(){
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $r_password = $this->input->post('r_password');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[r_password]|md5');
        $this->form_validation->set_rules('r_password', 'Confirmation Password', 'required');
        if($this->form_validation->run() == true){
            $data = array(
                'email' => $email,
                'username' => $username,
                'password' => md5($password),
            );
            $register = $this->Account_model->register($data);
            if($register){
                $user = $this->Account_model->login($username,md5($password));
                if($user){
                    $userdata = array(
                        'username' => $user['username'],
                        'email' => $user['email'],
                        'id' => $user['id'],
                        'loggedIn' => true
                    );
                    $this->session->set_userdata($userdata);
                    $this->data['message'] = 'Register successfuly';
                }
            }
        }
        $this->data['view']='login_register';
        $this->load->view('layout',$this->data);
        
    }
    public function logout(){
        session_destroy();
        redirect('/account/login','location');
    }
}
?>