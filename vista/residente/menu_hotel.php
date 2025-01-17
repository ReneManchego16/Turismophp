
<!DOCTYPE html>
<html>
<head>
  <title>Menu de Residente - PeruConnect</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    
    .container {
      margin-top: 50px;
    }
    
    .jumbotron {
      background-color: #ffffff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    }
    
    .display-4 {
      color: #333333;
      font-weight: bold;
      margin-bottom: 20px;
    }
    
    .lead {
      color: #555555;
    }
    
    .form {
      margin-bottom: 20px;
    }
    
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      transition: background-color 0.3s ease, border-color 0.3s ease;
    }
    
    .btn-primary:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }
    
    .btn-secondary {
      background-color: #6c757d;
      border-color: #6c757d;
      transition: background-color 0.3s ease, border-color 0.3s ease;
    }
    
    .btn-secondary:hover {
      background-color: #5a6268;
      border-color: #545b62;
    }
    
    .btn-lg {
      font-size: 20px;
      padding: 12px 30px;
    }
    
    .btn-block {
      display: block;
      width: 100%;
    }
  </style>
</head>
<body>
  
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4">Residente</h1>
      <p class="lead">Estás en el menú Hoteles</p>
    </div>
    
    <div class="row">
      <div class="col-md-4">
        <form method="post" action="./formA_agregarhotel.php" enctype="multipart/form-data" class="form">
          <input type="submit" value="Agregar" name="Agregar" class="btn btn-danger btn-lg btn-block">
        </form>
      </div>
      <div class="col-md-4">
        <form method="post" action="./formA_editarhotel.php" enctype="multipart/form-data" class="form">
          <input type="submit" value="Editar" name="Editar" class="btn btn-danger btn-lg btn-block">
        </form>
      </div>
      <div class="col-md-4">
        <form method="post" action="./formA_listarhotel.php" enctype="multipart/form-data" class="form">
          <input type="submit" value="Listar" name="Listar" class="btn btn-danger btn-lg btn-block">
        </form>
      </div>
    </div>
    <center><img src="img/imagen.png" height="400px" width="400px"></center><br> 
    <a href="menu_residente.php" class="btn btn-secondary btn-lg btn-block">Volver</a> <!--para salir al index principal-->
  </div>
 

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>