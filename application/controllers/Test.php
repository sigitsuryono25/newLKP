<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Test
 *
 * @author Sigit Suryono
 */
class Test extends CI_Controller{
    //put your code here
    
    function index() {
        $this->load->view('test');
    }
}
