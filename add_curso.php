<?php

include('db.php');

if (isset($_POST['guardar'])) {
  $nombre = $_POST['nombre'];
  $id_tc = $_POST['id_tc'];
  $id_asis = $_POST['id_asis'];
  $fecha_inicio = $_POST['fecha_inicio"'];
  $fecha_final = $_POST['fecha_final'];
  $id_tu = $_POST['detalle'];
  $nombre_ref = $_POST['id_usuario'];
  $celular_ref = $_POST['lunes'];
  $tipo_de_miembro = $_POST['martes'];
  $tipo_de_miembro = $_POST['miercoles'];
  $tipo_de_miembro = $_POST['jueves'];
  $tipo_de_miembro = $_POST['viernes'];
  $tipo_de_miembro = $_POST['sabado'];
  $tipo_de_miembro = $_POST['domingo'];
  $tipo_de_miembro = $_POST['costo_curso'];
 


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
