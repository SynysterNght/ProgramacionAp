<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("ConectarBD.php");
class VentaModelo {

    private $idVenta;
    private $cliente;
    private $fecha;
    
    
    public function __construct($cli="",$pro="",$fec="") {
        $this->idVenta   = 0;
        $this->cliente       = $cli;
        $this->producto        = $pro;
        $this->fecha        = $fec;
    }

    public function __destruct() {
        
    }
            
    public function setIdVenta($idprod) {
        $this->idVenta = $idprod;
    }

    public function setcliente($nom) {
        $this->cliente = $nom;
    }
    
    
    public function setfecha($fec) {
        $this->fecha = $fec;
    }
    
     public function obtenerTodos() {
        $sql = "SELECT * FROM venta;"; 
        $conexion =  Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
    
    
    public function adicionar() {
        $conexion =  Conectar::conectarBD();
        if($conexion != false){
            $sql = "INSERT INTO venta( Fecha,Id_cliente) VALUES(?,?);";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('si',  $this->fecha, $this->cliente);
           if ($stmt->execute()) {
                $conexion->close();
                return(true);
            } else {
                $conexion->close();
                return(false);
            }            
        }
    }
    
    public function modificar($idVenta=0) {
        $conexion =  Conectar::conectarBD();
        if($conexion != false){
            $sql = "UPDATE venta SET Fecha=?, Id_cliente= ?,  WHERE Id_venta= ?;";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('sii', $this->fecha, $this->cliente,$idVenta);
           if ($stmt->execute()) {
                $conexion->close();
                return(true);
            } else {
                $conexion->close();
                return(false);
            }
        
        }
    }
    
    
     public function obtenerVenta($id=0) {
        $sql = "SELECT * FROM venta where Id_venta=$id;"; 
        $conexion =  Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }

    public function borrarVenta($id=0) {
        $sql = "DELETE FROM venta WHERE Id_venta=?;";
        $conexion =  Conectar::conectarBD();
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('i', $id);
        if ($stmt->execute()) {
            $conexion->close();
            return 1;
        } else {
            $conexion->close();
            return -1;
        }
    }
}
