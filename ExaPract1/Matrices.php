<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VectorC
 *
 * @author adria
 */


class Mat {
    private $matriz = array();
    private $n;
    public function __construct($x=0) {
        $n=$x;
        for($i=0 ; $i<$n;$i++){
            $this->matriz[$i]=new Vec($x);
        }
    }
    public function set($pos,$ele){
        
        $this->matriz[$pos]=$ele;
        
    }
    
    public function mprimos($listaprimos){
        //$lim=$n*$n;
        $vprim=new Vec($this->n);
        
        $l=1;
           for($i=0;$i<$this->n;$i++){
            for($j=0;$j<$this->n;$j++){
                $f=false;
                while($f==false){
                    if($listaprimos->get($l)==true){
                        $f=true;
                        $listaprimos->set($l,FALSE);
                        
                    }else {$l++;}
                }
                $vprim->set($j, $l);
                $this->set($i, $vprim);
            }
               
           }
            
            
        
    }
    
    public function mfibbos($listafibbo){
        $vprim=new Vec($this->n);
        
        $l=0;
           for($i=0;$i<$this->n;$i++){
            for($j=0;$j<$this->n;$j++){
                $aux=$listafibbo->get($l);
                $vprim->set($j, $aux);
             $l++;   
            }
                $this->set($i, $vprim); 
           }
        
        
        
        
        
    }
    
    
    public function mostrar(){
        $vprim=new Vec($this->n);
        
        
           for($i=0;$i<$this->n;$i++){
            echo "1v";
               $vprim->get($i);
               for($j=0;$j<$this->n;$j++){
                $aux=$vprim->get($j);
                echo $aux."  ";
               
            }
            echo "<br>";  
           }
        
        
    }
    
    
    
}
