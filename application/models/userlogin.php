<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userlogin extends CI_Model
{
 
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    public function validate_user($data) {
        $this->db->where('username', $data['username']);
        $this->db->where('password', $data['password']);
        return $this->db->get('customer')->row();
    }
 
    function __destruct() {
        $this->db->close();
    }
}