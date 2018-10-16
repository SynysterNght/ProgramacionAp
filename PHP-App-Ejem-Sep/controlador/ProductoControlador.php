<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*/
 echo "<html lang='es'>" ;

$idProducto      = $_POST['idProducto'];
$nombre         = $_POST['nombre'];
$nit            = $_POST['stock'];
$tel            = $_POST['costo'];
$email          = $_POST['precio'];
//$edad           = $_POST['edad'];
 
require_once __DIR__ . '/../modelo/ProductoModelo.php';

$ObjCli = new productoModelo();

if (isset($_POST['btn_listar'])) {
      $rows = $ObjCli->obtenerTodos();
      mostrar($rows);
}
      
      
function mostrar($rows=""){    
    echo "<table width='75%' border='5' align='center' cellspacing='5' bordercolor='#000000' bgcolor='#FFCC99'>";
    echo "<caption><h1>Listado de productos</caption>";
    echo "<tr>";
    echo "<th>IdProducto</th>";
    echo "<th>NOmbre</th>";
    echo "<th>Stock</th>";
    echo "<th>Costo</th>";
    echo "<th>Precio</th>";
    //echo "<th>Edad</th>";
    echo "</tr>";
    while ($fila = $rows->fetch_row()) {
        echo "<tr>";
        echo "<td> <center>".$fila[0]."</center></td>"; 
        echo "<td>".$fila[1]."</td>";
        echo "<td>".$fila[2]."</td>";
        echo "<td>".$fila[3]."</td>";
        echo "<td>".$fila[4]."</td>";
       // echo "<td> <center>".$fila[5]."</td>";
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
       // $ObjCli->setEdad($edad);
        $ObjCli->adicionar(); 
    }    
}


if (isset($_POST['btn_modificar'])) {
    echo "<br>Presiono el boton Modificar";
    if($idProducto==0){
        echo "<br>Debe introducir idProducto.. MO SE MODIFICO";
    } else {
        $ObjCli->setNombre($nombre);
        $ObjCli->setNit($nit);
        $ObjCli->setTelefono($tel);
        $ObjCli->setEmail($email);
        //$ObjCli->setEdad($edad);
        $ObjCli->modificar($idProducto); 
    }
}

if (isset($_POST['btn_buscar'])) {
    if ($idProducto == 0) {
        echo "<br>Debe introducir idProducto a buscar";
    } else {
        $rows = $ObjCli->obtenerProducto($idProducto);
        mostrar($rows);
    }
}

if (isset($_POST['btn_borrar'])) {
    echo "<br>Presiono el boton borrar";
    $rows = $ObjCli->borrarProducto($idProducto);   
}