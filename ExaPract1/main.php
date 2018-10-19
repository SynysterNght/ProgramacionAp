<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'Arreglos.php';
require 'Matrices.php';


    $num= $_POST['n'];
    echo "111";
echo"<br>";
$prim=new Vec();
echo "222";
echo"<br>";
$fibs=new Vec($num);
echo "333";
echo"<br>";
$prim->criba();
echo "44";
echo"<br>";
 $fibs->fibbo();       
        
echo "55";
echo"<br>";


    
$a=new Mat($num);
$a->mprimos($prim);
$a->mostrar();
echo "<br><br><br><br>";

$b=new Mat($num);
        
echo "66";
echo"<br>";

$b->mfibbos($fibs);
        
echo "77";
echo"<br>";

$b->mostrar();
        
echo "88";
echo"<br>";

echo "<br><br><br><br>";

//$a=new VectorC($num);

    
    