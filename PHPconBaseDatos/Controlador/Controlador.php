<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controlador
 *
 * @author Alejandro Dorado
 */
require_once __DIR__.'/../Vista/MainnVista.php';

class Controlador {
    //put your code here
    private $vista;
    private $render;
    
    public function __construct() {
        $this->vista = new MainnVista();
    }
    
    public function load(){
        $html = $this->vista->GetView();
        $this->render = str_replace("", "", $html);
    }
    
    public function render(){
        echo $this->render;
    }
    
}
