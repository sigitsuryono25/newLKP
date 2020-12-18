<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_kelas
 *
 * @author Sigit Suryono
 */
class M_kelas extends CI_Model {

    //put your code here

    function daftarKelasBy($idkelas) {
        // return $this->db->get_where('kelas', array('judul_seo' => $idkelas))->result();
        return $this->db->query("SELECT * FROM kelas WHERE judul_seo='$idkelas' LIMIT 1")->result();
    }

    function daftarKelas() {
        $query = "SELECT *,kelas.judul_seo as judul_seo_kelas, kelas.deskripsi as deskripsi_kelas, kelas.nama as nama_kelas 
        FROM kelas 
        INNER JOIN kategori_kelas ON kelas.id_kategori=kategori_kelas.id 
        WHERE kelas.id_kategori='2'
        GROUP BY kelas.id_kelas 
        ORDER BY kelas.id_konsentrasi DESC";
        
        return $this->db->query($query)->result();
    }

    function insertKelas($objectData) {
        $this->db->insert('kelas', $objectData);
        return $this->db->affected_rows();
    }

    function editKelas($object, $condition) {
        $this->db->where($condition);
        $this->db->update('kelas', $object);

        return $this->db->affected_rows();
    }

    function hapusKelas($condition) {
        $this->db->where($condition);
        $this->db->delete('kelas');

        return $this->db->affected_rows();
    }

}
