<?php
include 'conexion.php';
$conn=conectar(); 

$sql2 = "UPDATE salarios SET nombre='".$_GET["nombre"]."', edad=".$_GET["edad"].", salario=".$_GET["salario"]." WHERE id=".$_GET["id"].";";
if ($conn->query($sql2) === TRUE) {
  echo "correcto";
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$conn->close();
?>