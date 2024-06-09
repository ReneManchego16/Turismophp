<!doctype html> 
<html> 
<head> 
<meta charset="utf-8"> 
<title>Listado de Destinos Recomendados - PeruConect</title> 
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .container {
      margin-top: 20px;
    }
    .card-header {
      background-color: #454545;
      color: white;
    }
    .btn-primary {
      background-color: #454545;
      border-color: #454545;
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
<section> 
<article> 
<?php  
include("../../conexion.php"); 
$link = conectarse(); 
$instruccion= "select fechaviaje.id, fechaviaje.ciudad, fechaviaje.descripcion , fechaviaje.fecha_inicio, fechaviaje.fecha_fin
from fechaviaje";
?>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<center><h1>Listado de Destinos</h1></center>
<div class="card">
  <div class="card-header">
    <h4>Destinos</h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
<table class="table table-striped">
  <thead>
    
<tr> 
<th>Codigo</th> 
<th>Ciudad</th> 
<th>Descripcion</th> 
<th>Fecha Inicio</th> 
<th>Fecha Fin</th> 
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
<td><?php echo $campo["id"];?></td>  
<td><?php echo $campo["ciudad"];?></td> 
<td><?php echo $campo["descripcion"];?></td>
<td><?php echo $campo["fecha_inicio"];?></td>
<td><?php echo $campo["fecha_fin"];?></td> 
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
<a class="btn btn-warning btn-lg mt-3" href="./index.php">
  <i class="fas fa-arrow-left"></i> Volver</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div> 
</body> 
</html>