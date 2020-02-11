<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'bd_cole'
) or die(mysqli_erro($mysqli));

?>
