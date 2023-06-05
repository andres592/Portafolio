<?php
$fotografia_enlace = true;
require "includes/templates/header.php";
require "includes/templates/whatsapp.php"
?>

<main class="fotografia contenedor">
    <div class="introduccion">
        <h1>F<img src="src/scss/img/diafragma-02.png">tografía</h1>
        <p>A continuación podrás ver algunos de mis trabajos fotográficos más recientes</p>
    </div>

    <section class="humming-fotos">
        <article class="imagen-camara">
            <img src="src/scss/img/presentacion-fotografia.png" alt="">
        </article>
        <article class="presentacion">
            <div class="cont-logos">
                <img class="logo" src="src/scss/img/diseño/logo-humming.png" alt="">
                <img class="logo" src="src/scss/img/diseño/mirielle-rosado-03.png" alt="">
            </div>
            <p>
                Durante mi experiencia laboral en Humming, una exitosa empresa de ropa interior, tuve la oportunidad de
                trabajar en el departamento de fotografía y edición, lo que me permitió desarrollar habilidades que hoy
                en día son esenciales en el mundo digital. Pude trabajar en el area de fotografía como fotógrafo y editor,
                mi tarea era capturar y resaltar la belleza y calidad de sus productos, además de los de la empresa aliada
                Mirielle.
            </p>
            <p>A través de la edición, podía darle el toque final a las imágenes, añadir detalles y corregir
                imperfecciones para lograr una imagen final de alta calidad.
                Mi experiencia en Humming me inspiró a seguir trabajando en el mundo de la fotografía y la edición.
                Descubrí que la creatividad y la pasión pueden hacer la diferencia en cualquier trabajo,
                y que cada proyecto es una oportunidad para aprender algo nuevo.
            </p>
        </article>
        <article class="contenedor-imagenes">

            <div class="frontal b">
                <img class="posterior clothes-img" src="builder/img/fotografias/525-posterior.webp" alt="">
            </div>

            <div class="frontal a">
                <img class="posterior clothes-img" src="builder/img/fotografias/4210-posterior.webp" alt="">
            </div>

            <div class="frontal c">
                <img class="posterior clothes-img" src="builder/img/fotografias/51523-posterior.webp" alt="">
            </div>

            <div class="frontal n6">
                <img class="posterior clothes-img" src="builder/img/fotografias/1714-posterior.webp" alt="">
            </div>
        </article>

        <a href="imagenes.php" style="grid-column: 1 / 3; margin:4rem auto;">
            <button class="boton">Ver todas <img style="width:2.5rem" src="src/scss/img/acercarse.png" alt=""> </button>
        </a>


    </section>
</main>


<?php
require "includes/templates/footer.php";
?>