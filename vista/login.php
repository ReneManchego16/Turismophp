<!doctype html> 
<html lang="en"> 
<head> 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Inicio de Sesion - PeruConnect</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
 
  .btn-purple {
    background-color: green;
    color: white;
  }
</style>
</head>
<body class="bg-success">
  <section class="d-flex flex-column min-vh-100 justify-content-center align-items-center"> 
    <div class="container">
      <div class="row">
        <div class="col-md-10 mx-auto rounded shadow bg-white">
          <div class="row">
            <div class="col-md-6">
              <div class="m-5 text-center">
                <h1>Inicio de Sesion <br> (Turista)</h1>
              </div>
              <form class="m-5" action="../controlador/control.php" method="post" name="login">
                <div class="mb-3">
                  <label for="usuario" class="form-label">Codigo de usuario:</label>
                  <input type="text"  class="form-control" name="usuario" id="usuario" placeholder="Ingrese su codigo..."> 
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Contraseña:</label> 
                  <input type="password" class="form-control" name="password" id="password" maxlength="10" placeholder="Ingrese su contraseña...">
                </div>
                <div class="text-center">
                  <input class="form-control btn btn-purple mt-3" type="submit" value="Entrar">
                </div>
                <br>
                <div>
                  <label>Si eres Residente, ingresa este enlace...</label><br>
                  <a href="loginresidente.php"> Residente </a> <br><br>
                <label>Si no tienes cuenta registrate aquí: </label><br>
                  <a href="routes.php"> REGISTRARSE </a>
                </div>
              </form>
            </div>
            <div class="col-md-6">
              <div class="text-center">
                <img src="../resources/images/turista.png" alt="login" class="img-fluid p-5">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
