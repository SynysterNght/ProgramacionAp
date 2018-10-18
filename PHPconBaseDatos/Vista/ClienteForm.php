<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
       <meta charset="UTF-8">
  <title>Mi microERP</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"  crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"  crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"  crossorigin="anonymous"></script>
</head>


<body>

<div class="row">
  <div class="col-md-4"></div>

<!-- INICIA LA COLUMNA -->


  <div class="col-md-4">

    <center><h1>Gestion de Cliente</h1></center>

    <form method="POST" action="../controlador/ClienteControlador.php" >

    <div class="form-group">
      <label for="idCliente">Id de Cliente</label>
      <input type="text" name="idCliente" class="form-control" id="idCliente">
    </div>

    <div class="form-group">
        <label for="nombre">Nombre </label>
        <input type="text" name="nombre" class="form-control" id="nombre" >
    </div>

    <div class="form-group">
        <label for="nit">NIT </label>
        <input type="text" name="nit" class="form-control" id="nit">
    </div>

    <div class="form-group">
        <label for="tel">Telefono </label>
        <input type="text" name="tel" class="form-control" id="tel">
    </div>
    
    <div class="form-group">
        <label for="email">Email </label>
        <input type="text" name="email" class="form-control" id="email">
    </div>    

    <div class="form-group">
        <label for="edad">Edad </label>
        <input type="text" name="edad" class="form-control" id="edad">
    </div>  

        
    <center>
      <input type="submit" value="Adicionar" class="btn btn-success" name="btn_adicionar">
      <input type="submit" value="Borrar" class="btn btn-danger" name="btn_borrar">
      <input type="submit" value="Modificar" class="btn btn-warning" name="btn_modificar">
      <input type="submit" value="Buscar" class="btn btn-info" name="btn_buscar">
      <input type="submit" value="Listar" class="btn btn-primary" name="btn_listar">
      <input type="submit" value="Estadistica" class="btn btn-primary" name="btn_Estadistica">
      
    </center>

  </form>

 
  </div>


<!-- TERMINA LA COLUMNA -->



  <div class="col-md-4"></div>
</div>



  
  
</body>
</html>
