<?php
require 'conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM premios WHERE id = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);

?>

<?php include("template/nav.php");?>
        <div>

            <div class="form__register arriba">
                <div class="form__container">
                    <!-- formulario -->
                    <h1>Modificar premio</h1>
                    <form action="template-msg/update_premio.php" method="POST" autocomplete="off">
                        <div class="group">
                            <input type="text" name="nombre" value="<?php echo $row['nombre'] ?>" pattern="[A-Z-a-z\s]+" maxlength="40"/><span class="highlight"></span><span class="bar"></span>
                            <label>Premio</label>
                        </div>
                        <div class="group">
                            <input type="number" name="pts" value="<?php echo $row['puntaje'] ?>" required="required" pattern="[0-9]+" min="5" max="100" /><span class="highlight"></span><span class="bar"></span>
                            <label>Puntos</label>
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





    <?php include("template/footer.php");?>