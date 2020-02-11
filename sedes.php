<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">

<!-- Formulario para poder agregar -->
<div class="card card-body">
        <form action="add_sedes.php" method="POST">
          <div class="form-group">
            <input type="text" name="Direccion" class="form-control" placeholder="Direccion de la sede" autofocus>
          </div>
          <input type="submit" name="guardar" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
<!--Tabla para mostara los registros -->
<div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Dirección</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM sedes";
          $result = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result)) { ?>
         <tr>
            <td><?php echo $row['Direccion']; ?></td>
            
            <td>
              <a href="edit_sedes.php?id=<?php echo $row['Id_sede']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
               
               
              </a>
              <a href="eliminar_sedes.php?id=<?php echo $row['Id_sede']?>" class="btn btn-danger">
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
