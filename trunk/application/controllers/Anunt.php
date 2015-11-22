<?php

class Anunt extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->data=array();
        $this->load->model('Anunt_model');
    }
    public function index($term = null, $page = null){
         
        if ($page === null)
            $page = 0;
        
        $search_input = $this->input->get('term');
        
        if ($term === null && $search_input != '')
            $term = $search_input;
        
        if ($term)
            $term = urldecode($term);
        
        $this->data['anunturi'] = $this->Anunt_model->view($term, $page);
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'anunt/page/';
        if ($term)
            $config['base_url'] = base_url() . 'anunt/term/' . $term . '/page/';
        
        $config['total_rows'] = $this->Anunt_model->count_anunturi($term);
        $config['per_page'] = 2; 
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config); 
        
        $this->data['view']='anunt_list';
        $this->load->view('layout',$this->data);
    }
    public function add(){
        $this->data['view']='anunt_add';
        $this->load->view('layout',$this->data);
        $this->form_validation->set_rules('bathrooms', 'Bathrooms', 'required');
        $data=array(
            'bathrooms'=>$this->input->post('bathrooms'),
            'rooms'=>$this->input->post('rooms'),
            'levels'=>$this->input->post('levels'),
            'surface'=>$this->input->post('surface'),
            'usable_surface'=>$this->input->post('usable_surface'),
            'land_surface'=>$this->input->post('land_surface'),
            'construction_year'=>$this->input->post('construction_year'),
            'price'=>$this->input->post('price'),
            'country'=>$this->input->post('country'),
            'county'=>$this->input->post('county'),
            'city'=>$this->input->post('city'),
            'details'=>$this->input->post('details'),
            'real_estate_type'=>$this->input->post('real_estate_type'),
            'type'=>$this->input->post('type'),
            'subdivision'=>$this->input->post('subdivision'),
            'subdivision_land'=>$this->input->post('subdivision_land'),
            'classification_land'=>$this->input->post('classification_land'),
            'comfort'=>$this->input->post('comfort'),
            'floor'=>$this->input->post('floor'),
            'extra_floors'=>$this->input->post('extra_floors'),
            'price_check'=>$this->input->post('price_check'),
            'upload_id' =>$this->input->post('file_id')
        );
        if($this->form_validation->run() === true){
            $this->Anunt_model->add($data);
        } 
    }
    public function view(){
        
    }
}