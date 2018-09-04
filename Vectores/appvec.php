<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$num = $_POST['numero'];
echo "numero es  ".$num;
echo "<br>";
require 'Vector.php';
$v= new Vector();
//echo "Capacidad : ".$v->tam();
$v->fibbo($num);

echo "<br><Br>";



