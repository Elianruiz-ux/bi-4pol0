<?php
require 'conexion.php';

$id = $_GET['id'];


$sql1 = "SELECT * FROM puntajes WHERE id='$id'";
$resultado = $mysqli->query($sql1);
$row = $resultado->fetch_array(MYSQLI_ASSOC);


$sql = "SELECT * FROM premios ORDER BY puntaje desc";
$premio = $mysqli->query($sql);

?>



<?php include("template/nav.php"); ?>


<div>

    <div class="form__register arriba">
        <div class="form__container">
            <!-- formulario -->
            <h1>Redimir premio</h1>
            <form action="template-msg/update_redimir.php" method="POST" autocomplete="off">
                <div class="group">
                    <input type="text" name="nombre" value="" disabled /><span class="highlight"></span><span class="bar"></span>
                    <label>Usuario: <b><?php echo $row['nombre'] ?></b></label>
                </div>
                <div class="group">
                    <input type="number" name="pts" value="" required="required" pattern="[0-9]+" min="5" max="100" disabled /><span class="highlight"></span><span class="bar"></span>
                    <label>Puntos totales: <b><?php echo $row['puntaje'] ?></b></label>
                </div>
                <div>
                    <select class="form-select" name="motivo" id="motivo" aria-label="Default select example">
                        
                        <?php while ($rows = $premio->fetch_array(MYSQLI_ASSOC)) { ?>
                                <option value="Sin motivo" <?php if ($rows['puntaje'] == $rows['nombre']); ?>><?php echo $rows['puntaje'] ?> Pts vale <?php echo $rows['nombre'] ?></option>
                                <?php } ?>
                            </select>
                </div>
                <div>
                    <input type="hidden" id="id" name="id" value="<?php echo $row['id'] ?>">
                    <input type="submit" value="Redimir" class="input_btn_form">
                </div>

            </form>

            <!-- <div class="form">
                                <input type="image" value="1" name="puntaje" class="form__input" src="img/estrella.png" alt="estrella 1" onclick="puntaje()" />
                                <input type="image" value="2" name="puntaje" class="form__input" src="img/dos-estrellas.png" alt="estrella 2" />
                                <input type="image" value="3" name="puntaje" class="form__input" src="img/estrellas.png" alt="estrella 3" />
                                <input type="image" value="4" name="puntaje" class="form__input" src="img/cuatro.png" alt="estrella 4" />
                                <input type="image" value="5" name="puntaje" class="form__input" src="img/cinco.png" alt="estrella 5" />
                            </div> -->
            <div>
                
                <a class="btn btn_centrar" href="historia.php?id=<?php echo $row['id']; ?>">Volver</a>
            </div>
        </div>
    </div>
</div>



<?php include("template/footer.php"); ?>