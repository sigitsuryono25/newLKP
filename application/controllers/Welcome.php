<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (dirname(__FILE__) . "/Basecontroller.php");

class Welcome extends Basecontroller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        
        $kelas = $this->getContent("https://lauwba.com/webservices/get_kelas");
        $data['kelas'] = $kelas->data;
        $data['kelas_lain'] = $this->getContent("https://lauwba.com/webservices/get_kelas_lainnya/10");
        $data['testimoni']= $this->getContent("https://lauwba.com/webservices/testimoni?limit=6");
        $data['gallery'] = $this->getContent("https://lauwba.com/webservices/album?id[]=21&id[]=20&id[]=22&limit=6&order=id_gallery%20DESC");
        $data['portofolio'] = $this->getContent("https://lauwba.com/webservices/album?id[]=17&id[]=18&id[]=26&limit=6&order=id_gallery%20DESC");
        $this->load->view('welcome_message', $data);
    }

    public function team() {
        $this->load->view('headfoot/navbar');
        $data['team'] = $this->getContent("https://lauwba.com/webservices/get_team");
        $this->load->view('ourteam', $data);
        $this->load->view('headfoot/footer');
    }
    
    public function profile(){
        $this->load->view('headfoot/navbar');
        $data['profile'] = $this->M_profile->getProfile('profile');
        $this->load->view('profile', $data);
        $this->load->view('headfoot/footer');
    }
    public function course(){
        $this->load->view('headfoot/navbar');
        $kelas = $this->getContent("https://lauwba.com/webservices/get_kelas");
        $data['kelas'] = $kelas->data;
        $data['kelas_lain'] = $this->getContent("https://lauwba.com/webservices/get_kelas_lainnya/10");
        $data['testimoni']= $this->getContent("https://lauwba.com/webservices/testimoni?limit=6");
        $data['gallery'] = $this->getContent("https://lauwba.com/webservices/album?id[]=21&id[]=20&id[]=22&limit=6&order=id_gallery%20DESC");
        $data['portofolio'] = $this->getContent("https://lauwba.com/webservices/album?id[]=17&id[]=18&id[]=26&limit=6&order=id_gallery%20DESC");
        $this->load->view('course', $data);
        $this->load->view('headfoot/footer');
    }
    
    function register(){
//        $this->load->library('passwordhash');
//        $email = $this->input->post('email');
//        $password = $this->input->post('passwords');
//        $namaLengkap = $this->input->post('nama-lengkap');
//        $nomorTelepon = $this->input->post("nomor-telepon");
//        $alamat = $this->input->post('alamat');
//        
//        
//        $objectData = array(
//            'email' => $email,
//            'nama' => $namaLengkap,
//            'password' => $this->passwordhash->plainToHash($password),
//            'nomor_telepon' => $nomorTelepon, 
//            'alamat' => $alamat
//            );
//        $this->M_user->registration($objectData);
        $training = $this->getContent("https://lauwba.com/webservices/get_kelas?id[]=34&id[]=35&id[]=25&id[]=26&id[]=27");
        $data['training'] = $training->data;
        $this->load->view('page-register', $data);
    }
    
    function portolio(){
        $this->load->view('headfoot/navbar');
        $data['gallery'] = $this->getContent("https://lauwba.com/webservices/album?id[]=21&id[]=20&id[]=22&limit=6&order=id_gallery%20DESC");
        $data['portofolio'] = $this->getContent("https://lauwba.com/webservices/album?id[]=17&id[]=18&id[]=26&limit=6&order=id_gallery%20DESC");
        $this->load->view('portofolio', $data);
        $this->load->view('headfoot/footer');
    }

}
