<?php
require '../conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$puntaje = $_POST['pts'];

$sql = "UPDATE premios SET nombre='$nombre', puntaje='$puntaje' WHERE id='$id' ";
$resultado = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/actu.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
<div class="container">
        <div class="alert alert-secondary" role="alert">
            <?php if ($resultado) { ?>
                <h3>Se guardaron los cambios correctamente</h3>
            <?php } else { ?>
                <h3>No se guardaron los cambios</h3>
            <?php } ?>
            <div class="container">
            <a class="btn" href="../index.php">Volver</a>
        </div>
        </div>


    </div>
</body>

</html>