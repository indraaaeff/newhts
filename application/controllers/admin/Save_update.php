<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

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
		
		$this->load->view('admin/success');
	}
	
}