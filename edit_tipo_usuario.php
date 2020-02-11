<?php
include("db.php");
$nombre = '';
$Detalle = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM tipo_user WHERE Id_User=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['Nombre'];
    $Detalle = $row['Detalle'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre= $_POST['Nombre'];
  $Detalle= $_POST['Detalle'];

  $query = "UPDATE tipo_user set Nombre = '$nombre', Detalle = '$Detalle' WHERE Id_User=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Atualizado';
  $_SESSION['message_type'] = 'warning';
  //header('Location: index.php');
  header('Location: tipo_usuario.php');
}

?>


<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_tipo_usuario.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="Nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualizar Nombre">
          <input name="Detalle" type="text" class="form-control" value="<?php echo $Detalle; ?>" placeholder="Actualizar Detalle">
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
