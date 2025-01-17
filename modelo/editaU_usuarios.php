<?php 
include("../conexion.php");
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edita Usuarios</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                background-color: #f2f2f2;
                padding-top: 0px;
            }
            
            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            
            .card {
                max-width: 500px;
                text-align: center;
                padding: 20px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
            }
            
            .btn-primary {
                margin-top: 20px;
                background-color: #ff6600; 
            }
        </style>
    </head>
<body>
    <div class="container">
        <div class="card">
        <?php         
        $link = conectarse();
        $id=$_POST['codturista'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $telefono=$_POST['telefono'];
        $contrasenia=$_POST['contra'];
        $correo=$_POST['correo'];       
        if (isset($_POST['idrol'])) {
            $idrol = $_POST['idrol'];
        }  

        $query = "update turista set  nombre='$nombre',apellido='$apellido',
        correo='$correo',telefono='$telefono',contraseña='$contrasenia',fk_idrol='$idrol' where codturista='$id'";
        $rs = mysqli_query($link,$query);
        mysqli_close($link);        
        if ($rs == 1) {
            echo '<div class="h1 font-weight-bold" role="alert">';
            echo 'El registro del usuario fue realizado con éxito, es encesario vovler a iniciar sesión';
            echo '</div>';
            echo '<hr>';
            echo '<a class="btn btn-primary font-weight-bold" href="../index.php">Retornar</a>';
        } else {
            echo '<div class="alert alert-danger" role="alert">';
            echo 'Error al actualizar el registro de usuario';
            echo '</div>';
            echo '<br>';
            echo '<br>';
            echo '<a class="btn btn-primary font-weight-bold" href="../index.php">Retornar</a>';
        }
        ?>
        </div>     
    </div>
</body>
</html>