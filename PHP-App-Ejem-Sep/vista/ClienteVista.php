<?php

class ClienteVista {
    //private $keys;
    private $view;
    
    public function __construct() {        
        $this->view = file_get_contents(__DIR__ . "/ClienteForm.php");
        
    }
    
    function getView() {
        return $this->view;
    }


}