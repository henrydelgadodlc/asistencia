<?php
include("db.php");
$Direccion = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM c_curso WHERE Id_sede=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Direccion = $row['Direccion'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $Direccion= $_POST['Direccion'];
  

  $query = "UPDATE sedes set Direccion = '$Direccion' WHERE Id_sede=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  //header('Location: index.php');
  header('Location: sedes.php');
}

?>


<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_sedes.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="Direccion" type="text" class="form-control" value="<?php echo $Direccion; ?>" placeholder="Actualizar Direccion">
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
