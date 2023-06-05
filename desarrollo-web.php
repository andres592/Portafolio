<?php

require "includes/funciones.php";
incluirTemplate("header", $inicio_enlace = false, $diseño_enlace = false, $contacto = false, $dw_enlace = true);
?>

<div class="presentacion-dw contenedor">
    <h1 class="titulo-dw">Desarrollo Web<span class="cursor"></span></h1>
   <p>A continuación verás algunos de mis trabajos de desarrollo web más recientes</p>

<section class="portal">
    <article>
    <img class="logo" src="src/scss/img/diseño/logo-portal-02.png" alt="">
    <p>Una empresa especializada en la venta de ropa para toda la familia; durante mi tiempo en la compañía, fui
        responsable del desarrollo del sitio web de la empresa,
        lo que implicó trabajar en una amplia variedad de tareas para asegurar que el sitio estuviera en perfecto
        estado, como parte de mi trabajo y con mis conocimientos en diseño pude crear una interfaz de usuario visualmente
        atractiva y fácil de usar, lo que incluyó la implementación de características como navegación intuitiva, opciones
        de búsqueda y filtros avanzados para ayudar a los clientes a encontrar rápidamente lo que están buscando.
    </p>
    <p>Además, también me encargué de trabajar en la optimización del sitio web para garantizar que se cargara rápidamente
        y funcionara sin problemas, lo que implicó la realización de pruebas de rendimiento y la optimización de la velocidad
        de carga.</p>
    </article>
    <div class="contenedor-imagen">
    <img loading="lazy" src="PORTAL.png" alt="">
    <button></button>
    </div>
</section>
</div>
<?php incluirTemplate("whatsapp")?>


<?php
incluirTemplate("footer");
?>