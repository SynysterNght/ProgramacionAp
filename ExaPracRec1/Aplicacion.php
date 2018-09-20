<?php
  require "Arreglo.php";
require "Matriz.php";


class Aplicacion {
private $eje;
private $resultado;
private $primos;
public function __construct($n,$m) {
    $this->eje=new Matriz($n,$m);
     $t=$n*$m;
     $this->resultado= new Arreglo($t-1);
     $this->primos=new Arreglo();
     $this->primos->criba();
     echo $this->eje->columnas()."  ".$this->eje->filas();

}

/////////cargar/////
    public function cargar() {
        $imp=1;
        $flag =1;
        $ap=1;
        $pos=0;
           for($i=0;$i<$this->eje->filas();$i++){
           for($j=0;$j<$this->eje->columnas();$j++){
               if($flag==1){
               
                 $this->eje->set($i, $j, $imp);
                 $this->resultado->set($pos, $imp);
                 $imp=$imp+2;
                 $flag=0;
                 $pos++;
               }else{
                   while($this->primos->get($ap)!=true){
                       $ap++;
                   }
                 $this->eje->set($i, $j, $ap);  
                 if($ap!=2){$this->resultado->set($pos, $ap);$pos++;}  
                 $flag=1;
                   $ap++;
                   
               }
               
           }}
     
    }


    public function mostrar(){
        echo "MAtriz <br>";
        for($i=0;$i<$this->eje->filas();$i++){
           for($j=0;$j<$this->eje->columnas();$j++){
               echo "fila:" .$i . "  columna:".$j. "  valor:".$this->eje->get($i, $j);
               echo "<br>";
               
           }}
        
           echo "Vector<br>";
           for($i=0;$i<$this->resultado->tamano();$i++){
               echo "Posicion: ".$i."Valor: ". $this->resultado->get($i);
               echo"<br>";
               
               
               
           }
           
    }
}
