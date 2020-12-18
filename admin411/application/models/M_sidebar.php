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
    
    function daftarSidebar(){
        $query = "SELECT * FROM side_bar_info INNER JOIN kelas ON side_bar_info.id_kelas=kelas.id_kelas";
        return $this->db->query($query)->result();
    }
    
    function daftarSidebarsBy($idSidebar){
        $query = "SELECT * FROM side_bar_info WHERE id='$idSidebar'";
        return $this->db->query($query)->row();
    }
    
    function getDaftarSidebarsBy($idSidebar){
        $query = "SELECT * FROM side_bar_info WHERE id='$idSidebar'";
        return $this->db->query($query)->result();
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
    
    function updateSideBarData($objectData, $condition) {
        $this->db->where($condition);
        $this->db->update('side_bar_info', $objectData);
        return $this->db->affected_rows();
    }
    
    function hapusSideBar($condition) {
        $this->db->where($condition);
        $this->db->delete('side_bar_info');
        return $this->db->affected_rows();
    }

}
