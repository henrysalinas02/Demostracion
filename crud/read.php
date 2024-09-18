<?php 
    include "conexion.php";
?>
<table class="table table-dark table-hover">  
    <tr class="table-dark bg-dark"> </tr> <td hidden>Id</td> <td>Nombre</td> <td>Nota 1</td> <td>Nota 2</td> <td>Nota 3</td> <td>Nota 4</td> <td>Editar</td>
        <?php 
                $query="SELECT * FROM notas";
                $result=mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($result)){ ?>
                    <tr class="table-primary">
                        <td hidden>  <?php echo $row['id'] ?>          </td>      
                        <td>  <?php echo $row['nombre']  ?> </b></td>
                        <td>    <?php echo $row['nota1'] ?>     </td>  
                        <td>    <?php echo $row['nota2'] ?>     </td> 
                        <td>    <?php echo $row['nota3'] ?>     </td> 
                        <td>    <?php echo $row['nota4'] ?>     </td>
                        <td>  
                            
                            
                            <a href="frm_update.php?id=<?php echo $row['id']?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16" id="ico-editar">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                            </svg>
                            </a>
                                &nbsp;
                                &nbsp;
                                <a href="crud/delete.php?id=<?php echo $row['id']?> ">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="ico-delete" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16" id="ico-borrar">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                </a>
                            </td> 
                    </tr>
        <?php } ?>
</table>