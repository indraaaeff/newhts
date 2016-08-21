<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api extends CI_Controller {

		function __construct(){  
		parent::__construct();
		// $this->load->model('customerAPI');
    }


	public function customer()
	{
		$q = $this->db->get('customer');
		echo json_encode($q->result_array());
	}

	public function complain()
	{
		$q = $this->db->get('complain');
		echo json_encode($q->result_array());
	}
}