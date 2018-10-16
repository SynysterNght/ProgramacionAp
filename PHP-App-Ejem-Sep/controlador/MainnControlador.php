<?php

if (isset($_POST['btn_cliente'])) {
     //echo "<br>Presiono el boton cliente";
     require_once __DIR__ . '/../vista/Clienteform.php';     
}

if (isset($_POST['btn_producto'])) {
    //echo "<br>Presiono el boton producto";
       require_once __DIR__ . '/../vista/ProductoForm.php'; 
}

if (isset($_POST['btn_venta'])) {
    echo "<br>Presiono el boton venta ";
}

