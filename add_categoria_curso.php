<?php

include('db.php');

if (isset($_POST['add_categoria_nombre'])) {
  $nombre = $_POST['nombre'];
  
  $query = "INSERT INTO c_curso(Nombre) VALUES ('$nombre')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Consulta fallada.");
  }

  $_SESSION['message'] = 'Guardado';
  $_SESSION['message_type'] = 'success';
  header('Location: categoria_curso.php');

}

?>

