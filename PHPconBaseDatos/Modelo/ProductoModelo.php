<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require __DIR__ . '/../Modelo/ConectarBD.php';

class ProductoModelo{
    private $idProducto;
    private $nombre;
    private $costo;
    private $precio;
    private $stock;
    
    public function __construct($nom="", $st=0, $cs=0.0, $pr=0.0) {
        $this->idProducto=0;
        $this->nombre=$nom;
        $this->costo=$cs;
        $this->precio=$pr;
        $this->stock=$st;
    }
    
    public function __destruct() {
    }
    
    function SetIdProducto($id){
        $this->idProducto = $id;
    }
    
    function SetNombre($nom){
        $this->nombre = $nom;
    }
    
    function SetCosto($cs){
        $this->costo = $cs;
    }
    
    function SetPrecio($pr){
        $this->precio = $pr;
    }
    
    function SetStock($st){
        $this->stock = $st;
    }

    public function obtenerTodos(){
        $sql = "SELECT * FROM producto;";
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
            $sql = "INSERT INTO producto(nombre,stock,costo,precio) VALUES(?,?,?,?);";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('sidd', $this->nombre, $this->stock, $this->costo, $this->precio);
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
            $sql = "UPDATE producto SET nombre = ?,stock = ? ,costo = ?,precio=? WHERE id_producto = ?;";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('siddi', $this->nombre, $this->stock, $this->costo, $this->precio,$id);
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
    public function obtenerProducto($id = 0)
    {
        $sql = "SELECT * FROM Producto where id_producto = $id;";
        $conexion = Conectar::conectarDB();
        $rows = $conexion->query($sql);
        $conexion->close();
        return ($rows);
        
    }
    public function borrarProducto($id=0) 
    {
        $sql = "DELETE FROM producto WHERE id_producto = ?;";
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
    
    
    
    
};
