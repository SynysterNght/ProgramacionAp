<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("ConectarBD.php");
class ClienteModelo {

    private $idCliente;
    private $nombre;
    private $nit;
    private $telefono;
    private $email;
    private $edad;
    
    public function __construct($nom="",$nt="",$tel="",$em="",$edd=0) {
        $this->idCliente    = 0;
        $this->nombre       = $nom;
        $this->nit          = $nt;
        $this->telefono     = $tel;
        $this->email        = $em;
        $this->edad        = $edd;
    }

    public function __destruct() {
        
    }
            
    public function setIdCliente($idCli) {
        $this->idCliente = $idCli;
    }

    public function setNombre($nom) {
        $this->nombre = $nom;
    }
    
    public function setNit($nt) {
        $this->nit = $nt;
    }
    
    public function setTelefono($tel) {
        $this->telefono = $tel;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setEdad($edd) {
        $this->edad = $edd;
    }
     public function obtenerTodos() {
        $sql = "SELECT * FROM cliente;"; 
        $conexion =  Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
    
    
    public function adicionar() {
        $conexion =  Conectar::conectarBD();
        if($conexion != false){
            $sql = "INSERT INTO cliente(nombre, nit, telefono, email, edad) VALUES(?,?,?,?,?);";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('ssssi', $this->nombre, $this->nit, $this->telefono, $this->email, $this->edad);
           if ($stmt->execute()) {
                $conexion->close();
                return(true);
            } else {
                $conexion->close();
                return(false);
            }            
        }
    }
    
    public function modificar($id=0) {
        $conexion =  Conectar::conectarBD();
        if($conexion != false){
            $sql = "UPDATE cliente SET nombre = ?,nit=?,telefono=?, email = ?, edad = ? WHERE id_cliente= ?;";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('ssssii', $this->nombre, $this->nit, $this->telefono, $this->email,$this->edad,$id);
           if ($stmt->execute()) {
                $conexion->close();
                return(true);
            } else {
                $conexion->close();
                return(false);
            }
        
        }
    }
    
    
     public function obtenerCliente($id=0) {
        $sql = "SELECT * FROM cliente where idCliente=$id;"; 
        $conexion =  Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }

    public function borrarCliente($id=0) {
        $sql = "DELETE FROM cliente WHERE idcliente=?;";
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

    public function estadistica(){
        $sql = "SELECT COUNT(edad) FROM Cliente WHERE (cliente.edad > 14 AND cliente.edad <46); ";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);

        
        return $rows;
    }
    
    public function menor(){
        $sql = "SELECT COUNT(edad) FROM Cliente WHERE (cliente.edad < 15);  ";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);

        
        return $rows;
    }
    
     public function mayor(){
        $sql = "SELECT COUNT(edad) FROM Cliente WHERE (cliente.edad >45 );  ";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);

        
        return $rows;
    }
    
    public function pmenor() {
        $sql = "SELECT AVG(edad) FROM cliente WHERE edad<15; ";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);

        
        return $rows;
    }
     public function pmayor() {
        $sql = "SELECT AVG(edad) FROM cliente WHERE edad>45; ";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);

        
        return $rows;
    }

     public function pmedio() {
        $sql = "SELECT AVG(edad) FROM cliente WHERE (edad>14 and edad<46); ";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);

        
        return $rows;
    }
}














