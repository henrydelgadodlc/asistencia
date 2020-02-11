<?php

include('db.php');

if (isset($_POST['guardar'])) {
  $nombre = $_POST['nombre'];
  $detalle = $_POST['detalle'];
  
  $query = "INSERT INTO tipo_user(Nombre,Detalle) VALUES ('$nombre','$detalle')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Consulta fallada.");
  }

  $_SESSION['message'] = 'Guardado';
  $_SESSION['message_type'] = 'success';
  header('Location: tipo_usuario.php');

}

?>

