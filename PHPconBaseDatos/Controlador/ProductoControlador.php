<?php


echo "<html lang='es'>";
$idProducto     =$_POST['id_producto'];
$nombre         =$_POST['nombre'];
$stock            =$_POST['stock'];
$precio            =$_POST['precio'];
$costo          =$_POST['costo'];



require_once __DIR__ . '/../Modelo/ProductoModelo.php';

$ObjPro = new ProductoModelo();


if(isset($_POST['btn_listar'])){
    $rows = $ObjPro->obtenerTodos();
    mostrar($rows);
}

function mostrar($rows = ""){
    echo "<table width='75%' border='5' align='center' cellspacing='5' bordercolor='#000000' bgcolor='#FFCC99'>";
    echo "<caption><h1>Listado de Clientes</caption>";
    echo "<tr>";
    echo "<th>IdProducto</th>";
    echo "<th>Nombre</th>";
    echo "<th>stock</th>";
    echo "<th>costo</th>";
    echo "<th>precio</th>";
    echo "</tr>";
    while($fila = $rows->fetch_row()){//cursor que avanza automaticamente en el vector rows
       echo "<tr>";
       echo "<td><center>".$fila[0]."<center></td>";
       echo "<td>".$fila[1]."</td>";
       echo "<td>".$fila[2]."</td>";
       echo "<td>".$fila[3]."</td>";
       echo "<td><center>".$fila[4]."</td>";
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
        $ObjPro->SetNombre($nombre);
        $ObjPro->SetPrecio($precio);
        $ObjPro->SetCosto($costo);
        $ObjPro->SetStock($stock);
        
        $ObjPro->adicionar();
    }
}
if(isset($_POST['btn_modificar']))
{
    echo "<br>Presiono el boton modificar";
    if($idProducto == 0)
    {
         echo "<br>Debe introducir Id_Producto ... No se Modifico";
    }
    else 
    {
         $ObjPro->SetNombre($nombre);
        $ObjPro->SetPrecio($precio);
        $ObjPro->SetCosto($costo);
        $ObjPro->SetStock($stock);
        
        $ObjPro->modificar($idProducto);
        
    }
}
if(isset($_POST['btn_buscar']))
{
    if($idProducto == 0)
    {
         echo "<br>Debe introducir Id_Cliente  para buscar";
    }
    else 
    {
       $rows= $ObjPro->obtenerProducto($idProducto);
       mostrar($rows);
    }
}
if(isset($_POST['btn_borrar']))
{
    echo "<br>Presiono el boton borrar";
    $rows = $ObjPro->borrarProducto($idProducto); 
}