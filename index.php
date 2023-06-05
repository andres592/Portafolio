<?php
require "includes/funciones.php";
incluirTemplate("header", $inicio_enlace = true);

$resultado = $GET_["result"] ?? null;
?>
<?php incluirTemplate("whatsapp") ?>


<section class="overlay">

    <div class="contenido-overlay">
        <article class="contenedor presentacion">
            <?php if (intval($resultado) === 1) { ?> <!--Intval para que el la variable resultado tenga el valor entero, ya que co  get llega en string-->
                <p class="alerta exito">Anuncio Creado Correctamente</p>
            <?php } ?>
            <div class="presentacion-texto">
                <h2>Creo <b>experiencias</b>, <br> crezco <b>contigo</b></h2>
                <p>Construyamos juntos un nuevo camino.</p>
                <button class="boton">Hablemos<img style="filter: invert(1);" src="src/scss/img/burbuja-de-dialogo.png"></button>
            </div>
            <div>
                <img class="img-movimiento" src="src/scss/img/11669143_20943761 [Convertido]-01.png" alt="Web-developer">
            </div>
        </article>
    </div>
    <img src="src/scss/img/fondo-01-01.png" style="width:100%;" alt="">
</section>


<section class="contenedor sobre-mi">
    <h1>Un poco de mi... </h1>

    <article class="interno">
        <img src="src/scss/img/foto-perfil.jpeg" alt="Fotografia de perfil">

        <p>Mi nombre es Andrés Orduz, tengo 22 años, soy tecnólogo en análisis y desarrollo de sistemas de información,
            apasionado por el desarrollo web, el diseño publicitario y la fotografía, me gusta enfrentar nuevos desafíos y aprender
            de cada experiencia. Mi objetivo es crear soluciones innovadoras y visualmente atractivas
            en cada proyecto en el que participo, ya que creo que esto puede marcar la diferencia en el mundo digital.
        </p>

    </article>

</section>


<section class="contenedor contenedor-servicios">
    <h1>Mis servicios</h1>
    <div class="servicios">
        <div class="servicio" data-aos="zoom-in">
            <h2>Desarrollo Web<img src="src/scss/img/desarrolloweb-icono_Mesa de trabajo 1_Mesa de trabajo 1.png">
            </h2>
            <p>Desarrollo sitios web a medida, enfocándome en la creación de
                soluciones personalizadas para cada proyecto y en brindar una experiencia agradable para los usuarios.</p>
            <a href="desarrollo-web.php"><button class="boton btn-servicio">Ver más</button></a>
        </div><!--Servicio-->

        <div class="servicio" data-aos="zoom-in">
            <h2>Diseño publicitario<img src="src/scss/img/icono-diseño_Mesa de trabajo 1.png"></h2>
            <p>Creo soluciones visuales atractivas y efectivas para proyectos en línea, con un enfoque en la identidad
                de la marca y la experiencia del usuario.
            </p>
            <a href="diseño.php"><button class="boton btn-servicio">Ver más</button></a>
        </div><!--Servicio-->

        <div class="servicio" data-aos="zoom-in">
            <h2>Fotografía<img src="src/scss/img/camara-icono.png"></h2>
            <p>Capturo la esencia de tus productos a través de mi lente y les doy un toque especial mediante edición fotográfica.</p>
            <a href="fotografia.php"> <button class="boton btn-servicio">Ver más</button> </a>
        </div><!--Servicio-->

    </div>
</section>

<!-- <section class="aviso-legal" id="aviso1">
    <h2>Utilizamos Cookies</h2>
    <p>Esta web utiliza cookies propias y de terceros para su correcto funcionamiento y para fines analíticos. Al hacer clic en el botón Aceptar, acepta el uso de estas tecnologías y el procesamiento de sus datos para estos propósitos.</p>
    <div class="contenedor-btns">
        <form action="">
            <input class="boton" id="aviso">Aceptar
            <input class="boton">Rechazar
        </form>
    </div>
</section> -->


<?php
incluirTemplate("footer");
?>