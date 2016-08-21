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
		$this->load->view('admin/update');
	}
	
	public function save_update()
	{
		$id['id_com'] = $this->input->post('id_com');
		$data = array(

			'pid' => $this->input->post('pid'),
			'complain' => $this->input->post('complain'),
			'status' => $this->input->post('status')
			);
		$this->amodcomplain->update_data($data,$id);
		$this->session->set_flashdata('flash_data', '<div class="alert alert-success">Data Saved.</div>');
		$this->load->view('admin/success');
	}
}