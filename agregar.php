<?php
require 'conexion.php';

$id = $_GET['id'];


$sql = "SELECT * FROM puntajes WHERE id = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);


?>

<?php include("template/nav.php"); ?>


    <div class="container">
        <div class="arriba">

            <div class="form__register ">
                <div class="form__container">
                    <!-- formulario -->
                    <h1>Agregar Puntos</h1>
                    <form action="./template-msg/update.php" method="POST" autocomplete="off">
                        <div class="group">
                            <input type="text" name="nombre" value="" required="required" pattern="[A-Z-a-z\s]+" disabled /><span class="highlight"></span><span class="bar"></span>
                            <label><?php echo $row['nombre'] ?></label>
                            <input type="hidden" name="nombress" value="<?php echo $row['nombre'] ?>">
                        </div>
                        <div class="group">
                        <select class="form-select" name="motivo" id="motivo" aria-label="Default select example">
                                <option value="Sin motivo" <?php if ($row['motivo'] == 'Sin motivo'); ?>>Motivo</option>
                                <option value="Buen comportamiento" <?php if ($row['motivo'] == 'Buen comportamiento'); ?>>Buen comportamiento</option>
                                <option value="Entrega trabajos a tiempo" <?php if ($row['motivo'] == 'Entrega trabajos a tiempo'); ?>>Entrega trabajos a tiempo</option>
                                <option value="Amigable" <?php if ($row['motivo'] == 'Amigable'); ?>>Amigable</option>
                                <option value="Responsabilidad" <?php if ($row['motivo'] == 'Responsabilidad'); ?>>Responsabilidad</option>
                            </select>

                        </div>
                        <div>
                            <select class="form-select" name="puntaje" id="puntaje" aria-label="Default select example">
                                <option value="0" <?php if ($row['puntaje'] == '0'); ?>>0</option>
                                <option value="1" <?php if ($row['puntaje'] == '1'); ?>>1</option>
                                <option value="2" <?php if ($row['puntaje'] == '2'); ?>>2</option>
                                <option value="3" <?php if ($row['puntaje'] == '3'); ?>>3</option>
                                <option value="4" <?php if ($row['puntaje'] == '4'); ?>>4</option>
                                <option value="5" <?php if ($row['puntaje'] == '5'); ?>>5</option>
                            </select>
                        </div>
                        <div>

                            <input type="hidden" id="id" name="id" value="<?php echo $row['id'] ?>">

                            <input type="submit" value="Actualizar" class="input_btn_form">
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
                        <a class="btn btn_centrar" href="index.php">Volver</a>
                    </div>

                </div>
            </div>
        </div>

    </div>






<?php include("template/footer.php"); ?>