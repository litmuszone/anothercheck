<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
	
	function __construct(){
	parent::__construct();
	
	}
        
        public function fetch(){
            
            $query = $this->db->select('*')
                            ->from('states')
                            ->get();
            return $query->result();
                    
        }
        public function fetch_city($passed_id){
            
        $query =     $this->db->select('*')
                    ->from('city_list')
                //->join('state','state.name=city_list.state')
                ->where('city_id',$passed_id)
                    ->get();
            return $query->result();
//            print_r($query->result());
        }
}
