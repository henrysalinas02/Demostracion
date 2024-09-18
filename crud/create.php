<?php 
    include "../conexion.php";
    $query = "INSERT INTO notas (nombre, nota1, nota2, nota3, nota4) 
    VALUES ( '".$_POST['nombre']."', '".$_POST['nota1']."', '".$_POST['nota2']."', '".$_POST['nota3']."', '".$_POST['nota4']."' )";
    
    $result=mysqli_query($conn,$query);
    header ("Location: ../index.php");
?>