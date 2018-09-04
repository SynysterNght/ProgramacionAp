<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of num
 *
 * @author xxped
 */
class num {
    private $num;
    
    public function set($x){
        $this->num=$x;}
    public function get(){ return $this->num;}
    
public function __construct($x) {
    $this->num=$x;
}
public function dig() {
    $a=$this->get();
    $c=0;
    while($a>0){
        $c++;
        $a=intval($a/10);
    }
    return $c;
}

public function invertir() {
    $x=$this->get();
    $r=0;
    while($x>0){
        $r=$r*10+$x%10;
        $x=intval($x/10);
    }
    return $r;
    
}
public function fibbo($i){
        
        $f=false;
        $r =1;
                $x=0;
    while($i<50){
        $i=$i+1;
        if($f==true){
            echo $i. 'th fibbo  :____'  .$r . '<br>';
        $r=$r+$x;
        $f=false;
        }
        else {
            echo $i. 'th fibbo :____'  .$x . '<br>';
            $x=$x+$r;
            $f=true;
        }
        
    }
    }
    
}
