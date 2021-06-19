<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class before_cart extends CI_Controller {

    public function index() 
    {
        $this->load->view('before_cart/i_cartpage');
    }
    
}