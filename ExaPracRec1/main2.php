<?php

  require "Arreglo.php";
require "Matriz.php";
$n=$_POST['f'];
$m=$_POST['c'];

    $eje=new Matriz($n,$m);
     $t=$n*$m;
     $resultado= new Arreglo($t-1);
     $primos=new Arreglo();
     $primos->criba();
     echo $eje->columnas()."  ".$eje->filas();
echo $n."  ".$m;
echo $resultado->tamano();



/////////cargar/////
        $imp=1;
        $flag =1;
        $ap=1;
        $pos=0;
           for($i=0;$i<$eje->filas();$i++){
           for($j=0;$j<$eje->columnas();$j++){
               if($flag==1){
               
                 $eje->set($i, $j, $imp);
                 $resultado->set($pos, $imp);
                 $imp=$imp+2;
                 $flag=0;
                 $pos++;
               }else{
                   while($primos->get($ap)!=true){
                       $ap++;
                   }
                 $eje->set($i, $j, $ap);  
                 if($ap!=2){$resultado->set($pos, $ap); $pos++;}  
                 $flag=1;
                 
                 $ap++;  
                   
               }
               
           }}
     
    


        echo "MAtriz <br>";
        for($i=0;$i<$eje->filas();$i++){
           for($j=0;$j<$eje->columnas();$j++){
               echo "fila:" .$i . "  columna:".$j. "  valor:".$eje->get($i, $j);
               echo "<br>";
               
           }}
        
           echo "Vector<br>";
           for($i=0;$i<$resultado->tamano();$i++){
               echo "Posicion: ".$i."Valor: ". $resultado->get($i);
               echo"<br>";
               
               
               
           }
           
    
