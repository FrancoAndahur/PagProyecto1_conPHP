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
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/logo gow.png">
    <link rel="stylesheet" type="text/css" href="css/fuentes.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/transition-style">

    <title>GOD OF WAR</title>
</head>
<body class="fondo">

    <!--Header-navegador de pagina con bootstrap-->
    <nav id="header" class="navbar navbar-expand-lg navbar-dark fixed-top">

        <div class="container">
            <a href="index.html">
                <img class="logo" src="img/logo gow.png" alt="logo gow" transition-style="in:circle:center">
            </a>
            <a href="index.html" class="navbar-brand">
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
                        <a href="#" class="nav-link"
                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Ir al inicio de la pagina">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="nosotrosd.html" class="nav-link"
                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Informacion sobre quienes somos">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        
                        <a href="#Modal" class="nav-link" data-bs-toggle="modal" 
                        data-bs-target="#Modal" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Accede al formulario de ingreso">Ingresar</a>
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
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>

        <!--Contenido multimedia de la pagina-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div id="cuadro-mult" class="card">
                        <img id="mult" src="img/kratos_1.jpg" class="card-img-top" alt="Imagen 1 kratos">
                        <div class="card-body">
                            <h5 class="card-title">Ilustracion de Kratos</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="cuadro-mult" class="card">
                        <iframe id="mult" class="dembed-responsive-item" src="https://www.youtube.com/embed/tzVk_V6w59w" height="363" width="100%"
                        title="God of War 1 -  El nacimiento de la Bestia (Video Extra - Historia)" frameborder="0" allow="accelerometer;
                        autoplay;clipboard-write; encrypted-media;
                        gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="card-body">
                            <a href="https://youtu.be/tzVk_V6w59w" target="_blank">
                            <h5>Origen de Kratos</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="separacion_aside"></div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <aside id="contenido" class="p-3">
                        <!-- Contenido del aside izquierdo -->
                        <div class>
                            <img class="img-fluid " src="img/Gow_coo.jpg" alt="Caratula GoW CoO">
                        
                            <p>
                                Chains of Olympos es la primera entrega que fue lanzada para <span>Psp</span>
                                y cronologicamente es la segunda en la saga de GoW.
                            </p>
                        </div>
                        
                        <div class="separacion_aside"></div>
                        <div>
                            <img class="img-fluid" src="img/Gow_gos.jpg" alt="Caratula GoW GoS">
                        
                            <p>
                                Ghost of Sparta fue la segunda entrega para <span>Psp</span>
                                y cronologicamente es la cuarta de la saga, despues de GoW(1)
                            </p>
                        </div>
                    </aside>
                </div>
                <div class="col-md-8">
                    <article id="contenido-m" class="p-3">
                        <!-- Contenido del artículo -->
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
                        <div class="separacion_aside"></div>
                        <h2>KRATOS</h2>
                        <p>
                            La infancia de Kratos es explicada durante el desarrollo del primer juego. Es
                            maltratado, como solía hacerse a los niños altos y fuertes en la antigua Grecia. A su
                            hermano, al tener una marca que el oráculo predijo que portaría el que causara la
                            perdición del Olimpo, Ares lo secuestra y lo lleva al reino de la muerte.
                            <br><br>
                            Después de recibir entrenamiento, Kratos, ya casado y con una hija, Calíope, se
                            convierte en un gran general del ejército espartano y prometió no detenerse hasta que
                            la gloria de Esparta estuviera en lo más alto. Las tácticas de sus ejércitos eran
                            brutales, pero muy efectivas. Sin embargo, un día, un enfrentamiento contra el
                            ejército bárbaro dio un resultado adverso para su armada. Con su ejército destruido y
                            a punto de ser asesinado por el líder bárbaro, Kratos pide la ayuda de Ares, el dios
                            de la guerra, ofreciéndole su vida a cambio. El dios desciende de los cielos y acaba
                            con todos los enemigos, luego entrega a Kratos las <span>Espadas del Caos</span>
                            que son adheridas a sus brazos por cadenas.
                            <br><br>
                            El guerrero espartano sucumbe totalmente al poder de Ares, quien le exige ciertas
                            tareas de destrucción y conquista. Las tácticas del ejército de Kratos son aún más
                            brutales que antes, asesinando sanguinariamente a cualquiera que opusiera
                            alguna mínima resistencia. En una de sus misiones, Kratos debía quemar una aldea que
                            se oponía a la armada de Esparta.En su afán de sangre y conquista, Kratos quiso
                            ingresar al templo de la aldea, el oráculo le advierte que no debía entrar, sin
                            embargo la hace a un lado e ingresa, asesinando a todos los presentes. Cuando lanza
                            por última vez sus espadas hacia sus víctimas, entiende que había asesinado a su
                            esposa e hija. Kratos queda devastado y como castigo por tal acción y brutalidad,
                            tendría adheridas sobre su piel las cenizas de su esposa e hija por la eternidad;
                            aunque Ares le explica que hizo eso para que no tenga ningún lazo afectivo y poder
                            convertirlo en el guerrero perfecto, aun así, el guerrero espartano renunció a seguir
                            siendo el súbdito del dios de la guerra.
                        </p> 
                    </article>
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-md-12">
                            <aside id="contenido" class="p-3 mb-3">
                                <!-- Contenido del aside de arriba -->
                                <img class="img-fluid" src="img/GoW(1).jpg" alt="Caratula GoW(1)">
                                <p>
                                    God of War (1) fue lanzado por primera vez el 22 de marzo de 2005
                                    para la consola PlayStation 2 <span>(PS2)</span>, es la primera entrega de la serie
                                    del mismo nombre y la tercera cronológicamente.
                                </p>
                            </aside>
                        </div>
                        <div class="col-md-12">
                            <aside id="contenido" class="p-3 mb-3">
                                <!-- Contenido del aside de abajo -->
                                <img class="img-fluid" src="img/Espadas_del_caos.jpg" alt="Espadas del caos">
                                
                                <p>
                                    Las <span>Espadas del Caos</span> son las armas principales del Dios, las cuales
                                    lo acompañan durante la mayor parte de la saga. <br> Estas están adheridas a su piel,
                                    lo que le hace imposible deshacerse de ellas.
                                </p>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="separacion_aside"></div>
            <section id="galeria">
                <img src="img/galeria1.jpg" alt="">
                <img src="img/galeria2.jpg" alt="">
                <img src="img/galeria3.jpg" alt="">
                <img src="img/galeria4.jpg" alt="">
                <img src="img/galeria5.jpg" alt="">
            
            </section>
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

    
    
    <!--formulario modal-->
    <div id="Modal" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 id="titulo-form">Ingreso</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Usuario">
                            <label for="floatingInput">Usuario</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                            <label for="floatingPassword">Contraseña</label>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Ingresar</button>
                        </div>
                        <p id="message" class="text-center mb-0 mt-4">¿no estas registrado?</p>
                        <a href="registro.html">¡Quiero registrarme!</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>

</body>
</html>