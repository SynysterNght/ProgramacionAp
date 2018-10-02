<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("ConectarDB.php");//incluye una sola vez el contenido del archivo
class ClienteModelo{
    private $idCliente;
    private $nombre;
    private $nit;
    private $telefono;
    private $email;
    
    public function __construct($nom="",$nt="",$tel="",$em="")
    {
        $this->idCliente = 0;
        $this->nombre    = $nom;
        $this->nit       = $nt;
        $this->telefono  = $tel;
        $this->email     = $em;
    }
    public function __destruct()
    {
        
    }
    public function setIdCliente($idCli)
    {
        $this->idCliente = $idCli;
    }
    public function setNombre($nom)
    {
        $this->nombre = $nom;
    }
    public function setNit($nt)
    {
        $this->nit = $nt;
    }
    public function setTelefono($tel)
    {
        $this->telefono = $tel;
    }
    public function setEmail($em)
    {
        $this->email = $em;
    }
    public function obtenerTodos()
    {
        $sql="SELECT * FROM cliente;";
        $conexion = Conectar::conectarBD();
        $rows = $conexion->query($sql);
        $conexion->close();
        return($rows);
    }
    
    
    
    
    
    
    
    
}
