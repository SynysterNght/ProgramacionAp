
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

    <center><h1>Gestion de Producto</h1></center>

    <form method="POST" action="../controlador/ProductoControlador.php" >

    <div class="form-group">
      <label for="id_producto">Id del Producto</label>
      <input type="text" name="id_producto" class="form-control" id="id_producto">
    </div>

    <div class="form-group">
        <label for="nombre">Nombre </label>
        <input type="text" name="nombre" class="form-control" id="nombre" >
    </div>

    <div class="form-group">
        <label for="stock">Stock </label>
        <input type="text" name="stock" class="form-control" id="stock">
    </div>

    <div class="form-group">
        <label for="costo">Costo </label>
        <input type="text" name="costo" class="form-control" id="costo">
    </div>
    
    <div class="form-group">
        <label for="precio">Precio </label>
        <input type="text" name="precio" class="form-control" id="precio">
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