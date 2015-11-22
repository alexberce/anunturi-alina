<?php
class Upload extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Upload_model');
    }
    function do_upload(){
        $config['upload_path']='./uploads/';
        $config['allowed_types']='gif|jpg|png|jpeg|pdf';
        $this->load->library('upload',$config);
        if($this->upload->do_upload('files')){
            $data = array('upload_data' => $this->upload->data());
            $data_files=array(
               'path'=>$data['upload_data']['file_name'],
            );
            $this->Upload_model->setfiles($data_files);
            $this->load->database();
            $file_id=$this->db->insert_id();
            $photos['files'][]=array(
                'url'       =>'/uploads/' . $data['upload_data']['file_name'],
                'name'      => $data['upload_data']['file_name'],
                'file_id'   => $file_id
            );
            echo json_encode($photos);
        }
        else{
            
        }
    }
}
?>