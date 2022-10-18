
<?php include("template/nav.php"); ?>


<div>
    <!-- Formulario de registrar premio -->
    <div class="form__register">
        <div class="form__container">
            <h2>Registrar Premio</h2>
            <form action="template-msg/premio.php" method="POST" autocomplete="off">
                <div class="group">
                    <input type="text" name="nombre" required="required" pattern="[A-Z-a-z\s ]+" /><span class="highlight"></span><span class="bar"></span>
                    <label>Premio</label>
                    <input type="hidden" name="puntaje" />
                </div>

                <div class="group">
                    <input type="number" name="pts" required="required" pattern="[0-9]+" min="5" max="100" /><span class="highlight"></span><span class="bar"></span>
                    <label>Puntos</label>
                    <input type="hidden" name="puntaje" />
                </div>
                <div>

                    <input type="submit" value="Registrar" class="input_btn_form">
                </div>
            </form>
        </div>
    </div>
    </div>



<?php include("template/footer.php"); ?>