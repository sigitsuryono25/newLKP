<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_gallery
 *
 * @author Sigit Suryono
 */
class M_portofolio extends CI_Model {

    //put your code here

    function daftarPortofolioBy($idGallery) {
        return $this->db->get_where('portofolio', array('id' => $idGallery))->row();
    }

    function daftarGallery() {
        $query = "SELECT *, portofolio.id as id_portofolio FROM portofolio INNER JOIN kategori_portofolio ON portofolio.kategori=kategori_portofolio.id ORDER BY portofolio.id ASC LIMIT 8";
        return $this->db->query($query)->result();
    }

    function insertPortofolio($objectData) {
        $this->db->insert('portofolio', $objectData);
        return $this->db->affected_rows();
    }

    function editPortofolio($object, $condition) {
        $this->db->where($condition);
        $this->db->update('portofolio', $object);

        return $this->db->affected_rows();
    }

    function hapusPortofolio($condition) {
        $this->db->where($condition);
        $this->db->delete('portofolio');

        return $this->db->affected_rows();
    }

}
