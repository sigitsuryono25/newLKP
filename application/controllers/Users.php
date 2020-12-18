<?php



class Users extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        // if(!$this->session->has_userdata('email')){
        //     redirect('log/!#signin');
        // }
    }
    
    public function signin(){
        date_default_timezone_set('Asia/Bangkok');
        $this->load->library('passwordhash');
        $username = $this->input->post('username');
        $plainText = $this->input->post('password');
        
        $data = $this->M_user->getAccount($username)->result();
        $hash = $data[0]->password;
        
        $isMatch = $this->passwordhash->checkHashIsValid($plainText, $hash);
        
        if ($isMatch) {
            $sessionData = array('email' => $data[0]->email, 'nama' => $data[0]->nama);
            $this->session->set_userdata($sessionData);
            $conditions = array('email' => $username);
            $objectData = array('last_login' => date('Y-m-d H:i:s'));

            $this->M_user->updateLastLogin($conditions, $objectData);
            
            redirect('dashboard/!#welcome');
        } else {
            echo "<script type='text/javascript'>";
            echo "	alert('Login Gagal');";
            echo "	window.location.assign('".site_url('log/!#signin')."')";
            echo "</script>";
        }
    }
    
    public function dash(){
        date_default_timezone_set('Asia/Bangkok');
        $this->load->view('headfoot/navbar');
        $data['data'] = $this->M_user->getAccount($this->session->userdata('email'))->row();
        $this->load->view('user/home', $data);
        $this->load->view('headfoot/footer');
    }
    
    public function online_course(){
        
    }
    
    public function materi(){
        
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('home/!#home');
    }
}