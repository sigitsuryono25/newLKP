<?php

class Basecontroller extends CI_Controller {

    function getContent($url, $willDecode = true) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);

        if ($willDecode) {
            return json_decode($result);
        } else {
            return $result;
        }
    }

}
