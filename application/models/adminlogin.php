<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminlogin extends CI_Model
{
 
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    public function validate_admin($data) {
        $this->db->where('username', $data['username']);
        $this->db->where('password', $data['password']);
        return $this->db->get('admin')->row();
    }
 
    function __destruct() {
        $this->db->close();
    }
}