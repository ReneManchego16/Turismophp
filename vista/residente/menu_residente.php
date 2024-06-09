<!-- Empezado por Rene Poma Manchego -->
<!doctype html> 
<html> 
<head> 
    <meta charset="utf-8"> 
    <title> Menu de Residente - PeruConnect</title> 
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .container {
      margin-top: 20px;
    }
    .card-header {
      background-color: #C70039;
      color: white;
    }
    .btn-primary {
      background-color: #C70039;
      border-color: #C70039;
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
<div id="container"> 
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<?php 
/* Incluimos la conexion, encabezado y lateral*/ 
include("../../conexion.php"); 
$link = conectarse();
$instruccion = "SELECT turista.codturista, turista.nombre, turista.apellido, turista.correo, turista.telefono, turista.contraseña , turista.fk_idrol
FROM turista";
?>
<img src="../../resources/images/logoo1.png" width="100%" height="600px"> 
<nav class="navbar navbar-expand-md border-bottom border-bottom-dark" style="background-color: #8B0000;">
  <div class="container">
    <button class="navbar-toggler white-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-light fs-5" href="menu_residente.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light fs-5" href="menu_hotel.php">Hotel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light fs-5" href="menu_resta.php">Restaurante</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light fs-5" href="https://www.facebook.com/profile.php?id=61560351676810">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light fs-5" href="../../index.php">Salir</a>
        </li>
      </ul>
    </div>
  </div>
  
</nav>

<br><br>
<center>
<h1 class="label">Bienvenido Residente a PeruConnect</h1><br>
<div class="col-md-8">
    <div class="text-center">
      <img src="../../resources/images/bienvenido.svg" alt="login" class="img-fluid p-5">
    </div>
</div>
</center>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>
</body> 
</html>
<!-- Terminado por Rene Poma Manchego -->