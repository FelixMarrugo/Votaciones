<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votaciones Estudiantiles</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="./css/estilosindex.css">
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
    <div class="container">
        <div class="admin-wrapper-form">
            <form id="admin-form" class="form" action = "validar.php" method = "POST">
            <h2> <span> Iniciar sesión</span> </h2>
            <div class="form-group">
                <label for="user">Usuario</label>
                <input type="text" class="form-control" name = "usuario" id="user" placeholder="Ingresar usuario" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name = "pw"  id="password" placeholder="Contraseña" required>
            </div>

                <button type="submit" name = "enviar" class="admin-btn" style = "margin-top: 20px;">Ingresar</button>
            
                <!--<button id="submit-btn" type="button" class="admin-btn">Registrarse</button>-->
        
            </form>
        </div>

    </div>

</body>

</html>