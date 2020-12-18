<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pages
 *
 * @author Sigit Suryono
 */
class Pages extends CI_Controller {

    //put your code here
    function get_page($param = NULL, $params = NULL) {
        $this->load->view('headfoot/navbar');

        if ($param == "kat") {
            $data['detail'] = $this->M_kategori->getWhereKategori(array('judul_seo' => $params));
            $data['sidebar'] = NULL;
            $this->load->view('static_page', $data);
        } else {
            $data['detail'] = $this->M_kelas->daftarKelasBy($params);
            $data['weekday'] = $this->M_sidebar->getSidebarInfor($params, 0);
            $data['weekend'] = $this->M_sidebar->getSidebarInfor($params, 1);
            // print_r( $data['weekday']);
            $this->load->view('static_page', $data);
        }

        $this->load->view('headfoot/footer');
    }

}
