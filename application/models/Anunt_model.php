<?php
    class Anunt_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->data=array();
            
        }
        public function add($data){
            $this->db->insert('anunturi',$data);  
        }
        public function view($term = null, $page = null){
            $this->db->select('*')->from('anunturi');
            $this->db->join('uploads','anunturi.upload_id=uploads.id','left');
            
            if($term !== null)
            {
                $this->db->like('anunturi.type',$term);
                $this->db->or_like('anunturi.details',$term);
                $this->db->or_like('anunturi.price',$term);
            }
            
            if($page !== null)
                $this->db->limit(2,$page);
            
            $this->db->order_by('anunturi.id', 'ASC');
            $query=$this->db->get();
            return $query->result();
        }
        
        public function count_anunturi($term = null){
            $this->db->select('count(*) as total_anunturi')->from('anunturi');
            
            if($term !== null)
            {
                $this->db->like('anunturi.type',$term);
                $this->db->or_like('anunturi.details',$term);    
                $this->db->or_like('anunturi.price',$term);    
            }
            $query = $this->db->get();
            return $query->row()->total_anunturi;
        }
    }

?>