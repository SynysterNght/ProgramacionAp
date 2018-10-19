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
class Vec {
    private $tam;
    private $v=array();
    public function __construct($n=0){
        $this->tam=$n;
    }
    
    public function get($x){return $this->v[$x];}
    public function set($pos,$x){ $this->v[$pos]=$x;}
    
    
    
    
public function criba() {
    $this->tam=1000;
    $this->v[1]=true;
    $this->v[2]=true;
    $this->v[3]=true;
    
    for($i=4;$i<$this->tam;$i++){
        $this->v[$i]=true;
    
    }
    
    for($i=2;$i<$this->tam;$i++){
        for($j=$i+$i;$j<$this->tam;$j=$j+$i){
            $this->v[$j]=false;
            
        }
    }
    
    
    
    
    
}
    
public function fibbo() {
    $this->v[0]=0;
    $this->v[1]=1;
    for($i=2;$i<$this->tam;$i++){
    $this->v[$i]=$this->v[$i-1]+$this->v[$i-2];
    }
    
}
    
}
