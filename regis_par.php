
<?php include("template/nav.php"); ?>


<div>




<!-- Formulario -->
<div>
    <!-- Formulario de registrar participante -->
    <div class="form__register">
        <div class="form__container">
            <h2>Registrar participante</h2>
            <form action="template-msg/principal.php" method="POST" autocomplete="off">
                <div class="group">
                    <input type="text" name="nombre" required="required" pattern="[A-Z-a-z\s]+" /><span class="highlight"></span><span class="bar"></span>
                    <label>Nombre</label>
                    <input type="hidden" name="puntaje" />
                </div>
                <input type="submit" value="Registrar" class="input_btn_form">
            </form>
        </div>
    </div>
</div>


 



<?php include("template/footer.php"); ?>