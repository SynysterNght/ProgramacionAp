<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MainnVista
 *
 * @author Alejandro Dorado
 */
class MainnVista {
    //put your code here
    private $view;
    
    public function __construct() {
        $this->view = file_get_contents(__DIR__ . "/mainn.html");
    }
    
    function GetView(){
        return $this->view;
    }
    
}
