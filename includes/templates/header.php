<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--slick-slider-->
    <link rel="stylesheet" rel="preload" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" rel="preload" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" rel="preload" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;700&family=Unbounded&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="builder/css/app.css">
    <link rel="icon" type="image/png" href="src/scss/img/proto.png">
    <title>Andrés Orduz</title>
</head>

<body>
    <section class="header">
        <div class="logotipo">
            <img src="src/scss/img/proto.png" alt="Logotipo">
        </div>
        <nav class="navegacion">
            <ul>
                <li><a class="<?php echo $inicio_enlace ? 'enlace-activo' : 'menu-enlace' ?>" href="index.php">Inicio</a></li>
                <li><a class="<?php echo $dw_enlace ? 'enlace-activo' : 'menu-enlace' ?>" href="desarrollo-web.php">Desarrollo Web</a></li>
                <li><a class="<?php echo $diseno_enlace ? 'enlace-activo' : 'menu-enlace' ?>" href="diseño.php">Diseño publicitario</a></li>
                <li><a class="<?php echo $fotografia_enlace ? 'enlace-activo' : 'menu-enlace' ?>" href="fotografia.php">Fotografía</a></li>
                <li><a href="/webdev/contactar.php"><button class="boton">Contactar</button></a></li>
            </ul>
        </nav>
        <button class="menu-hamburguesa" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><img src="builder/img/menu.webp"></button>

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="Menú principal">
            <div class="offcanvas-header">
                <nav class="navegacion mostrar">
                    <ul>
                        <li><a class="<?php echo $inicio_enlace ? 'enlace-activo' : 'menu-enlace' ?>" href="index.php">Inicio</a></li>
                        <li><a class="<?php echo $dw_enlace ? 'enlace-activo' : 'menu-enlace' ?>" href="desarrollo-web.php">Desarrollo Web</a></li>
                        <li><a class="<?php echo $diseno_enlace ? 'enlace-activo' : 'menu-enlace' ?>" href="diseño.php">Diseño publicitario</a></li>
                        <li><a class="<?php echo $fotografia_enlace ? 'enlace-activo' : 'menu-enlace' ?>" href="fotografia.php">Fotografía</a></li>
                        <li><a href="/webdev/contactar.php"><button class="boton">Contactar</button></a></li>
                    </ul>
                </nav>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p>Gracias por estar aquí <br>❤</p>
            </div>
        </div>
    </section>