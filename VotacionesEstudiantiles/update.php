<?php
    include("conexion.php");
    $id = $_POST['id'];
    $usuario=$_POST['usuario'];
    $pw=$_POST['pw'];
    $rol=$_POST['rol'];
    if ($rol=="Administrador")
    {
    if ($usuario!=null and $pw!=null and $rol!=null)
    {
    $update="UPDATE usuarios SET usuario = '$usuario', pass='$pw', rol='$rol' WHERE id='$id'";
    if (mysqli_query($mysqli, $update))
    {
?>
    <script language="javascript">
        alert("Datos actualizados correctamente");
        location.href="administrador.php";
    </script>
<?php
    }
    else
    {
?>
    <script language="javascript">
        alert("No es posible ingresar los datos");
        location.href="administrador.php";
    </script>
<?php
    }
}
else
{
?>
    <script language="javascript">
        alert("Porfavor llene todos los campos");
        location.href="administrador.php";
    </script>
<?php
}
}
elseif($rol=="Votante")
{
    $grado=$_POST["grado"];
    if ($usuario!=null and $pw!=null and $rol!=null and $grado!=null)
    {
    $update="UPDATE usuarios SET usuario = '$usuario', pass='$pw', rol='$rol',grado='$grado' WHERE id='$id'";
    if (mysqli_query($mysqli, $update))
    {
?>
    <script language="javascript">
        alert("Datos actualizados correctamente");
        location.href="administrador.php";
    </script>
<?php
    }
    else
    {
?>
    <script language="javascript">
        alert("No es posible ingresar los datos");
        location.href="administrador.php";
    </script>
<?php
    }
}
else
{
?>
    <script language="javascript">
        alert("Porfavor llene todos los campos");
        location.href="administrador.php";
    </script>
<?php
}
}
?>