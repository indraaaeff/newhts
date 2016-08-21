<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Login.php
 * @author Imron rosdiana
 */
class Admin_login extends CI_Controller
{
   
    function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation'));  
        $this->load->helper(array('url','form'));
        $this->load->model("adminlogin",'admin_login');
        if(!empty($_SESSION['id']))
            redirect('admin/dashboard');
    }
    
    public function index() {
        if($_POST) {
            $result = $this->admin_login->validate_admin($_POST);
            if(!empty($result)) {
                $data = [
                'id' => $result->id,
                'username' => $result->username
                ];
                
                $this->session->set_userdata($data);
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('flash_data', '<div class="alert alert-danger">Username or Password is wrong.</div>');
                redirect('admin');
            }
        }
        
        $this->load->view("admin/home");
    }
}