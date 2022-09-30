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