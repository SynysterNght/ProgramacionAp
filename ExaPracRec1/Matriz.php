<?php

class Matriz {
    private $mat=array();
    private $x;
    private $y;
    public function __construct($n=0,$m=0) {
        $this->x=$n;
        $this->y=$m;
    }
    
    public function set($n,$m,$v) {
        $this->mat[$n][$m]=$v;
    }
    
    public function filas(){return $this->x;}
    public function columnas(){return $this->y;}
    


    public function get($n,$m) {
        return $this->mat[$n][$m];
    }
    
    
    
    //put your code here
}
