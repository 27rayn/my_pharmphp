<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class before_shop extends CI_Controller {

    public function index() 
    {
        $this->load->view('before_shop/bsheader');
        $this->load->view('before_shop/bscontent');
        $this->load->view('before_shop/bsfooter');
    }
    
}