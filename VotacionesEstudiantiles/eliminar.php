<?php
    include("conexion.php");
    session_start();
    $us = $_SESSION['login'];
    //consulta a la base de datos
    $id = $_GET['id'];
    // $sql="SELECT * FROM usuarios WHERE id='$id'";
    // $query=mysqli_query($mysqli,$sql);
    // $datos=mysqli_fetch_array($query);
    if ($_SESSION["logueado"]==TRUE)
    {
    $delete="DELETE FROM usuarios WHERE id='$id'";
    if (mysqli_query($mysqli, $delete))
    {
?>
    <script language="javascript">
        alert("Datos eliminados correctamente");
        location.href="administrador.php";
    </script>
<?php
    }
    else{
        ?>
        <script language="javascript">
        alert("No es posible eliminar correctamente los datos");
        location.href="administrador.php";
        </script>
        <?php
    }
}
?>
