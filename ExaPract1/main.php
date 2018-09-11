<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'Matrices.php';
require 'Arreglos.php';


    $num= $_POST['n'];
    
$prim=new Vec();
$fibs=new Vec($num);
$prim->criba();
 $fibs->fibbo();       
        


    
///$a=new Mat($num);
//$a->mprimos($prim);
//$a->mostrar();
echo "<br><br><br><br>";

$b=new Mat($num);
$b->mfibbos($fibs);

$b->mostrar();
echo "<br><br><br><br>";

//$a=new VectorC($num);

    
    