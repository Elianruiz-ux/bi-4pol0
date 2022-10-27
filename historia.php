<?php
require 'conexion.php';

$id = $_GET['id'];


$sql1 = "SELECT * FROM puntajes WHERE id='$id'";
$resultado = $mysqli->query($sql1);
$row = $resultado->fetch_array(MYSQLI_ASSOC);


//$sql = "SELECT h.nombre,h.puntos,h.motivos,h.fechas FROM puntajes p LEFT JOIN historial h ON p.nombre=h.nombre WHERE p.nombre='$id' ORDER BY h.fechas DESC";
$sql = "SELECT * FROM historial WHERE documento='$id' ORDER BY fechas DESC";
$historial = $mysqli->query($sql);

$sql2 = "SELECT SUM(puntos) AS pts FROM historial WHERE documento='$id'";
$suma = $mysqli->query($sql2);

?>



<?php include("template/nav.php"); ?>



<div class="tables_aling media">


    <div>
        <div class="table">
            <table class="table__list">

                <thead>
                    <tr>
                        <th colspan="1">
                            <a href="index.php"><img src="img/arrow-left.svg" alt="atras"></a>

                        </th>
                        <th></th>
                        <th>
                            <h2>Historial</h2>
                        </th>
                        <th><a class="btn btn__historial" href="redimir_premio.php?id=<?php echo $row['id']; ?>"><img src="img/trophy.svg" alt="redimir" title="Redimir puntos"></a></th>

                    </tr>
                    <tr>

                        <th>Nombre</th>
                        <th>Puntos</th>
                        <th>Motivo</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>


                    <?php while ($rows = $historial->fetch_array(MYSQLI_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $rows['nombre']; ?></td>
                            <td>+<?php echo $rows['puntos']; ?> Pts</td>
                            <td><?php echo $rows['motivos']; ?></td>
                            <td><?php echo $rows['fechas']; ?></td>
                        </tr>
                    <?php } ?>

                    <?php while ($rows = $suma->fetch_array(MYSQLI_ASSOC)) { ?>
                        <tr class="negrita">
                            <td>Total:</td>
                            <td><?php echo $rows['pts']; ?></td>
                            <td colspan="2"></td>
                            <?php } ?>
                        </tr>

                </tbody>
            </table>
        </div>
    </div>


    <?php 
    
$sql3 = "SELECT * FROM redimidos WHERE documento='$id'";
$historial_premio = $mysqli->query($sql3);

    ?>

    <div>
        <div class="table">
            <table class="table__list">
                <thead>
                    <tr>
                        <th colspan="2">
                            <h2>Premios</h2>
                        </th>
                    </tr>
                    <tr>
                        <th>Puntos | Premio</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($rows = $historial_premio->fetch_array(MYSQLI_ASSOC)) { ?>
                        <tr>
                           <td><?php echo $rows['premio_redimir']; ?></td>
                        </tr>
                    <?php }?>    
                </tbody>
            </table>
        </div>
    </div>

</div>
    
    
    <?php include("template/footer.php"); ?>