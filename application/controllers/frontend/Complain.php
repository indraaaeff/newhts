<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Complain extends CI_Controller {

	function __construct(){  
    	parent::__construct();  
        $this->load->library(array('form_validation'));  
        $this->load->helper(array('url','form'));
        $this->load->model('modcomplain'); 
        if(empty($this->session->userdata('pid'))) {
          $this->session->set_flashdata('flash_data', '<div class="alert alert-danger"><strong>You dont have access !</strong></div>');
          redirect('home');
        }
    }
    public function index(){    
        $this->form_validation->set_rules('complain', 'COMPLAIN','required');  

        if($this->form_validation->run() == FALSE){  
        	$this->load->view('frontend/dashboard');  
        }else{  
        	$data = array(
			'pid' => $this->input->post('pid'),
			'complain' => $this->input->post('complain')
			);

			$this->modcomplain->add_complain($data);
			$this->session->set_flashdata('flash_data', '<div class="alert alert-success">Congratultaion ! Complain sent.</div>');
			// $data['username']   =       $this->input->post('username');
			// $data['password']   =       $this->input->post('password');  
   //      	$data['nama']  		=       $this->input->post('nama');  
   //          $data['email']      =       $this->input->post('email');    
   //          $this->u_account->register($data);  
   //          $data['message']    =       "Register Success";  
   //          $this->load->view('u_success',$data); 
			redirect('dashboard');
        }  
    }
}