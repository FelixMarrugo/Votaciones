<?php 

$servidor = "localhost";
$user = "root";
$pw = "";
$db = "VotacionesEstudiantiles";

$mysqli = new mysqli($servidor, $user, $pw, $db);

if($mysqli->connect_errno){
    echo "<strong>,h2>Error al conectarse a la base de datos</h2></strong>".$msqli->connect_errno;
}
return $mysqli;
?>