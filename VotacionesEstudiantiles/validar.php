<?php

    $rola = "Administrador";
    $rolb = "Votante";

    if (isset($_POST['enviar'])) {
        require("conexion.php");

        session_start();
        $nombre = $_POST["usuario"];
        $password = $_POST["pw"];

        $consulta = ("SELECT * FROM usuarios WHERE usuario = '$nombre' AND pass = '$password'");

        if(($resultado = $mysqli->query($consulta)))
        {
    
            while($row = $resultado->fetch_array())
            {

                $OKU = $row["usuario"];
                $OKP = $row["pass"];
                $rol = $row["rol"];
                $_SESSION['login'] = $row["usuario"];
            }
            $resultado->close();
        }
        $mysqli->close();
    }

    //Validar que redireccionemos a los usuarios
    if($nombre == $OKU && $pw = $OKP && $rol == $rola)
    {
        $_SESSION["logueado"] = TRUE;
        header("location: administrador.php");
    } 
    elseif ($nombre == $OKU && $$pw = $OKP && $rol == $rolb) {
        $_SESSION["logueado"] = TRUE;
        header("location: votante.php");
    }
    else
    {
        ?>
        <script language="javascript">
            alert("Datos incorrectos, vuelva a intentar")
            location.href="index.php"
        </script>
        <?php
    }
    ?>