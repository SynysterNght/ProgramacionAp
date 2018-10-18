<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST['btn_cliente'])){
    require_once __DIR__ . '/../Vista/ClienteForm.php';
}

if(isset($_POST['btn_producto'])){
    require_once __DIR__ . '/../Vista/ProductoForm.php';
}

if(isset($_POST['btn_venta'])){
    require_once __DIR__ . '/../Vista/VentaForm.php';
}
