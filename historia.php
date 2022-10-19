<?php
require 'conexion.php';

$id = $_GET['id'];


$sql = "SELECT * FROM historial WHERE nombre='$id' ORDER BY fechas DESC";
//$sql = "SELECT h.nombre,h.puntos,h.motivos,h.fechas FROM puntajes p LEFT JOIN historial h ON p.nombre=h.nombre WHERE p.nombre='$id'";
$historial = $mysqli->query($sql);

?>

<?php include("template/nav.php"); ?>



    <div class="container">


    <div>
        <div class="table">
            <table class="table__list">

                <thead>
                    <tr>
                        <th colspan="4">
                            <h2>Historial</h2>
                        </th>
                    </tr>
                    <tr>

                        <th>Nombre</th>
                        <th>Puntaje</th>
                        <th>Motivo</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>


                    <?php while ($rows = $historial->fetch_array(MYSQLI_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $rows['nombre']; ?></td>
                            <td><?php echo $rows['puntos']; ?></td>
                            <td><?php echo $rows['motivos']; ?></td>
                            <td><?php echo $rows['fechas']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>





<?php include("template/footer.php"); ?>