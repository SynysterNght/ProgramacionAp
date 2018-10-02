<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
while($fila = $rows->fetch_row())
{
    echo "<br><tr><td>". $fila[0] . " " . $fila[1] . " " . $fila[2] . " " . $fila[3] . " " . $fila[4]."</td></tr>";
}
