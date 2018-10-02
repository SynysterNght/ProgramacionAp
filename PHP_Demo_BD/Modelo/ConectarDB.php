<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConectarDB
 *
 * @author Dell
 */
class ConectarDB {
    
    public static function conectarDB() 
    {
        $host = "localhost";
        $basededatos = "bd_demo";
        $usuariodb = "root";
        $clavedb = "";
        
        try 
        {
            $conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);
        } catch (Exception $e) {
            
            echo $e->errorMessage();
            exit(0);
            
        }
        if($conexion->connect_errno)
        {
            echo "<br>Error...!! No hay conexion a BD";
            $conexion = false;
            exit(0);
        }
        return ($conexion);
    }
    //put your code here
}
