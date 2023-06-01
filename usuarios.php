<?php
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM usuarios";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);

    session_start();
    $user= $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Usuarios</title>
    <link rel="stylesheet" href="css/estilos-crud.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<script>
    function confirmacion(){
        var respuesta=confirm("¿Desea borrar permanentemente el registro?");
        if(respuesta==true){
            return true;
        }
        else{
            return false;
        }
    }
</script>
<body class="body" background="img/fondo-crud.jpg">

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

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2">
                <h3 id="titulo">Ingrese datos</h3>
                <form action="insertar.php" method="POST">
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                    <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario">
                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                    <input type="text" class="form-control mb-3" name="contraseña" placeholder="Contraseña">
                    <h6 id="titulo">Fecha de nacimiento:</h6>
                    <input type="date" class="form-control mb-3" name="nacimiento" placeholder="Nacimiento">
                    <select class="form-select" name="genero">
                                <option selected>Selecciona tu género</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Otro">Otro</option>
                    </select>
                    <br>
                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
            <div class="col-md-9">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Contraseña</th>
                            <th>Nacimiento</th>
                            <th>Género</th>
                            <th>Teléfono</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody id="tabla">
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php echo $row['id']?></th>
                                <th><?php echo $row['nombre']?></th>
                                <th><?php echo $row['apellido']?></th>
                                <th><?php echo $row['usuario']?></th>
                                <th><?php echo $row['correo']?></th>
                                <th><?php echo $row['contraseña']?></th>
                                <th><?php echo date("d/m/Y", strtotime($row['nacimiento']))?></th>
                                <th><?php echo $row['genero']?></th>
                                <th><?php echo $row['telefono']?></th>

                                <th><a href="editar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirmacion()">Eliminar</a></th> 
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>