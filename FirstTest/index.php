<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <input type="text" name="m">
        <input type="submit" value="Define">
        
        <?php
        require 'num.php';
        $numero= new num(356);
        echo '<br>Digitos '. $numero->dig().'<br>';
        
        echo 'Invertido '. $numero->invertir();
        echo '<br>';
        
        $i=$_POST['m'];
        $numero->fibbo($i);
        ?>
    </body>
</html>
