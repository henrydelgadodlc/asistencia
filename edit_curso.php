<?php
include("db.php");
$nombre = '';
$Detalle = '';
$dni = '';
    $nombre = '';
    $apellido = '';
    $direccion = '';
    $telefono = '';
    $id_tu = '';
    $nombre_ref = '';
    $celular_ref = '';
    $tipo_de_miembro = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM usuarios WHERE Id_usuario=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $dni = $row['Dni'];
    $nombre = $row['Nombre'];
    $apellido = $row['Apellido'];
    $direccion = $row['Direccion'];
    $telefono = $row['Telefono'];
    $id_tu = $row['Id_Tu'];
    $nombre_ref = $row['Ref_Nombre'];
    $celular_ref = $row['Ref_Celular'];
    $tipo_de_miembro = $row['Tipo_Miembro'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $dni = $_POST['dni'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $id_tu = $_POST['id_tu'];
  $nombre_ref = $_POST['nombre_ref'];
  $celular_ref = $_POST['celular_ref'];
  $tipo_de_miembro = $_POST['tipo_de_miembro'];

  $query = "UPDATE usuarios set Dni = '$dni', Nombre = '$nombre',Apellido='$apellido',Direccion='$direccion',Telefono='$telefono',Id_Tu='$id_tu',Ref_Nombre='$nombre_ref',Ref_Celular='$celular_ref',Tipo_Miembro='$tipo_de_miembro' WHERE Id_usuario=$id";

  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Atualizado';
  $_SESSION['message_type'] = 'warning';
  //header('Location: index.php');
  header('Location: usuarios.php');
}

?>


<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_usuarios.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          
          <input type="text" name="dni" class="form-control" placeholder="Numero de DNI" value="<?php echo $nombre; ?>"autofocus>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo $dni; ?>">
            <input type="text" name="apellido" class="form-control" placeholder="Apellido"value="<?php echo $apellido; ?>" >
            <input type="text" name="direccion" class="form-control" placeholder="Direcion"value="<?php echo $direccion; ?>" >
            <input type="text" name="telefono" class="form-control" placeholder="Telefono" value="<?php echo $telefono; ?>">
            <input type="text" name="id_tu" class="form-control" placeholder="Tipo de usuario"value="<?php echo $id_tu; ?>" >
            <input type="text" name="nombre_ref" class="form-control" placeholder="Nombre del referente"value="<?php echo $nombre_ref; ?>" >
            <input type="text" name="celular_ref" class="form-control" placeholder="Celular del referente"value="<?php echo $celular_ref; ?>" >
            <input type="text" name="tipo_de_miembro" class="form-control" placeholder="Tipo del miembro"value="<?php echo $tipo_de_miembro; ?>" >



        </div>
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
