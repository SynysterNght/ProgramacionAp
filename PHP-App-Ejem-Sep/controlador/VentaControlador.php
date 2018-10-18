<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*/
 echo "<html lang='es'>" ;

$idVenta      = $_POST['idVenta'];
$fecha         = $_POST['fecha'];
$cliente            = $_POST['cliente'];
 
require_once __DIR__ . '/../modelo/VentaModelo.php';

$ObjCli = new VentaModelo();

if (isset($_POST['btn_listar'])) {
      $rows = $ObjCli->obtenerTodos();
      mostrar($rows);
}
      
      
function mostrar($rows=""){    
    echo "<table width='75%' border='5' align='center' cellspacing='5' bordercolor='#000000' bgcolor='#FFCC99'>";
    echo "<caption><h1>Listado de clientes</caption>";
    echo "<tr>";
    echo "<th>IdVenta</th>";
    echo "<th>fecha</th>";
    echo "<th>IdCliente</th>";
    echo "</tr>";
    while ($fila = $rows->fetch_row()) {
        echo "<tr>";
        echo "<td> <center>".$fila[0]."</center></td>"; 
        echo "<td>".$fila[1]."</td>";
        echo "<td> <center>".$fila[2]."</td>";
        echo "</tr>";
    }    
    echo " </table>";
}




if (isset($_POST['btn_adicionar'])) {
    echo "<br>Presiono el boton Adicionar";
    if($fecha==""){
        echo "<br>Debe introducir fecha.. MO SE ADICIONO";
    } else {
        $ObjCli->setfecha($fecha);
        $ObjCli->setcliente($cliente);
        
        $ObjCli->adicionar(); 
    }    
}


if (isset($_POST['btn_modificar'])) {
    echo "<br>Presiono el boton Modificar";
    if($idVenta==0){
        echo "<br>Debe introducir idVenta.. MO SE MODIFICO";
    } else {
        $ObjCli->setfecha($fecha);
        $ObjCli->setcliente($cliente);
        $ObjCli->modificar($idVenta); 
    }
}

if (isset($_POST['btn_buscar'])) {
    if ($idVenta == 0) {
        echo "<br>Debe introducir idVenta a buscar";
    } else {
        $rows = $ObjCli->obtenerVenta($idVenta);
        mostrar($rows);
    }
}

if (isset($_POST['btn_borrar'])) {
    echo "<br>Presiono el boton borrar";
    $rows = $ObjCli->borrarVenta($idVenta);   
}
