<?php
require_once __DIR__ . '/../modelo/ClienteModelo.php';
$ObjCli = new ClienteModelo();
$combobox = $ObjCli->ObtenerComboCliente();
?>
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

    <center><h1>Gestion de Venta</h1></center>

    <form method="POST" action="../controlador/VentaControlador.php" >

    <div class="form-group">
      <label for="id_venta">Id de la Venta</label>
      <input type="text" name="id_venta" class="form-control" id="id_venta">
    </div>

    <div class="form-group">
        <label for="fecha">Fecha </label>
        <input type="date" name="fecha" class="form-control" id="Fecha" >
    </div>

    <div class="form-group">
        <label for="id_cliente">Id del Cliente </label>
        <select name="combo" class="form-control" id="id_cliente">
            <?php
            echo $combobox;
            ?>
        </select>
    </div>  

    <center>
      <input type="submit" value="Adicionar" class="btn btn-success" name="btn_adicionar">
      <input type="submit" value="Borrar" class="btn btn-danger" name="btn_borrar">
      <input type="submit" value="Modificar" class="btn btn-warning" name="btn_modificar">
      <input type="submit" value="Buscar" class="btn btn-info" name="btn_buscar">
      <input type="submit" value="Listar" class="btn btn-primary" name="btn_listar">
      
    </center>

  </form>

 
  </div>


<!-- TERMINA LA COLUMNA -->



  <div class="col-md-4"></div>
</div>



  
  
</body>
</html>
