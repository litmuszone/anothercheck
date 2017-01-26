<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
    
    public function __construct(){
        
        parent::__construct();
         $this->load->model('Login_model');
    
       }
	public function fetching()
	{
           
            $data['fetching'] = $this->Login_model->fetch();
            $this->load->view('dropdown',$data);
	}
        
        public function fetch_city(){
           $get_city = $this->input->post('id');
           $data = $this->Login_model->fetch_city($get_city);
          // print_r($data);
           $output = NULL;
           foreach($data as $city){
            
           // print_r($city);
             $output .="<option value='".$city->city_id."'>". $city->city_name."</option>";
           }
           //return "<option>"  $data->state; "</option>"; 
            echo $output;
        }
        
        
}
