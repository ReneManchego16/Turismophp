<!doctype html> 
<html> 
<head> 
<meta charset="utf-8"> 
<title> Inicio</title> 
<link href="../../resources/css/estilos.css" rel="stylesheet" type="text/css">
<link href="../../resources/css/estiloform.css" rel="stylesheet">  
<meta name="viewport" content="width=device-width"> 
</head> 
<body>
<div id="container"> 
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<?php 
/* Incluimos la conexion, encabezado y lateral*/ 
include("../../conexion.php"); 
include("./encabezado.php"); 
$link = conectarse(); 
?>
<br><br>
<center>
<h1 class="label">Bienvenido Turista - PeruConnect</h1><br>
<div class="col-md-8">
    <div class="text-center">
      <img src="../../resources/images/bienvenido_alumno.svg" alt="login" class="img-fluid p-5">
      <h2 class="label">Nos puedes ubicar en...</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8065927.5529910335!2d-80.31425785036181!3d-9.20477422903539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c850c05914f5%3A0xf29e011279210648!2zUGVyw7o!5e0!3m2!1ses!2spe!4v1717889130703!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> 
</div>
</center>
<df-messenger
  intent="WELCOME"
  chat-title="SteveJobsBot"
  agent-id="1379af8f-0cd0-4d86-8f5a-38a2470bbea1"
  language-code="es"
></df-messenger>
</div> 
</body> 
</html>