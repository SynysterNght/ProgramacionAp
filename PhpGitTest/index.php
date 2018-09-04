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
        <font face="impact" size="6" color=" green"> Tipo de letra impact color tamano</font>
        <form action="formul.php.php" method="Post" >
            <fieldset>
                <legend> Informacion basica</legend>
                Name: <input type="text" name="name"><br><br>
                Last Name: <input type="text" name="last"><br><br>
                Number: <input type="number" name="num"><br><br>
                <input type="submit" value="Call">
            </fieldset>
        </form>
        
        <br><BR><BR><BR>
        
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
