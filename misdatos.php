<?php

    include("conexion.php");
    $con=conectar();

    session_start();
    $user= $_SESSION['username'];

    $sql="SELECT * FROM usuarios WHERE usuario='$user'";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);

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
    <nav id="header" class="navbar navbar-expand-lg navbar-dark sticky-top">

        <div class="container">
            <a href="index.php">
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
                        <a href="nosotros.php" class="nav-link"
                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Informacion sobre quienes somos">Nosotros</a>
                    </li>
                    <?php if($user){?>
                        <li class="nav-item">
                                
                            <a href="#" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="Editar datos personales"><?php echo $user ?></a>
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

        <div class="container">
            <div class="row justify-content-center mt-5">
                <div id="form-box" class="col-md-4 p-3">
                    <form class="form" action="actualizar2.php" method="POST">
                        <h3 id="titulo-form">Mis datos</h3>
                
                        <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                         
                        <h6 class="sub-titulo">Nombre:</h6>
                        <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                        <h6 class="sub-titulo">Apellido:</h6>
                        <input type="text" class="form-control mb-3" name="apellido" placeholder="apellido" value="<?php echo $row['apellido']  ?>">
                        <h6 class="sub-titulo">Usuario:</h6>
                        <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario" value="<?php echo $row['usuario']  ?>">
                        <h6 class="sub-titulo">Correo electrónico:</h6>
                        <input type="text" class="form-control mb-3" name="correo" placeholder="correo" value="<?php echo $row['correo']  ?>">
                        <h6 class="sub-titulo">Contraseña:</h6>
                        <input type="text" class="form-control mb-3" name="contraseña" placeholder="contraseña" value="<?php echo $row['contraseña']  ?>">
                        <h6 class="sub-titulo">Fecha de nacimiento:</h6>
                        <input type="date" class="form-control mb-3" name="nacimiento" placeholder="Nacimiento" value="<?php echo $row['nacimiento']  ?>">
                        <h6 class="sub-titulo">Género:</h6>
                        <select class="form-select" name="genero" value="<?php echo $row['genero']  ?>">
                            <option selected>Selecciona tu género</option>
                            <option value="Masculino" <?php if ($row['genero']=="Masculino") echo 'selected'; ?> >Masculino</option>
                            <option value="Femenino" <?php if ($row['genero']=="Femenino") echo 'selected'; ?> >Femenino</option>
                            <option value="Otro" <?php if ($row['genero']=="Otro") echo 'selected'; ?> >Otro</option>
                        </select>
                        <br>
                        <h6 class="sub-titulo">Teléfono:</h6>
                        <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']  ?>">
                                
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Actualizar</button>
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