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
            .buttons
            {
            width:400px; 
            background-color:#0B5ED7; 
            color:white;
            }
            .table-resultados
            {
                padding:20px 0px; background-color:#D1E7DD; border-radius:20px; border:1px solid #000000;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg" style="background-color: #28C8D9;">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">COLEGIO SANTA BARBARA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">AÑO 2023</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="./administrador.php">ADMINISTRADOR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./resultadosVotaciones.php">RESULTADOS</a>
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
            
            <div class="row text-center justify-content-center">
                <div class="col-8 mt-2 table-resultados" >
                    <h1 class="text-center display-6" style="color:#63396C;"><strong> RESULTADOS VOTACIONES</strong></h1>
                    <table class="table table-success" >
                        <thead>
                            <tr >
                                <th scope="col" style="border-radius:10px 0px 0px 0px;">Id</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Grado</th>
                                <th scope="col" style="border-radius:0px 10px 0px 0px;">Votos</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include("conexion.php");
                            $sql = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE votos != 'NULL' and grado != 'NULL'")
                            or die ("Error al conectarse a la base de datos");
                            while($datos = mysqli_fetch_array($sql))
                            {
                            ?>
                                <tr>
                                    
                                    <td><?php echo $datos['id']?></td>
                                    <td><?php echo $datos['usuario']?></td>
                                    <td><?php echo $datos['grado']?></td>
                                    <td><?php echo $datos['votos']?></td>
                                    
                                </tr>
                            <?php
                            }
                        ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <a href="./administrador.php">
                        <button type="button" class=" salir buttons" >Volver</button>
                </a>
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