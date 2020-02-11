<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">

<!-- Formulario para poder agregar -->
<div class="card card-body">
        <form action="add_categoria_curso.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre de la categorio" autofocus>
          </div>
          <input type="submit" name="add_categoria_nombre" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
<!--Tabla para mostara los registros -->
<div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM c_curso";
          $result = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result)) { ?>
         <tr>
            <td><?php echo $row['Nombre']; ?></td>
            
            <td>
              <a href="edit_categoria_curso.php?id=<?php echo $row['Id_categoria']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
               
               
              </a>
              <a href="eliminar_categoria_curso.php?id=<?php echo $row['Id_categoria']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
       </tbody>
      </table>
    </div>
  </div>

  </div>
  </div>
</main>
  <?php include('includes/footer.php'); ?>
