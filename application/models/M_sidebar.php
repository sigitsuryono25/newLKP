<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_sidebar
 *
 * @author Sigit Suryono
 */
class M_sidebar extends CI_Model {

    //put your code here

    function getCountContent($idKelas) {
        $query = "SELECT COUNT(*) as jumlah FROM side_bar_info WHERE id_kelas='$idKelas'";
        return $this->db->query($query)->row();
    }

    function insertSideBar($objectData) {
        $this->db->insert('side_bar_info', $objectData);
        return $this->db->affected_rows();
    }

    function updateSideBar($objectData) {
        $this->db->where('id', '1');
        $this->db->update('side_bar_info', $objectData);
        return $this->db->affected_rows();
    }

    // function getSidebarInfor($judulSeo) {
    //     $query = "SELECT * FROM side_bar_info WHERE id_kelas=(SELECT id_kelas FROM kelas WHERE judul_seo='$judulSeo')";
    //     return $this->db->query($query)->row();
    // }
    function getSidebarInfor($judulSeo, $week) {
        return $this->db->query("SELECT id_kelas FROM kelas WHERE judul_seo='$judulSeo' LIMIT 1")->row();
        // return $this->db->query("SELECT * FROM `side_bar_info` "
        //                 . "INNER JOIN kelas ON side_bar_info.id_kelas=kelas.id_kelas "
        //                 . "INNER JOIN kategori_kelas ON kelas.id_kategori=kategori_kelas.id "
        //                 . "WHERE side_bar_info.id_kelas=(SELECT id_kelas FROM kelas WHERE judul_seo='$judulSeo' LIMIT 1) AND side_bar_info.day_or_end='$week'  LIMIT 1")->row();
    }

}
