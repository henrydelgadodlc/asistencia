<?php

include('db.php');

if (isset($_POST['guardar'])) {
  $Direccion = $_POST['Direccion'];
  
  $query = "INSERT INTO sedes (Direccion) VALUES ('$Direccion')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Consulta fallada.");
  }

  $_SESSION['message'] = 'Guardado';
  $_SESSION['message_type'] = 'success';
  header('Location: sedes.php');

}

?>

