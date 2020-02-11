<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">

<!-- Formulario para poder agregar -->
<div class="card card-body">
        <form action="add_curso.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
            <input type="text" name="id_tc" class="form-control" placeholder="tipo de categoria" >
            <input type="text" name="id_asis" class="form-control" placeholder="Asistencia" >
            <input type="text" name="fecha_inicio" class="form-control" placeholder="Fecha de inico" >
            <input type="text" name="fecha_final" class="form-control" placeholder="Fecha final  " >
            <input type="text" name="detalle" class="form-control" placeholder="Detalle" >
            <input type="text" name="id_usuario" class="form-control" placeholder="Nombre el docente a cargo" >
            <input type="text" name="lunes" class="form-control" placeholder="Horario de Lunes" >
            <input type="text" name="martes" class="form-control" placeholder="Horario de Martes" >
            <input type="text" name="miercoles" class="form-control" placeholder="Horario de Miercoles" >
            <input type="text" name="jueves" class="form-control" placeholder="Horario de Jueves" >
            <input type="text" name="viernes" class="form-control" placeholder="Horario de Viernes" >
            <input type="text" name="sabado" class="form-control" placeholder="Horario de Sabado" >
            <input type="text" name="domingo" class="form-control" placeholder="Horario de Domingo" >
            <input type="text" name="costo_curso" class="form-control" placeholder="Costo del curso" >
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
            <th>Nombre</th>
            <th>Categoria del Curso</th>
            <th>Id_Asistencia</th>
            <th>Fecha Inicial</th>
            <th>Fecha Final</th>
            <th>Detalles</th>
            <th>Instructor que lo imprate</th>
            <th>Horario de lunes</th>
            <th>Horario de Martes</th>
            <th>Horario de Miercoles</th>
            <th>Horario de Jueves</th>
            <th>Horario de Viernes</th>
            <th>Horario de Sabado</th>
            <th>Horario de Domingo</th>
            <th>Costo del curso</th>
            
            

          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM cursos";
          $result = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result)) { ?>
         <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Id_Tc']; ?></td>
            <td><?php echo $row['Id_Asiste']; ?></td>
            <td><?php echo $row['Fecha_inicio']; ?></td>
            <td><?php echo $row['Fecha_final']; ?></td>
            <td><?php echo $row['Detalle']; ?></td>
            <td><?php echo $row['Docente']; ?></td>
            <td><?php echo $row['Lunes']; ?></td>
            <td><?php echo $row['Martes']; ?></td>
            <td><?php echo $row['Miercoles']; ?></td>
            <td><?php echo $row['Jueves']; ?></td>
            <td><?php echo $row['Viernes']; ?></td>
            <td><?php echo $row['Sabado']; ?></td>
            <td><?php echo $row['Domingo']; ?></td>
            <td><?php echo $row['Costo_curso']; ?></td>


            
            <td>
              <a href="edit_curso.php?id=<?php echo $row['Id_usuario']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
               
               
              </a>
              <a href="eliminar_curso.php?id=<?php echo $row['Id_usuario']?>" class="btn btn-danger">
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
