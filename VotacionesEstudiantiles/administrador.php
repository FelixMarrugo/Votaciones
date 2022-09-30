<?php
session_start();
$us = $_SESSION['login'];
if($_SESSION['logueado']==TRUE)
{
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panel Administrador</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <link rel="stylesheet" href="./css/estilosindex.css">
        <style>
            .color-form
            {
                background-color: #D5DBDB;
            }
            .formulario
            {
                background-color: #252525;
                
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg" style="background-color: #28C8D9;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">COLEGIO SANTA BARBARA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">AÑO 2023</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">ADMINISTRADOR</a>
                    </li>
                </ul>
                <div class="d-flex justify-content-end">
                    <div class="d-flex flex-row align-items-end" style="padding:0px 40px;">
                        <h2 ></h2>
                        <a href="cerrar_sesion.php" class="btn btn-danger" style="background-color:#E74798;"> Cerrar Sesion</a>
                    </div>
                </div>
                </div>
            </div>
        </nav>

            <!-- BODY-->
           <div class="container p-3">
                <div class="row justify-content-between">
                    <div class="col-3 col-mb-3 shadow p-3 mb-5 rounded">
                            <form action="insertar.php" method = "POST">
                            <h3 class = "text-center">Crear usuario</h3>
                                <input type="text" class="form-control mb-3" name="usuario" id = "usuario" placeholder="Usuario">
                                <input type="password" class="form-control mb-3" name="pw" id = "pw" placeholder="Contraseña">
                                <select class="form-select mb-3" name = "rol" id = "rol">
                                    <option></option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Votante">Votante</option>
                                </select>
                                <input type="submit" class= "btn btn-primary" value="Guardar">
                            </form>
                        </div>
                    
                     <!-- Mostrar Datos-->
                    <div class="col-8  col-mb-3">
                        <table class="table table-hover" >
                            <thead class ="table-success table-striped">
                                <tr>
                                    <th style="border-radius:10px 0px 0px 0px;">Código</th>
                                    <th>Nombre</th>
                                    <th>Password</th>
                                    <th>Rol</th>
                                    <th style="border-radius:0px 10px 0px 0px;">Modificadores</th>
                                </tr>
                            </thead>
                            <tbody class ="table-success table-striped" >
                            
                                <?php
                                    include("conexion.php");
                                    $sql = mysqli_query($mysqli, "SELECT * FROM usuarios")
                                    or die ("Error al conectarse a la base de datos");
                                    while($datos = mysqli_fetch_array($sql))
                                    {
                                    ?>
                                        <tr>
                                            
                                            <td><?php echo $datos['id']?></td>
                                            <td><?php echo $datos['usuario']?></td>
                                            <td><?php echo $datos['pass']?></td>
                                            <td><?php echo $datos['rol']?></td>
                                            <td>
                                                <a href="actualizar.php?id= <?php echo $datos['id']?>" class = "btn btn-info">Editar</a>
                                                <a href="eliminar.php?id= <?php echo $datos['id']?>" class = "btn btn-danger" style="background-color:#E8459C;">Eliminar</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                ?>
                            
                            </tbody>
                            </div>
                        </table>
                    </div>
                </div>
        </body>
    </html>
<?php
}
else{
?>

<script language="javascript">
        alert("Debes iniciar sesión");
        location.href="index.php";
</script>

<?php

}
?>