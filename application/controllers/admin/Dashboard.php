<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){  
		parent::__construct();
		$this->load->database();
		$this->load->model('amodcomplain');
		if(empty($this->session->userdata('id'))) {
			$this->session->set_flashdata('flash_data', '<div class="alert alert-danger"><strong>You dont have access !</strong></div>');
			redirect('admin');
		}
    }

	public function index()
	{
		$this->data['posts'] = $this->amodcomplain->get_all();
		$this->load->view('admin/dashboard', $this->data);
		// $this->load->view('admin/dashboard');
	}

	public function edit($id_com) {  
 		$data['result'] 	= $this->amodcomplain->get_id_com($id_com)->row_array();  
 		$this->load->view('admin/update',$data);  
 	}  

 	public function get_username()
 	{

 	}

	public function logout() {
        $data = ['id', 'username'];
        $this->session->unset_userdata($data);
 
        redirect('admin');
    }
}