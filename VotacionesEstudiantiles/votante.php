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
        <title>Panel Votante</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <link rel="stylesheet" href="./css/estilosindex.css">
        <style>
            .buttons
            {
            width:400px; 
            background-color:#0B5ED7; 
            color:white;
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
                    <a class="nav-link" href="#">VOTANTE</a>
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
            
<!-- Diseño del tarjeton -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card" style="width: 250px; margin-top:15px;">
                <button class="btn"> <img src="https://api.lorem.space/image/face?w=150&amp;amp;amp;amp;h=220" style="width: 150px;" class="card-img-top" alt="..."> </button>
                <div class="card-body">
                    <h5 class="card-title">Nombre del Candidato</h5>
                    <p class="card-text">Grado: ...... Grupo: ...... </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 250px; margin-top:15px;">
                <button class="btn"> <img src="https://api.lorem.space/image/face?w=150&amp;amp;amp;amp;h=220" style="width: 150px;" class="card-img-top" alt="..."> </button>
                <div class="card-body">
                    <h5 class="card-title">Nombre del Candidato</h5>
                    <p class="card-text">Grado: ...... Grupo: ...... </p>
                </div>
            </div>
        </div>
    
        <div class="col">
            <div class="card" style="width: 250px; margin-top: 15px;">
                <button class="btn"> <img src="https://api.lorem.space/image/face?w=150&amp;amp;amp;amp;h=220" style="width: 150px;" class="card-img-top" alt="..."> </button>
                <div class="card-body">
                    <h5 class="card-title">Nombre del Candidato</h5>
                    <p class="card-text">Grado: ...... Grupo: ...... </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 250px; margin-top: 15px;">
                <button class="btn"> <img src="./img/voto_blanco.png" style="width: 150px;" class="card-img-top" alt="..."> </button>
                <div class="card-body">
                    <div class="card-body">
                        <button class="btn btn-primary" ><h5 class="card-title">Voto en Blaco</h5></button>
                    </div>
                </div>
            </div>
        </div>
                <div class="d-flex justify-content-between" style=" padding:50px;">
                    <a href="./index.php">
                        <button type="button" class=" salir buttons">Salir</button>
                    </a>
                
                    <a href="./resultadosVotaciones_V.php">
                        <button type="button" class=" salir buttons" >Consultar Resultados</button>
                    </a>
                </div>
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