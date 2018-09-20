<?php

require "Aplicacion.php";
$n=$_POST['f'];
$m=$_POST['c'];

$ejercicio=new Aplicacion($n, $m);

 $ejercicio->cargar();
 $ejercicio->mostrar();


