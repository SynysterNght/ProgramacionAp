<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vector
 *
 * @author adria
 */
class Vector {
    private $n;
    private $vec = array();
    
    public function __construct($a=0) {
        $this->n=$a;
    }
    public function __destruct() {
        
    }

    
    public function add($elem) {
        $this->vec[$elem]=$elem;
    }
    
    public function set($elem,$p) {
        $this->vec[$p]=$elem;
    }
    
    public function get($pos) {
        return ($this->vec[$pos]);
    }
    
    public function tam() {
        return ($this->n);
    }
    public function fibbo($n){
        $this->vec[0]=0;
        echo  "1 th Fibbo: ".$this->vec[0];
        echo '<br>';
        $this->vec[1]=1;
        echo "2 th Fibbo: ".$this->vec[1];
        echo "<br>";
        $a=2;
        while ($a<$n){
            $this->vec[$a]=$this->get($a-2)+$this->get($a-1);
            echo $a+1 ."th Fibbo: ".$this->vec[$a];
            echo "<br>";
            $a++;
        }
        
    }
    
    
    public function prim($n){
        $this->vec[0]=1;
        $aux=1;
        
        $this->vec[1]=1;
        echo "2 th Fibbo: ".$this->vec[1];
        echo "<br>";
        $a=2;
        while ($a<$n){
            $this->vec[$a]=$this->get($a-2)+$this->get($a-1);
            echo $a+1 ."th Fibbo: ".$this->vec[$a];
            echo "<br>";
            $a++;
        }
        
    }
    
    
}
