<?php

    include("conexion.php");
    $con=conectar();

    session_start();
    $user= $_SESSION['username'];


?>


<!DOCTYPE html>
<html lang="es-ES">

<head>
    <!-- INFORMACION DE LA PAGINA -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/logo gow.png">
    <link rel="stylesheet" type="text/css" href="css/fuentes.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title>GOD OF WAR</title>
</head>

<body class="fondo">

    <!--Header-navegador de pagina con bootstrap-->
    <nav id="header" class="navbar navbar-expand-lg navbar-dark fixed-top">

        <div class="container">
            <a href="index.html">
                <img class="logo" src="img/logo gow.png" alt="logo gow" transition-style="in:circle:center">
            </a>
            <a href="index.php" class="navbar-brand">
            <h2 transition-style="in:wipe:right">GOD OF WAR</h2> </a>
            <button class="navbar-toggler" type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarS"
            aria-controls="navbarS" 
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarS">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link"
                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Ir al inicio de la pagina">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"
                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Informacion sobre quienes somos">Nosotros</a>
                    </li>
                    <?php if($user){?>
                        <li class="nav-item">
                                
                            <a href="misdatos.php" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="salir de la sesion"><?php echo $user ?></a>
                        </li>
                    <?php }?>
                    <?php if($user){?>
                        <li class="nav-item">
                                
                            <a href="salir.php" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="salir de la sesion">Salir</a>
                        </li>
                    <?php } else{?>
                        <li class="nav-item">
                                
                            <a href="#Modal" class="nav-link" data-bs-toggle="modal" 
                                data-bs-target="#Modal" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="Accede al formulario de ingreso">Ingresar</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>


    <!--Contenido de la pagina con bs-->
    <div class="container">

        <!--Carrusel de imagenes como banner con bs-->
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/kratos banner_1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/kratos banner_2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/kratos banner_3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <article id="contenido-m" class="p-3">
                        <h2>Quienes somos</h2>
                        <p>Somos una pagina tipo "foro", destinada principalmente a la entrega de 
                            información sobre esta saga tan amada llamada "God of war", las cual cuenta con 
                            una infinidad de información para poder nutrir nuestro hambre de 
                            conocimiento. Toda información contenida en esta pagina, esta basada casi en su 100%
                            en los juegos de la saga, además de otros sitios con información original y legítima.
                        </p>
                    </article>
                </div>
            </div>
        </div>

        <div class="separacion_aside"></div>

        <div class="container">
            <div class="row">
                    <div class="col-md-9">
                        <!-- Contenido del artículo -->
                        <article id="contenido-m" class="p-3">
                            <h2>¿Que es God of War?</h2>
                            <p>
                                <b>God of War</b> es una franquicia de videojuegos hack and slash creada por SCE Santa
                                Monica Studio y distribuida por Sony Computer Entertainment. Se basa en las aventuras
                                de un semidiós espartano, <span>Kratos</span>, quien se enfrenta a
                                diversos personajes de la mitología griega y nórdica, tanto héroes como (Heracles,
                                Teseo, Perseo, etc.); especies mitológicas (gorgonas, arpías, o minotauros); dioses
                                griegos (Ares, Poseidón, Zeus, entre otros), titanes (como Cronos) y dioses
                                primordiales (como Gaia). Aunque el guerrero espartano acostumbra enemistad con la
                                mayoría de los dioses, recibe ayuda de muchos de ellos en algún momento de cada
                                entrega, en especial de Atenea.
                            </p>
                        </article>
                        <article id="contenido-m" class="p-3">
                            <h2>¿Que es God of War?</h2>
                            <p>
                                <b>God of War</b> es una franquicia de videojuegos hack and slash creada por SCE Santa
                                Monica Studio y distribuida por Sony Computer Entertainment. Se basa en las aventuras
                                de un semidiós espartano, <span>Kratos</span>, quien se enfrenta a
                                diversos personajes de la mitología griega y nórdica, tanto héroes como (Heracles,
                                Teseo, Perseo, etc.); especies mitológicas (gorgonas, arpías, o minotauros); dioses
                                griegos (Ares, Poseidón, Zeus, entre otros), titanes (como Cronos) y dioses
                                primordiales (como Gaia). Aunque el guerrero espartano acostumbra enemistad con la
                                mayoría de los dioses, recibe ayuda de muchos de ellos en algún momento de cada
                                entrega, en especial de Atenea.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-3">
                        <article id="contenido-m" class="p-3">
                            <img src="img/Kratos_faceoff.jpg" class="card-img-top" alt="Imagen 1 kratos">
                        </article>
                        
                
                    </div>
                </div> 
            </div>
        </div>

        <div class="separacion_aside"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <article id="contenido-m" class="p-3">
                        <img src="img/Mapa_de_God_of_War_3.jpg" class="card-img-top" alt="Imagen 1 kratos">
                    </article>
                </div>
                <div class="col-md-4">
                    <article id="contenido-m" class="p-3">
                        <img src="img/Kratos_de_espalda.jpg" class="card-img-top" alt="Imagen 1 kratos">
                    </article>
                </div>
                <div class="col-md-4">
                    <article id="contenido-m" class="p-3">
                        <a href="https://www.juegosdiarios.com/juegos/god-of-war.html" target="_blank">
                            <img src="img/juego_pirata_GOW.png" class="card-img-top" alt="Imagen 1 kratos">
                        </a>
                    </article>
                </div>
            </div>
        </div>

    </div>
    <div class="separacion_aside"></div>
    
    <!-- Footer -->
    <footer class="container-fluid p-3">
        <div class="row">
            <div class="col-4">
                <!-- contenido para la columna de la izquierda -->
                <a id="link-adm" href="usuarios.php">Administrador</a>
    
            </div>
            <div class="col-4">
                <!-- contenido para la columna del medio -->
                <span class="text-muted">KISHU | Copyright © Todos los derechos reservado |
                    <script>document.write(new Date().getFullYear())</script>
                </span>
            </div>
            <div class="col-4">
                <!-- contenido para la columna de la derecha -->
                <div class="conteudo">
                    <span>Redes</span>
                    <a class="links__gerais" target="_blank" href="https://www.instagram.com/aedjiko.o">
                        <img src="./img/ic-instagram.png">
                    </a>
                    <a class="links__gerais" target="_blank" href="https://github.com/FrancoAndahur">
                        <img src="./img/ic-github.png">
                    </a>
                    <a class="links__gerais" target="_blank" href="https://www.linkedin.com">
                        <img src="./img/ic-linkedin.png">
                    </a>
                    <a class="links__gerais" target="_blank" href="https://youtu.be/jfKfPfyJRdk">
                        <img src="./img/ic-youtube.png">
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>


</body>

</html>