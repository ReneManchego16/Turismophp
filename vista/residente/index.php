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
<style>
  .white-button {
  background-color: white;
}
</style>

<?php 
/* Incluimos la conexion, encabezado y lateral*/ 
include("../../conexion.php"); 
$link = conectarse(); 
?> 

<br><br>
<center>
<h1 class="label">Bienvenido Residente - PeruConnect</h1><br>
<div class="col-md-8">
    <div class="text-center">
      <img src="../../resources/images/bienvenido_docente.svg" alt="login" class="img-fluid p-5">
    </div>
</div>
</center>
<df-messenger intent="WELCOME" chat-title="SteveJobsBot" agent-id="1379af8f-0cd0-4d86-8f5a-38a2470bbea1" language-code="es" ></df-messenger>
</div> 
</body> 
</html>