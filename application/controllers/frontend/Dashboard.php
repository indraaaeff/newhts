<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){  
		parent::__construct();
		$this->load->database();
		$this->load->model('modcomplain');
		if(empty($this->session->userdata('pid'))) {
			$this->session->set_flashdata('flash_data', '<div class="alert alert-danger"><strong>You dont have access !</strong></div>');
			redirect('home');
		}
    }

	public function index()
	{
		$this->data['posts'] = $this->modcomplain->get_comp();
		$this->load->view('frontend/dashboard', $this->data);
		// $this->load->view('frontend/dashboard');
	}

	public function logout() {
        $data = ['pid', 'username'];
        $this->session->unset_userdata($data);
 
        redirect('home');
    }
}