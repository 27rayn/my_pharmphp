<!-- Developed by Saharuddin and Rayyan -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        
    }
    public function index()
    {
        $this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('Password','Password', 'trim|required');
        
        if($this->form_validation->run()==false){
            
            $this->load->view('auth/login');
        } 
        else{
            // Validasi
            

        }


        // redirect('Auth');
        
    }
    
    public function register()
    {
        $this->form_validation->set_rules('firstname', 'Full name', 'required|trim', 
        ['required' => 'Even a robot has a name, bro!']);
        $this->form_validation->set_rules('lastname', 'last name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]'
        ,['is_unique' => 'email udah terdaftar']);
        
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]
        |max_length[12]|matches[password2]',['matches' => 'password tidak sama']);

        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]',
        ['required' => 'Password harus diisi']);

        if( $this->form_validation->run() == false)
        {
             $this->load->view('auth/register');
        } else {
            
            $data = [
                'firstname' => htmlspecialchars($this->input->post('firstname', true)),
                'lastname' => htmlspecialchars($this->input->post('lastname', true)),
                'email' => $this->input->post('email'),
                'image' => 'default.jpg',
                'password'=> md5($this->input->post('password1')),
                'role' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Sudah terdaftar, udah bisa beli obat. Lekas sembuh, anak.</div>');
            redirect('Auth');
        }
    }
}
