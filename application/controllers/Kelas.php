<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Kelas
 *
 * @author Sigit Suryono
 */
include_once (dirname(__FILE__) . "/Basecontroller.php");
class Kelas extends Basecontroller {

    //put your code here

    function detail_kelas($param) {
        $this->load->view('headfoot/navbar');
        $data['detail'] = $this->M_kelas->daftarKelasBy($param);
        $this->load->view('static_page', $data);
        $this->load->view('headfoot/footer');
    }

    function detail($param) {
        $this->load->view('headfoot/navbar');
        $condition = array("id"=> $param);
        $data['detail'] = $this->M_kategori->getWhereKategori($condition);
        $this->load->view('detail_kelas', $data);
        $this->load->view('headfoot/footer');
    }
    
    function detail_new($id){
        $this->load->view('headfoot/navbar');
        $kelas = $this->getContent("https://lauwba.com/webservices/get_kelas");
        $data['kelas'] = $kelas->data;
        $data['gallery'] = $this->getContent("https://lauwba.com/webservices/album?id[]=21&id[]=20&id[]=22&limit=6&order=id_gallery%20DESC");
        $data['portofolio'] = $this->getContent("https://lauwba.com/webservices/album?id[]=17&id[]=18&id[]=26&limit=6&order=id_gallery%20DESC");
        $data['testimoni']= $this->getContent("https://lauwba.com/webservices/testimoni?limit=6");
        $data['detail'] = $this->getContent("https://lauwba.com/webservices/get_detail_kelas?q=$id");
        $data['kelas_lain'] = $this->getContent("https://lauwba.com/webservices/get_kelas_lainnya/10");
        $this->load->view('static_page', $data);
        $this->load->view('headfoot/footer');
    }

}
