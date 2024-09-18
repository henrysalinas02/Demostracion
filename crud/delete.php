<?php 
include "../conexion.php";
$id= $_GET['id'];

// id (se insertara de forma automatica), usuario, mensaje
$query = " DELETE FROM notas WHERE id='$id'";

$result=mysqli_query($conn,$query);

header ("Location: ../index.php");
?>