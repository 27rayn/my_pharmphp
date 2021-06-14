<!-- developed by iska -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beforelogin extends CI_Controller {

    public function index() 
    {
        $this->load->view('beforelogin/i_header');
        $this->load->view('beforelogin/i_content');
        $this->load->view('beforelogin/i_footer');
    }

    public function login()
    {
        $this->load->view('auth/login');
    }
    
}