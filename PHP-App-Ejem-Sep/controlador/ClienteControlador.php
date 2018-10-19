<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*/
 echo "<html lang='es'>" ;

$idCliente      = $_POST['idCliente'];
$nombre         = $_POST['nombre'];
$nit            = $_POST['nit'];
$tel            = $_POST['tel'];
$email          = $_POST['email'];
$edad           = $_POST['edad'];
 
require_once __DIR__ . '/../modelo/ClienteModelo.php';

$ObjCli = new ClienteModelo();

if (isset($_POST['btn_listar'])) {
      $rows = $ObjCli->obtenerTodos();
      mostrar($rows);
}
      
      
function mostrar($rows=""){    
    echo "<table width='75%' border='5' align='center' cellspacing='5' bordercolor='#000000' bgcolor='#FFCC99'>";
    echo "<caption><h1>Listado de clientes</caption>";
    echo "<tr>";
    echo "<th>IdCliente</th>";
    echo "<th>Nombre y apellido</th>";
    echo "<th>NIT</th>";
    echo "<th>Telefono 3</th>";
    echo "<th>Email</th>";
    echo "<th>Edad</th>";
    echo "</tr>";
    while ($fila = $rows->fetch_row()) {
        echo "<tr>";
        echo "<td> <center>".$fila[0]."</center></td>"; 
        echo "<td>".$fila[1]."</td>";
        echo "<td>".$fila[2]."</td>";
        echo "<td>".$fila[3]."</td>";
        echo "<td>".$fila[4]."</td>";
        echo "<td> <center>".$fila[5]."</td>";
        echo "</tr>";
    }    
    echo " </table>";
}




if (isset($_POST['btn_adicionar'])) {
    echo "<br>Presiono el boton Adicionar";
    if($nombre==""){
        echo "<br>Debe introducir nombre.. MO SE ADICIONO";
    } else {
        $ObjCli->setNombre($nombre);
        $ObjCli->setNit($nit);
        $ObjCli->setTelefono($tel);
        $ObjCli->setEmail($email);
        $ObjCli->setEdad($edad);
        
        $ObjCli->adicionar(); 
    }    
}


if (isset($_POST['btn_modificar'])) {
    echo "<br>Presiono el boton Modificar";
    if($idCliente==0){
        echo "<br>Debe introducir idCliente.. MO SE MODIFICO";
    } else {
        $ObjCli->setNombre($nombre);
        $ObjCli->setNit($nit);
        $ObjCli->setTelefono($tel);
        $ObjCli->setEmail($email);
        $ObjCli->setEdad($edad);
        $ObjCli->modificar($idCliente); 
    }
}

if (isset($_POST['btn_buscar'])) {
    if ($idCliente == 0) {
        echo "<br>Debe introducir idCliente a buscar";
    } else {
        $rows = $ObjCli->obtenerCliente($idCliente);
        mostrar($rows);
    }
}

if (isset($_POST['btn_borrar'])) {
    echo "<br>Presiono el boton borrar";
    $rows = $ObjCli->borrarCliente($idCliente);   
}
if(isset($_POST['btn_Estadistica'])){
    echo "debuggeo";
    
    
    mostrarest($ObjCli->estadistica(), $ObjCli->menor(),$ObjCli->mayor(), $ObjCli->pmedio(),$ObjCli->pmayor(),$ObjCli->pmenor());
    
}  
function mostrarest($medio = "", $menor="",$mayor="",$pmedio="", $pmayor="",$pmenor=""){
    
    $may=$mayor->fetch_row();
    $men=$menor->fetch_row();
    $med=$medio->fetch_row();
    
    $pmay=$pmayor->fetch_row();
    $pmen=$pmenor->fetch_row();
    $pmed=$pmedio->fetch_row();
    
    echo "<table width='75%' border='5' align='center' cellspacing='5' bordercolor='#000000' bgcolor='#FFCC99'>";
    echo "<caption><h1>Estadistica de Clientes</caption>";
    echo "<tr>";
    echo "<th>Rangos</th>";
    echo "<th>Cantidad</th>";
    echo "<th>Promedio</th>";
    echo "</tr>";
       echo "<tr>";
       echo "<td>"."Menores a 15"."</td>";
       echo "<td>".$men[0]."</td>";
       echo "<td>".$pmen[0]."</td>";
       echo "</tr>";  
       echo "<tr>";
       echo "<td>"."Entre 15 a 45"."</td>";
       echo "<td>".$med[0]."</td>";
       echo "<td>".$pmed[0]."</td>";
       echo "</tr>";  
       echo "<tr>";
       echo "<td>"."Mayores a 45"."</td>";
       echo "<td>".$may[0]."</td>";
       echo "<td>".$pmay[0]."</td>";
       echo "</tr>";  
    echo"</table>";
}