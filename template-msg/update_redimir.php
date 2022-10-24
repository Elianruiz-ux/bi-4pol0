<?php
    require '../conexion.php';

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

            <?php

            $id = $_POST['id'];
            $premio = $_POST['premio'];

            if ($_POST['puntos1'] < $premio) {
                printf("<h3 class='warning'> No se pudo redimir el premio</h3>");
            } else {

                $sql = "UPDATE puntajes SET id='$id', puntaje=puntaje-'$premio' WHERE id='$id' ";
                $resultado = $mysqli->query($sql);

                if ($resultado) {
                    printf("<h3> Se redimio correctamente</h3>");
                } else {
                    printf("<h3 class='warning'> No se pudo redimir el premio</h3>");
                }
            }
            ?>
            <div class="container">
                <a class="btn" href="../index.php">Volver</a>
            </div>
        </div>



    </div>

</body>

</html>