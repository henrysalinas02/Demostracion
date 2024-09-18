<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas de Alumnos</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <div class="contenedor">
    <div class="formulario"><center><h3>Nuevo Registro</h3></center><br>

        <form action="crud/create.php" method="post">
        <div class="mb-3" hidden>
            <label for="exampleFormControlInput1" class="form-label" >Id</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Id" name="id">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Nombre</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" name="nombre">
        </div>
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Nota 1</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nota 1" name="nota1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Nota 2</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nota 2" name="nota2">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Nota 3</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nota 3" name="nota3">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Nota 4</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nota 4" name="nota4">
        </div>

        <div class="col-auto">
            <button type="text" class ="btn1" class="btn btn-success mb-3">Guardar</button>
            <button type="reset" class ="btn2" class="btn btn-danger mb-3">Cancelar</button>
        </div> 
        </form>
    
    </div>
            <div class="datos"><center><h3>Notas de alumnos</h3></center>
        <?php include ("crud/read.php")?>
    </div>
    
    <script src="bootstrap/bootstrap.min.js"></script>  
</body>
</html>