<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MainnVista {
    //private $keys;
    private $view;
    
    public function __construct() {
        $this->view = file_get_contents(__DIR__ . "/mainn.html");
    }
    
    function getView() {
        return $this->view;
    }
}
