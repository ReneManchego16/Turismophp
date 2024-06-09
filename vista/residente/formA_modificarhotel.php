<!-- Empezado por Rene Poma Manchego -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mantenimiento Restaurante</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .form-control {
            width: 100%;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #545b62;
            border-color: #545b62;
        }
    </style>
</head>
<body>
    <div class="container">
        <article>
            <?php
            include("../../conexion.php");
            $link = conectarse();
            $id = $_GET['cod'];
            $nombre = $_GET['nombre'];
            $direccion = $_GET['direccion'];
            $telefono = $_GET['tel'];
            $resena = $_GET['resena'];
            $correo = $_GET['email'];
            $ciudad = $_GET['fk_nomciudad'];
            ?>
            <form method="post" action="../../modelo/editaA_hotel.php" enctype="multipart/form-data">
                <h3 class="mb-4">EDITAR HOTEL</h3>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre ?>" />
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo $direccion ?>" />
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono:</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $telefono ?>" />
                </div>
                <div class="form-group">
                    <label for="correo">Correo Electronico:</label>
                    <input type="text" class="form-control" name="correo" id="correo" value="<?php echo $correo ?>" />
                </div>
                <div class="form-group">
                    <label for="resena">Reseña:</label>
                    <input type="text" class="form-control" name="resena" id="resena" value="<?php echo $resena ?>" />
                </div>
                <div class="form-group">
                    <label for="ciudad">Ciudad:</label>
                    <select class="form-control" name="ciudad">
                        <option value="Tacna" <?php if ($ciudad == 1) echo 'selected'; ?>>Tacna</option>
                        <option value="Lima" <?php if ($ciudad == 2) echo 'selected'; ?>>Lima</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="Actualizar Hotel" />
                <input type="hidden" value="<?= $id ?>" name="id">
            </form>
            <a class="btn btn-secondary mt-3" href="index.php">Volver</a>
        </article>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>