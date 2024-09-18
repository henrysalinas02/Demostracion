<?php
include "conexion.php";

$id = $_GET['id'];  

        $query="SELECT *FROM notas WHERE id='$id' ";
                    $result=mysqli_query($conn,$query);
                    while($row = mysqli_fetch_array($result))
                        {  
                            $id = $row['id'];       
                            $nombre = $row['nombre'];
                            $nota1 = $row['nota1'];
                            $nota2 = $row['nota2'];
                            $nota3 = $row['nota3']; 
                            $nota4 = $row['nota4'];  
                        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->    
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" >
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    
    <title>Sistema de notas</title>
</head>
<body>
    <div class="contenedor">
    <!-- Formulario -->
    <div class="frm_update"><center><h3>NUEVO REGISTRO</h3></center><br>
    <form action="crud/update.php" method="post">

        <div class="mb-3" hidden>
            <label for="exampleFormControlInput1" class="form-label" >Id</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Id" name="id" value="<?php echo $id ?>">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Nombre</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" name="nombre" value="<?php echo $nombre ?>" >
        </div>
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Nota 1</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nota 1" name="nota1" value="<?php echo $nota1 ?>">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Nota 2</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nota 2" name="nota2" value="<?php echo $nota2 ?>" >
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Nota 3</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nota 3" name="nota3" value="<?php echo $nota3 ?>">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Nota 4</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nota 4" name="nota4" value="<?php echo $nota4 ?>">
        </div>

        <div class="col-auto">
            <button type="text" class="btn btn-success mb-3">Guardar</button>
            <a href="../index.php"> <button type="" class="btn btn-danger mb-3">Cancelar</button> </a>
        </div> 

    </form>
    </div>

    <!-- Datos -->

    </div>
<!-- Bootstrap -->    
<script src="bootstrap/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>   
</body>
</html>