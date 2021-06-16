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
            $this->_login();
        }
    }

        private function _login()
        {
            $email =  $this->input->post('email');
            $password =  $this->input->post('Password');

            $user = $this->db->get_where('user', ['email' => $email])->row_array();
            
            if($user){ //ada user
                //if user active
                if($user['is_active'] == 1){
                   //cek password
                   if(password_verify($password, $user['password'])){
                    $data = [
                        'email' => $user['email'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    redirect('afterlogin');
                   }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong password</div>');
                    redirect('Auth');
                   }
                    
                }else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Your email has not been activated</div>');
                    redirect('Auth');
                }
                
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email ga terdaftar</div>');
                redirect('Auth');
            }
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
                'password'=> password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
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
