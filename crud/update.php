<?php 
    include "../conexion.php";

    $id = $_POST['id'];
    $nombre = $_POST['nombre']; 
    $nota1 = $_POST['nota1'];  
    $nota2 = $_POST['nota2']; 
    $nota3 = $_POST['nota3']; 
    $nota4 = $_POST['nota4']; 

    // Consulta SQL
    $query = "UPDATE notas SET nombre='$nombre', nota1='$nota1', nota2='$nota2', nota3='$nota3', nota4='$nota4' WHERE id='$id' ";
    $result=mysqli_query($conn,$query);

    header ("Location: ../index.php");

?>