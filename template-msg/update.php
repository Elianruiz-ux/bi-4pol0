<?php
require '../conexion.php';

$id = $_POST['id'];
$puntaje = $_POST['puntaje'];
$motivo = $_POST['motivo'];
$nombre = $_POST['nombress'];
$docu = $_POST['docus'];

// $sql = "UPDATE puntajes SET puntaje=puntaje+'$puntaje', motivo='$motivo', punto='$puntaje' WHERE id='$id' ";
$sql1 = "INSERT INTO historial (puntos,motivos,nombre,fechas,documento) VALUE ('$puntaje', '$motivo', '$nombre',sysdate(),'$docu')";
$resultado = $mysqli->query($sql1);  

$sql = "UPDATE puntajes SET id='$id', puntaje=puntaje+'$puntaje' WHERE id='$id' ";
$resultado = $mysqli->query($sql);  
//$sql = "UPDATE historial SET nombre='$nombre', puntos='$puntaje', motivos='$motivo', fechas='sysdate()' WHERE id='$id' ";

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
              <h3>  Se guardo correctamente el puntaje </h3>
            <?php } else { ?>
             <h3>   No se pudo guardar el puntaje </h3>
            <?php } ?>

            <div class="container">
            <?php
                $sql = "SELECT * FROM puntajes WHERE id='$id'";
                $resultado = $mysqli->query($sql);
                $row1 = $resultado->fetch_array(MYSQLI_ASSOC);
                ?>
                <a class="btn" href="../agregar.php?id=<?php echo $row1['id']; ?>">Volver</a>
        </div>
        </div>

        

    </div>

</body>

</html>