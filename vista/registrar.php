<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>PerúConnect</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <h2>PeruConnect</h2>
    <form method="post" action="../modelo/editaU_usuario.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="codturista" class="form-label">DNI:</label>
        <input type="number" name="codturista" id="codturista" class="form-control" placeholder="DNI" required>
      </div>
      <div class="form-group">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
      </div>
      <div class="form-group">
        <label for="apellido" class="form-label">Apellidos:</label>
        <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" required>
      </div>
      <div class="form-group">
        <label for="correo" class="form-label">Email:</label>
        <input type="correo" name="correo" id="correo" class="form-control" placeholder="email@.gmail" required>
      </div>
      <div class="form-group">
        <label for="telefono" class="form-label">Teléfono:</label>
        <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="xxx-xxx-xxx" required>
      </div>
      <div class="form-group">
        <label for="clave" class="form-label">Contraseña:</label>
        <input type="password" name="clave" id="clave" class="form-control" placeholder="Contraseña" maxlength="20" required>
      </div>
      <div class="form-group">
        <label for="idrol" class="form-label">Rol:</label>
        <select name="idrol" class="form-control">
          <option value="1">Viajero</option>
          <option value="2">Aventurero</option>
        </select>
      </div>
      <div class="form-group text-center">
        <input type="submit" value="Registrar" name="enviar" class="btn btn-primary">
      </div>
    </form>
    <div class="text-center">
      <a href="./routes.php" class="btn-back">Volver</a>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>