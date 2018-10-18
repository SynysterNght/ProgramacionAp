<?php


echo "<html lang='es'>";
$idVenta     =$_POST['id_venta'];
$fecha         =$_POST['fecha'];
$idCliente     =$_POST['combo'];



require_once __DIR__ . '/../Modelo/VentaModelo.php';

$ObjVenta = new VentaModelo();


if(isset($_POST['btn_listar'])){
    $rows = $ObjVenta->obtenerTodos();
    mostrar($rows);
}

function mostrar($rows = ""){
    echo "<table width='75%' border='5' align='center' cellspacing='5' bordercolor='#000000' bgcolor='#FFCC99'>";
    echo "<caption><h1>Listado de Clientes</caption>";
    echo "<tr>";
    echo "<th>IdVenta</th>";
    echo "<th>Fecha</th>";
    echo "<th>IdCliente</th>";
    echo "</tr>";
    while($fila = $rows->fetch_row()){//cursor que avanza automaticamente en el vector rows
       echo "<tr>";
       echo "<td><center>".$fila[0]."<center></td>";
       echo "<td>".$fila[1]."</td>";
       echo "<td>".$fila[2]."</td>";
       echo "</tr>";  
    }
    echo"</table>";
}

if(isset($_POST['btn_adicionar']))
{
    echo "<br>Presiono el boton adicionar";
    if($fecha == "")
    {
        echo "<br>Debe introducir Fecha ... No se Adiciono";   
    }
    else
    {
        $ObjVenta->SetFecha($fecha);
        $ObjVenta->SetIdCliente($idCliente);
        
        $ObjVenta->adicionar();
    }
}
if(isset($_POST['btn_modificar']))
{
    echo "<br>Presiono el boton modificar";
    if($idVenta == 0)
    {
         echo "<br>Debe introducir Id_Venta ... No se Modifico";
    }
    else 
    {
         $ObjVenta->SetFecha($Fecha);
        $ObjVenta->SetidCliente($idCliente);
        
        $ObjVenta->modificar($idVenta);
        
    }
}
if(isset($_POST['btn_buscar']))
{
    if($idVenta == 0)
    {
         echo "<br>Debe introducir Id_Venta  para buscar";
    }
    else 
    {
       $rows= $ObjVenta->obtenerVenta($idVenta);
       mostrar($rows);
    }
}
if(isset($_POST['btn_borrar']))
{
    echo "<br>Presiono el boton borrar";
    $rows = $ObjVenta->borrarVenta($idVenta); 
}