<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_kategori
 *
 * @author Sigit Suryono
 */
class M_kategori extends CI_Model {

    //put your code here
    function getKategori() {
        return $this->db->get('kategori_kelas')->result();
    }
    
    function getWhereKategori($condition) {
        return $this->db->get_where('kategori_kelas', $condition)->result();
    }

    function getPosisi() {
        return $this->db->get('posisi')->result();
    }

    function getKategoriGallery() {
        return $this->db->get('kategori_gallery')->result();
    }

    function getKategoriPortofolio() {
        return $this->db->get('kategori_portofolio')->result();
    }

    function tambahKategori($tabel, $objectData) {
        $this->db->insert($tabel, $objectData);

        return $this->db->affected_rows();
    }

    function getKategoriforInfront() {
//        $query = "SELECT *, kelas.deskripsi as description FROM kelas INNER JOIN kategori_kelas ON kelas.id_kategori=kategori_kelas.id GROUP BY kelas.id_kategori";
        $query = "SELECT *, nama as nama_kategori FROM kategori_kelas WHERE id <> '2' ORDER BY nama DESC LIMIT 4 ";
        $result = $this->db->query($query);
        
        return $result->result();
    }

}
