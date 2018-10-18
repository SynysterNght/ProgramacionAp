<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require("ConectarBD.php");

class VentaModelo {
    
    private $idVenta;
    private $fecha;
    private $idCliente;

    public function __construct($fe="", $Id="") {
        $this->idVenta = 0;
        $this->fecha = $fe;
        $this->idCliente = $Id;
    }
    
    public function __destruct() {
        
    }
    
    function SetIdVenta($idVen){
        $this->idVenta = $idVen;
    }
    
    function SetFecha($fe){
        $this->fecha = $fe;
    }
    
    function SetIdCliente($cl){
        $this->idCliente = $cl;
    }
    
    public function obtenerTodos(){
        $sql = "SELECT * FROM venta;";
        $conexion = Conectar::conectarDB();
        $rows = $conexion->query($sql);
        $conexion->close();
        return ($rows);
    }
    public function adicionar()
    {
        $conexion = Conectar::conectarDB();
        if($conexion != false)
        {
            $sql = "INSERT INTO venta(fecha, id_cliente) VALUES(?,?);";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('si', $this->fecha, $this->idCliente);
            if($stmt->execute())
            {
                $conexion->close();
                return (true);
            }
            else
           {
                $conexion->close();
                return (false);
           }
            
        }
    }
    public function modificar($id=0)
    {
        $conexion = Conectar::conectarDB();
        if($conexion != false)
        {
            $sql = "UPDATE venta SET fecha = ?,id_cliente = ?  WHERE id_venta = ?;";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('dii', $this->fecha, $this->idCliente,$id);
            if($stmt->execute())
            {
                $conexion->close();
                return (true);
            }
            else 
            {
                $conexion->close();
                return (false);
            }
            
        }
    }
    
    
    ///////////////////////////////
    
    
    
    public function obtenerVenta($id = 0)
    {
        $sql = "SELECT * FROM venta where id_venta = $id;";
        $conexion = Conectar::conectarDB();
        $rows = $conexion->query($sql);
        $conexion->close();
        return ($rows);
        
    }
    public function borrarCliente($id=0) 
    {
        $sql = "DELETE FROM venta WHERE id_venta = ?;";
        $conexion = Conectar::conectarDB();
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('i',$id);
        if($stmt->execute())
        {
            $conexion->close();
            return 1;
        }
        else
        {
            $conexion->close();
            return -1;
        }
        
    }
    
}