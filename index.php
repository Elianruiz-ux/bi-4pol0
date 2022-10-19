<?php
require 'conexion.php';


$sql = "SELECT * FROM puntajes ORDER BY puntaje desc";
$resultado = $mysqli->query($sql);

$sql = "SELECT * FROM premios ORDER BY puntaje desc";
$premio = $mysqli->query($sql);


?>

<?php include("template/nav.php"); ?>


<div class="tables_aling">

    <!-- Lista -->
    <div>
        <div class="table">
            <table class="table__list">

                <thead>
                    <tr>
                        <th colspan="6">
                            <h2>Tabla de puntaciones</h2>
                        </th>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <th>Historial</th>
                        <th>Nombre</th>
                        <th>Puntaje</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><a href="historia.php?id=<?php echo $row['nombre']; ?>" class="agregar__punto"><img src="img/clipboard.svg" alt=""></a></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><span>+<?php echo $row['puntaje']; ?> Pts</span></td>
                            <td><a href="agregar.php?id=<?php echo $row['id']; ?>" class="agregar__punto"><span>+</span><img src="img/estrellamas.svg" alt=""></a></td>
                            <td><a data-href="template-msg/eliminar.php?id=<?php echo $row['id']; ?><?php echo $row['nombre']; ?>" class="basurera" data-bs-toggle="modal" data-bs-target="#eliminar"><img src="img/basura.svg" alt=""></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>





    <!-- Lista -->
    <div>
        <div class="table">
            <table class="table__list">
                <thead>
                    <tr>
                        <th colspan="5">
                            <h2>Premios</h2>
                        </th>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <th>Premio</th>
                        <th>Puntaje</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $premio->fetch_array(MYSQLI_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><span>+<?php echo $row['puntaje']; ?> Pts</span></td>
                            <td><a href="modificar_premio.php?id=<?php echo $row['id']; ?>" class="agregar__punto"><img src="img/lapiz.svg" alt=""></a></td>
                            <td><a data-href="./template-msg/eliminar_premio.php?id=<?php echo $row['id']; ?>" class="basurera" data-bs-toggle="modal" data-bs-target="#eliminar_premio"><img src="img/basura.svg" alt=""></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>




</div>








<!-- Modal participante-->
<div class="container">
    <div>
        <div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar participante</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Desea eliminar el participante?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="input_btn_form" data-bs-dismiss="modal">Cancelar</button>
                        <a type="submit" class="input_btn_eliminar btn-ok" data-href="template-msg/eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div>
        <div class="modal fade" id="eliminar_premio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar premio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Desea eliminar el premio?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="input_btn_form" data-bs-dismiss="modal">Cancelar</button>
                        <a type="submit" class="input_btn_eliminar btn-ok" data-href="template-msg/eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?php include("template/footer.php"); ?>