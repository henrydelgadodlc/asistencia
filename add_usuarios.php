<?php

include('db.php');

if (isset($_POST['guardar'])) {
  $dni = $_POST['dni'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $id_tu = $_POST['id_tu'];
  $nombre_ref = $_POST['nombre_ref'];
  $celular_ref = $_POST['celular_ref'];
  $tipo_de_miembro = $_POST['tipo_de_miembro'];
  

  
  $query = "INSERT INTO usuarios(Dni,Nombre,Apellido,Direccion,Telefono,Id_Tu,Ref_Nombre,Ref_Celular,Tipo_Miembro) VALUES ('$dni','$nombre','$apellido','$direccion','$telefono','$id_tu','$nombre_ref','$celular_ref','$tipo_de_miembro')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Consulta fallada.");
  }

  $_SESSION['message'] = 'Guardado';
  $_SESSION['message_type'] = 'success';
  header('Location: usuarios.php');

}

?>
