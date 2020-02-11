<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM c_curso WHERE Id_categoria = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Falló laconsulta.");
  }

  $_SESSION['message'] = 'Registro eliminado';
  $_SESSION['message_type'] = 'danger';
  header('Location: categoria_curso.php');
}

?>
