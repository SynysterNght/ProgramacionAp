<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require("ConectarBD.php");

class ClienteModelo {
    
    private $idCliente;
    private $nombre;
    private $nit;
    private $telefono;
    private $email;
    private $edad;


    public function __construct($nom="", $nt="", $tel="", $em="",$ed=0) {
        $this->idCliente = 0;
        $this->nombre = $nom;
        $this->nit = $nt;
        $this->telefono = $tel;
        $this->email = $em;
        $this->edad = $ed;
    }
    
    public function __destruct() {
        
    }
    
    function SetIdCliente($idCli){
        $this->idCliente = $idCli;
    }
    
    function SetNombre($nom){
        $this->nombre = $nom;
    }
    
    function SetNit($nt){
        $this->nit = $nt;
    }
    
    function SetTelefono($tel){
        $this->telefono = $tel;
    }
    
    function SetEmail($em){
        $this->email = $em;
    }
    function SetEdad($ed=0)
    {
        $this->edad =$ed;
    }
    
    
    public function obtenerTodos(){
        $sql = "SELECT * FROM cliente;";
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
            $sql = "INSERT INTO cliente(nombre,nit,telefono,email,edad) VALUES(?,?,?,?,?);";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('ssssi', $this->nombre, $this->nit, $this->telefono, $this->email, $this->edad);
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
            $sql = "UPDATE cliente SET nombre = ?,nit = ? ,telefono = ?,email=?,edad=? WHERE id_cliente = ?;";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('ssssii', $this->nombre, $this->nit, $this->telefono, $this->email, $this->edad,$id);
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
    public function obtenerCliente($id = 0)
    {
        $sql = "SELECT * FROM cliente where id_cliente = $id;";
        $conexion = Conectar::conectarDB();
        $rows = $conexion->query($sql);
        $conexion->close();
        return ($rows);
        
    }
    public function borrarCliente($id=0) 
    {
        $sql = "DELETE FROM cliente WHERE id_cliente = ?;";
        $conexion = Conectar::conectarDB();
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('s',$id);
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
    
    public function estadistica(){
        $sql = "SELECT Cliente.nombre, cliente.edad FROM Cliente WHERE cliente.edad = (SELECT MAX( edad ) FROM Cliente); ";
        $conexion = Conectar::conectarDB();
        $rows = $conexion->query($sql);

        
        return $rows;
    }
    
    public function menor(){
        $sql = "SELECT nombre, edad FROM Cliente WHERE edad = (SELECT MIN(edad) FROM cliente); ";
        $conexion = Conectar::conectarDB();
        $rows = $conexion->query($sql);

        
        return $rows;
    }
    public function SumEdad(){
        $sql = "SELECT SUM(edad) FROM Cliente; ";
        $conexion = Conectar::conectarDB();
        $rows = $conexion->query($sql);
        return $rows;
    }
    
    public function cantidadFilas(){
        $sql = "SELECT COUNT(edad) FROM Cliente; ";
        $conexion = Conectar::conectarDB();
        $rows = $conexion->query($sql);
        return $rows;
    }
    
    public function ObtenerComboCliente(){
        $sql = "SELECT * FROM Cliente; ";      
        $conexion = Conectar::conectarDB();
        $result = $conexion->query($sql);
        if($result->num_rows>0){
            $combobit = "";
            while($row = $result->fetch_array(MYSQLI_ASSOC)){       //Retorna una cadena de caracteres
                $combobit.="<option value=' " . $row['id_cliente'] . " '>". $row['id_cliente']." ".
                            $row['nombre']." ".$row['edad']. "</option>";
            }
        }else{
            echo"No hay resultados";
        }
        
        $conexion->close();
        return($combobit);
    }
    
    
}

