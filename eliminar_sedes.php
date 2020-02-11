<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM sedes WHERE Id_sede = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Falló laconsulta.");
  }

  $_SESSION['message'] = 'Registro eliminado';
  $_SESSION['message_type'] = 'danger';
  header('Location: sedes.php');
}

?>
