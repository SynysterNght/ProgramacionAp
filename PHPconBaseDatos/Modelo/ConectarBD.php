<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConectarBD
 *
 * @author Alejandro Dorado
 */
class Conectar {
    //put your code here
    public static function conectarDB(){
        $host = "localhost"; //define el servidor
        $basededatos = "bd_demo"; //define el nombre de la base de datos
        $usuariodb = "root"; //nombre del uduario autorizado para la BD 
        $clavedb = ""; //password del usuario
        try { //bloque de proteccion de fallos mediante intentos
            $conexion = new mysqli($host, $usuariodb, $clavedb, $basededatos); //crea una instancia para conectar a BD
        } catch(Exception $e){ //atrapa el posible error
            echo $e->errorMessage(); //muestra el error
            exit(0); //termina el proceso
        }
        if($conexion->connect_errno){ //verifica si la conexion tuvo algun error
            echo "<br>Error! No hay conexion a BD ";
            $conexion = false; //retorna falso para indicar que fallo la conexion
            exit(0);
        }
        return ($conexion); //retorna un objeto con la conexion a la BD
    }
}
