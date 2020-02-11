<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">

<!-- Formulario para poder agregar -->
<div class="card card-body">
        <form action="add_usuarios.php" method="POST">
          <div class="form-group">
            <input type="text" name="dni" class="form-control" placeholder="Numero de DNI" autofocus>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" >
            <input type="text" name="apellido" class="form-control" placeholder="Apellido" >
            <input type="text" name="direccion" class="form-control" placeholder="Direcion" >
            <input type="text" name="telefono" class="form-control" placeholder="Telefono" >
            <input type="text" name="id_tu" class="form-control" placeholder="Tipo de usuario" >
            <input type="text" name="nombre_ref" class="form-control" placeholder="Nombre del referente" >
            <input type="text" name="celular_ref" class="form-control" placeholder="Celular del referente" >
            <input type="text" name="tipo_de_miembro" class="form-control" placeholder="Tipo del miembro" >
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
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apelllido</th>
            <th>Direcion</th>
            <th>Telefono</th>
            <th>Tipo de usuario</th>
            <th>Nombre del referente </th>
            <th>Celular del referente</th>
            <th>Tipo_Miembro</th>
            <th>Acción</th>

          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM usuarios";
          $result = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result)) { ?>
         <tr>
            <td><?php echo $row['Dni']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Apellido']; ?></td>
            <td><?php echo $row['Direccion']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
            <td><?php echo $row['Id_Tu']; ?></td>
            <td><?php echo $row['Ref_Nombre']; ?></td>
            <td><?php echo $row['Ref_Celular']; ?></td>
            <td><?php echo $row['Tipo_Miembro']; ?></td>

            
            <td>
              <a href="edit_usuarios.php?id=<?php echo $row['Id_usuario']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
               
               
              </a>
              <a href="eliminar_usuarios.php?id=<?php echo $row['Id_usuario']?>" class="btn btn-danger">
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
