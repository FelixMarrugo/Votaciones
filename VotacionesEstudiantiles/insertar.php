<?php  
    include ("conexion.php"); //Incluimos la conexion

    //Capturamos los datos
    $usuario = $_POST['usuario'];
    $pw = $_POST['pw'];
    $grado
    $rol = $_POST['rol'];
    if ($usuario!=null and $pw!=null and $rol!=null)
    {
    $insertar = "INSERT INTO usuarios(usuario, pass, rol) VALUES ('$usuario', '$pw', '$rol')";
    if(mysqli_query($mysqli, $insertar))
    {
    ?>
        <script language = "javascript">
            alert("Datos ingresados correctamente.");
            location.href = "administrador.php";
        </script>
<?php
    }
}
else{
?>
    <script language="javascript">
        alert("Porfavor llene todos los campos");
        location.href="administrador.php";
    </script>
<?php
}
?>