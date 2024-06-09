<!doctype html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <title>Agregar Restaurante - PeruConnect</title>
  <meta name="viewport" content="width=device-width"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #556B2F;
      margin-bottom: 30px;
    }

    .form-label {
      font-weight: bold;
      color: #556B2F;
    }

    .form-control {
      border-radius: 5px;
    }

    .btn-primary {
      background-color: #454545;
      border-color: #454545;
    }

    .btn-primary:hover {
      background-color: #FF8C00;
      border-color: #FF8C00;
    }

    .btn-back {
      color: #454545;
      text-decoration: none;
      font-size: 14px;
    }

    .btn-back:hover {
      text-decoration: underline;
    }
  </style>
  </head> 
<body> 
<div class="container">
<?php include("../../conexion.php"); ?>
</div>
  <div class="container">
  <h2>Registrar Hotel</h2>
  <form method="post" action="../../modelo/editaA_hotel.php" enctype="multipart/form-data">
    <div class="form-group">
      <label for="nombre" class="form-label">Nombre:</label> 
      <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required><br>
    </div>
    <div class="form-group">
      <label for="direccion" class="form-label">Dirección:</label> 
      <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion" required><br>
    </div>
    <div class="form-group">
      <label for="email" class="form-label">Email:</label> 
      <input type="email" name="email" id="email" class="form-control" placeholder="email@.gmail" required><br>
    </div>
    <div class="form-group">
      <label for="telefono" class="form-label">Telefono:</label> 
      <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="xxx-xxx-xxx" required><br>
    </div>
    <div class="form-group">
      <label for="resena" class="form-label">Reseña:</label> 
      <input type="text" name="resena" id="clave" class="form-control" placeholder="Reseña" required><br>
    </div>
    <div class="form-group">
        <label for="ciudad" class="form-label">ciudad:</label>
        <select name="ciudad" id="ciudad">
        <option value="Tacna">Tacna</option>
        <option value="Lima">Lima</option>
        <option value="Arequipa">Arequipa</option>
        <option value="MOquegua">Moquegua</option>
        </select>
    </div>
    <div class="form-group text-center">
      <input type="submit" value="Registrar" name="enviar" class="btn btn-primary">
    </div> 
    </form>
    <div class="text-center">  
      <a href="./menu_resta.php">Volver</a> <!--para salir al index principal-->
    </div>
  </div>
  </aside>

</div> 
</body> 
</html>