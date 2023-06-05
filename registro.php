<?php

    include("conexion.php");
    $con=conectar();

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
            <img class="logo" src="img/logo gow.png" alt="logo gow">
            <a href="index.php" class="navbar-brand">
                <h2>GOD OF WAR</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
                aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarS">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="nosotros.php" class="nav-link">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Ingresar</a>
                    </li>
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

        <!--Contenido multimedia de la pagina-->

        <div class="container">
            <div class="row justify-content-center mt-5">
                <div id="form-box" class="col-md-4 p-3">
                    <form class="form" action="insertar2.php" method="POST">
                        <h3 id="titulo-form">Ingrese datos</h3>
                
                        <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" autocomplete="off">
                        <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido" autocomplete="off">
                        <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario" autocomplete="off">
                        <input type="email" class="form-control mb-3" name="correo" placeholder="Correo" autocomplete="off">
                        <input type="password" class="form-control mb-3" name="contraseña" placeholder="Contraseña" autocomplete="off">
                        <h6 class="sub-titulo">Fecha de nacimiento:</h6>
                        <input type="date" class="form-control mb-3" name="nacimiento" placeholder="Nacimiento">
                        <select class="form-select" name="genero">
                                    <option selected>Selecciona tu género</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Otro">Otro</option>
                        </select>
                        <br>
                        <input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono" autocomplete="off">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Registrarse</button>
                        </div>
                    </form>
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