<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*require_once ("Modelo/ClienteModelo.php");
$objCli = new ClienteModelo();
$rows = $objCli->obtenerTodos();
require_once ("Vista/ClienteVista.php");*/
echo "<html lang='es'>";
$idCliente      =$_POST['idCliente'];
$nombre         =$_POST['nombre'];
$nit            =$_POST['nit'];
$tel            =$_POST['tel'];
$email          =$_POST['email'];
$edad           =$_POST['edad'];



require_once __DIR__ . '/../Modelo/ClienteModelo.php';

$ObjCli = new ClienteModelo();


if(isset($_POST['btn_listar'])){
    $rows = $ObjCli->obtenerTodos();
    mostrar($rows);
}

function mostrar($rows = ""){
    echo "<table width='75%' border='5' align='center' cellspacing='5' bordercolor='#000000' bgcolor='#FFCC99'>";
    echo "<caption><h1>Listado de Clientes</caption>";
    echo "<tr>";
    echo "<th>IdCliente</th>";
    echo "<th>Nombre y Apellido</th>";
    echo "<th>NIT</th>";
    echo "<th>email</th>";
    echo "<th>Telefono</th>";
    echo "<th>Edad</th>";
    echo "</tr>";
    while($fila = $rows->fetch_row()){//cursor que avanza automaticamente en el vector rows
       echo "<tr>";
       echo "<td><center>".$fila[0]."<center></td>";
       echo "<td>".$fila[1]."</td>";
       echo "<td>".$fila[2]."</td>";
       echo "<td>".$fila[3]."</td>";
       echo "<td>".$fila[4]."</td>";
       echo "<td><center>".$fila[5]."</td>";
       echo "</tr>";  
    }
    echo"</table>";
}
if(isset($_POST['btn_adicionar']))
{
    echo "<br>Presiono el boton adicionar";
    if($nombre == "")
    {
        echo "<br>Debe introducir nombre ... No se Adiciono";   
    }
    else
    {
        $ObjCli->SetNombre($nombre);
        $ObjCli->SetNit($nit);
        $ObjCli->SetTelefono($tel);
        $ObjCli->SetEmail($email);
        $ObjCli->SetEdad($edad);
        
        $ObjCli->adicionar();
    }
}
if(isset($_POST['btn_modificar']))
{
    echo "<br>Presiono el boton modificar";
    if($idCliente == 0)
    {
         echo "<br>Debe introducir Id_Cliente ... No se Modifico";
    }
    else 
    {
         $ObjCli->SetNombre($nombre);
        $ObjCli->SetNit($nit);
        $ObjCli->SetTelefono($tel);
        $ObjCli->SetEmail($email);
        $ObjCli->SetEdad($edad);
        
        $ObjCli->modificar($idCliente);
        
    }
}
if(isset($_POST['btn_buscar']))
{
    if($idCliente == 0)
    {
         echo "<br>Debe introducir Id_Cliente  para buscar";
    }
    else 
    {
       $rows= $ObjCli->obtenerCliente($idCliente);
       mostrar($rows);
    }
}
if(isset($_POST['btn_borrar']))
{
    echo "<br>Presiono el boton borrar";
    $rows = $ObjCli->borrarCliente($idCliente); 
}


if(isset($_POST['btn_Estadistica'])){
    echo "presione boton estadistica";
    
    mostrar2($ObjCli->estadistica(), $ObjCli->menor());
    
    echo "el promedio es: ". $ObjCli->SumEdad()->fetch_row()[0]/$ObjCli->cantidadFilas()->fetch_row()[0];
    
}  


function mostrar2($mayor = "", $menor=""){
    
    $may=$mayor->fetch_row();
    $men=$menor->fetch_row();
    
    echo "<table width='75%' border='5' align='center' cellspacing='5' bordercolor='#000000' bgcolor='#FFCC99'>";
    echo "<caption><h1>Estadistica de Clientes</caption>";
    echo "<tr>";
    echo "<th>Categoria</th>";
    echo "<th>Nombre y Apellido</th>";
    echo "<th>edad</th>";
    echo "</tr>";
       echo "<tr>";
       echo "<td>"."MAYOR"."</td>";
       echo "<td>".$may[0]."</td>";
       echo "<td>".$may[1]."</td>";
       echo "</tr>";  
       echo "<tr>";
       echo "<td>"."MENOR"."</td>";
       echo "<td>".$men[0]."</td>";
       echo "<td>".$men[1]."</td>";
       echo "</tr>";  
    echo"</table>";
}
