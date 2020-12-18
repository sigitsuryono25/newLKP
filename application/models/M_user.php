<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_user
 *
 * @author Sigit Suryono
 */
class M_user extends CI_Model{
    //put your code here
    
    function getCredentials($username){
        return $this->db->get_where('credentials', array("username" => $username))->result();
    }
    
    function registration($objectData){
        $this->db->insert('account', $objectData);
        return $this->db->affected_rows();
    }
    
    function getAccount($username){
         return $this->db->get_where('account', array("email" => $username));
    }
    
    function updateLastLogin($condition, $objectData){
        $this->db->where($condition);
        $this->db->update('account', $objectData);
        
        return $this->db->affected_rows();
    }
}
