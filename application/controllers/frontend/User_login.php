<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Login.php
 * @author Imron rosdiana
 */
class User_login extends CI_Controller
{
   
    function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation'));  
        $this->load->helper(array('url','form'));
        $this->load->model("userlogin",'user_login');
        if(!empty($_SESSION['pid']))
            redirect('dashboard');
    }
    
    public function index() {
        if($_POST) {
            $result = $this->user_login->validate_user($_POST);
            if(!empty($result)) {
                $data = [
                'pid' => $result->pid,
                'username' => $result->username
                ];
                
                $this->session->set_userdata($data);
                redirect('dashboard',$data);

            } else {
                $this->session->set_flashdata('flash_data', '<div class="alert alert-danger">Username or Password is wrong.</div>');
                redirect('home');
            }
        }
        
        redirect("home");
    }
}