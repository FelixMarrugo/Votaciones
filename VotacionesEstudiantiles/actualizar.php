<?php
include("conexion.php");
session_start();
$us = $_SESSION['login'];

$id = $_GET['id'];
$sql = " SELECT * FROM usuarios WHERE id = '$id' ";
$query = mysqli_query($mysqli, $sql);
$datos = mysqli_fetch_array($query);
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
            .formulario
            {
                background-color: #252525;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg" style="background-color: #28C8D9;">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">COLEGIO SANTA BARBARA</a>
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
                    <li class="nav-item">
                    <a class="nav-link" href="#" >ACTUALIZAR DATOS USUARIOS</a>
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
        <!-- Formulario de acualizacion-->
        <div class="container mt-5 admin-wrapper-form">
            
            <form action="update.php" method="post" class="form">
                <h2>ACTUALIZAR DATOS</h2>
                <!-- <label for="" style="padding:0px 10px;">ID</label> -->
                    <input type="text" class = "form-control mb-3" name = "id" value = "<?php echo $datos['id']?>" readonly>
                <!-- <label for="" style="padding:0px 10px;">Usuario</label> -->
                    <input type="text" class = "form-control mb-3" name = "usuario" value = "<?php echo $datos['usuario']?>">
                <!-- <label for="" style="padding:0px 10px;">Password</label> -->
                    <input type="password" class = "form-control mb-3" name = "pw" value = "<?php echo $datos['pass']?>">
                <!-- <label for="" style="padding:0px 10px;">Rol</label> -->
                    <input type="text" class = "form-control mb-3" name = "rol" value = "<?php echo $datos['rol']?>">
                <button class="btn btn-primary" onclick="location.href='update.php?id=<?php echo $datos['id'] ?>'">Actualizar</button>
            </form>
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