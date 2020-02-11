<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM tipo_user WHERE Id_User = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Falló laconsulta.");
  }

  $_SESSION['message'] = 'Registro eliminado';
  $_SESSION['message_type'] = 'danger';
  header('Location: tipo_usuario.php');
}

?>
