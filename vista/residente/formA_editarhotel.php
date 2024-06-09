<!doctype html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <title>Mantenimiento de Hotel - PeruConnect</title> 
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .container {
      margin-top: 20px;
    }
    .card-header {
      background-color: #9c27b0;
      color: white;
    }
    .btn-primary {
      background-color: #9c27b0;
      border-color: #9c27b0;
    }
    .btn-primary:hover {
      background-color: #7b1fa2;
      border-color: #7b1fa2;
    }
    .btn-secondary {
      background-color: #ccc;
      border-color: #ccc;
    }
    .btn-secondary:hover {
      background-color: #bbb;
      border-color: #bbb;
    }
  </style>
  </head> 
<body> 
<div class="container"> 
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<section> 
<article> 
  <?php  
  include("../../conexion.php"); 
  $link = conectarse(); 
  $instruccion= "select hotel.codhotel, hotel.nombre, hotel.direccion, hotel.correo,
  hotel.telefono, hotel.resena, hotel.fk_nomciudad
  from hotel";
  ?>
<center><h1>Mantenimiento de Hotel</h1></center>
<div class="card">
  <div class="card-header">
    <h4>Hotel</h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
<table class="table table-striped"> 
  <thead>   
    <tr> 
    <th>Codigo</th> 
  <th>Nombre</th> 
  <th>Dirección</th> 
  <th>Correo</th> 
  <th>Telefono</th> 
  <th>Reseña</th>
  <th>Ciudad</th>
    </tr>
  </thead>
  <tbody> 
  <?php 
  $rs=mysqli_query($link, $instruccion) or die ("Fallo en la Consulta"); 
  $n=mysqli_num_rows($rs); 
  while($campo=mysqli_fetch_array($rs))
  {
  ?>
  <tr>
  <td><?php echo $campo["codhotel"];?></td>  
  <td><?php echo $campo["nombre"];?></td> 
  <td><?php echo $campo["direccion"];?></td>
  <td><?php echo $campo["correo"];?></td> 
  <td><?php echo $campo["telefono"];?></td> 
  <td><?php echo $campo["resena"];?></td>
  <td><?php echo $campo["fk_nomciudad"];?></td>
  <td><a class="btn btn-success" href="./formA_modificarhotel.php?cod=<?=$campo['codhotel']?>&nombre=<?= $campo['nombre']?>&direccion=<?= $campo['direccion']?>
  &tel=<?= $campo['telefono']?>&resena=<?= $campo['resena'] ?>&email=<?= $campo['correo']?>&fk_nomciudad=<?= $campo['fk_nomciudad']?>">Modificar</a></td>
  </tr> 
  <?php
  }
  mysqli_close($link); 
  ?>
  </tbody>
  </table>
  </div>
  </div>
</div> 
</article> 
</section> 
<a class="btn btn-warning btn-lg mt-3" href="menu_hotel.php">
  <i class="fas fa-arrow-left"></i> Volver</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div> 
</body> 
</html>