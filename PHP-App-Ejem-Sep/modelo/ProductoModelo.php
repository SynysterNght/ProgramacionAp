<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("ConectarBD.php");
class productoModelo {

    private $idProducto;
    private $nombre;
    private $stock;
    private $costo;
    private $precio;
    
    
    public function __construct($nom="",$sto="",$cost="",$prec="") {
        $this->idProducto   = 0;
        $this->nombre       = $nom;
        $this->stock        = $sto;
        $this->costo        = $cost;
        $this->precio       = $prec;
    }

    public function __destruct() {
        
    }
            
    public function setIdProducto($idprod) {
        $this->idProducto = $idprod;
    }

    public function setNombre($nom) {
        $this->nombre = $nom;
    }
    
    public function setNit($sto) {
        $this->stock = $sto;
    }
    
    public function setTelefono($cost) {
        $this->costo = $cost;
    }
    public function setEmail($prec) {
        $this->precio = $prec;
    }
    
     public function obtenerTodos() {
        $sql = "SELECT * FROM producto;"; 
        $conexion =  Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
    
    
    public function adicionar() {
        $conexion =  Conectar::conectarBD();
        if($conexion != false){
            $sql = "INSERT INTO producto(nombre, stock, costo, precio) VALUES(?,?,?,?);";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('siii', $this->nombre, $this->stock, $this->costo, $this->precio);
           if ($stmt->execute()) {
                $conexion->close();
                return(true);
            } else {
                $conexion->close();
                return(false);
            }            
        }
    }
    
    public function modificar($idProducto=0) {
        $conexion =  Conectar::conectarBD();
        if($conexion != false){
            $sql = "UPDATE producto SET nombre = ?,stock=?,costo=?, precio = ?,  WHERE idProducto= ?;";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('siii', $this->nombre, $this->stock, $this->costo, $this->precio,$idProducto);
           if ($stmt->execute()) {
                $conexion->close();
                return(true);
            } else {
                $conexion->close();
                return(false);
            }
        
        }
    }
    
    
     public function obtenerProducto($id=0) {
        $sql = "SELECT * FROM producto where idProducto=$id;"; 
        $conexion =  Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }

    public function borrarProducto($id=0) {
        $sql = "DELETE FROM producto WHERE idProducto=?;";
        $conexion =  Conectar::conectarBD();
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('s', $id);
        if ($stmt->execute()) {
            $conexion->close();
            return 1;
        } else {
            $conexion->close();
            return -1;
        }
    }
}
