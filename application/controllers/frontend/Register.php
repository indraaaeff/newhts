<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
	function __construct(){  
    	parent::__construct();  
        $this->load->library(array('form_validation'));  
        $this->load->helper(array('url','form'));
        $this->load->model('add_customer'); 
    }
    public function index(){    
        $this->form_validation->set_rules('username', 'USERNAME','required');  
        $this->form_validation->set_rules('password','PASSWORD','required');  
 
        if($this->form_validation->run() == FALSE){  
        	$this->load->view('frontend/register');  
        }else{  
        	$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email')
			);

			$this->add_customer->register($data);
			$this->session->set_flashdata('flash_data', '<div class="alert alert-success">Congratultaion ! Account created.</div>');
			// $data['username']   =       $this->input->post('username');
			// $data['password']   =       $this->input->post('password');  
   //      	$data['nama']  		=       $this->input->post('nama');  
   //          $data['email']      =       $this->input->post('email');    
   //          $this->u_account->register($data);  
   //          $data['message']    =       "Register Success";  
   //          $this->load->view('u_success',$data); 
			redirect('home');
        }  
    }
}