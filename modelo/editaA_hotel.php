<!DOCTYPE html>
<html>
<head>
    <title>Registro de Hotel</title>
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
            // Incluir módulo de conexión
            include("../conexion.php");
            $link = conectarse();
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $email = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $resena = $_POST['resena'];
            if (isset($_POST['ciudad'])) {
                $ciudad = $_POST['ciudad'];
            }

            $orden = "INSERT INTO `hotel` (`nombre`, `direccion`, `correo`, `telefono`, `resena`, `fk_nomciudad`) VALUES ('$nombre', '$direccion', '$email', '$telefono', '$resena', '$ciudad')";
            $rs = mysqli_query($link, $orden) or die("Fallo en la consulta");

            if ($rs == 1) {
                echo '<div class="h1 font-weight-bold" role="alert">';
                echo 'El registro del nuevo hotel fue insertado con éxito, suerte en tu negocio';
                echo '</div>';
                echo '<hr>';
                echo '<a class="btn btn-primary font-weight-bold" href="../vista/residente/menu_residente.php">Retornar</a>';
            } else {
                echo '<div class="alert alert-danger" role="alert">';
                echo 'Error al insertar el registro de nuevo hotel';
                echo '</div>';
                echo '<br>';
                echo '<br>';
                echo '<a class="btn btn-primary font-weight-bold" href="../vista/residente/formA_agregarresta.php">Retornar</a>';
            }

            mysqli_close($link);
            ?>
        </div>
    </div>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>