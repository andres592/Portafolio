<?php
$contacto = true;

require "includes/funciones.php";
incluirTemplate("header");

require "includes/config/database.php";


$bd = conectarDB();

$errores = [];
$bien = [];

$nombre =  "";
$apellido = "";
$correo = "";
$numero = "";
$servicio = "";

if (isset($_POST["enviado"])) {

    $nombre = mysqli_real_escape_string($bd, $_POST["nombre"]);
    $apellido = mysqli_real_escape_string($bd, $_POST["apellido"]);
    $correo = mysqli_real_escape_string($bd, $_POST["correo"]);
    $numero = mysqli_real_escape_string($bd, $_POST["numero"]);
    $servicio = mysqli_real_escape_string($bd, $_POST["servicio"]);

    if (!$nombre) {
        $errores[] = "El nombre no puede estar vacío";
    }

    if (!$apellido) {
        $errores[] = "El apellido no puede estar vacío";
    }

    if (!$correo) {
        $errores[] = "El correo no puede estar vacío";
    }

    if (!$numero) {
        $errores[] = "El numero no puede estar vacío";
    }

    if (!$servicio) {
        $errores[] = "El servicio no puede estar vacío";
    }
    if (empty($errores)) {
        $query = "INSERT INTO datos (nombre, apellido, correo, numero, servicio)
        VALUES ('$nombre', '$apellido', '$correo', '$numero', '$servicio')";

        $resultado = mysqli_query($bd, $query);
        if ($resultado) {
            $bien[] = "Enviado correctamente";
        }
    }
}







?>

<div class="main">
    <section class="contacto contenedor">
        <article class="formulario">
            <form method="POST">
                <fieldset>
                    <legend>
                        <h1>Contactar</h1>
                    </legend>


                    <?php foreach ($errores as $error) { ?>
                        <div class="error">
                            <?php echo $error . "<br>"; ?>
                        </div>
                    <?php } ?>

                    <?php foreach ($bien as $b) { ?>
                        <div class="bien">
                            <?php echo $b ?>
                        </div>
                    <?php } ?>

                    <div class="form-floating mb-3 nombre">
                        <input type="text" class="form-control" id="floatingInput" name="nombre" placeholder="Tu nombre" value="<?php echo $nombre ?>">
                        <label for="floatingInput">Nombre</label>
                    </div>

                    <div class="form-floating mb-3 nombre">
                        <input type="text" class="form-control" id="floatingInput" name="apellido" placeholder="Tu apellido" value="<?php echo $apellido ?>">
                        <label for="floatingInput">Apellido</label>
                    </div>



                    <div class="form-floating mb-3 campo">
                        <input type="email" class="form-control" id="floatingInput" name="correo" placeholder="tucorreo@ejemplo.com" value="<?php echo $correo ?>">
                        <label for="floatingInput">Correo electrónico</label>
                    </div>
                    <div class="form-floating mb-3 campo">
                        <input type="tel" class="form-control" id="floatingPassword" name="numero" placeholder="123 456 7890" value="<?php echo $numero ?>">
                        <label for="floatingPassword">Número celular</label>
                    </div>

                    <div class="formulario-servicio">
                        <label for="">¿Qué servicio buscas?</label>
                        <select name="servicio" id="" value="<?php echo $servicio ?>">
                            <option value="">--Seleccionar--</option>
                            <option value="Desarrollo web">Desarrollo Web</option>
                            <option value="Diseño">Diseño</option>
                            <option value="Fotografía">Fotografía</option>
                        </select>
                    </div>

                    <div class="cont-btn">
                        <input type="submit" value="Enviar" class="boton" name="enviado">

                    </div>
                </fieldset>

            </form>


        </article>

        <article class="ubicacion">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d994.1999125484192!2d-74.18032873043!3d4.629803336438134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNMKwMzcnNDcuMyJOIDc0wrAxMCc0Ni45Ilc!5e0!3m2!1ses!2sco!4v1682733834541!5m2!1ses!2sco" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </article>
    </section>
</div>

<?php

incluirTemplate("footer", $inicio_enlace = false, $diseno_enlace = false, $contacto = true);
?>