<?php
include 'conexion.php';
$conn=conectar(); 

$sql2 = "insert into salarios values(null,'".$_GET["nombre"]."',".$_GET["edad"].",".$_GET["salario"].");";
if ($conn->query($sql2) === TRUE) {
  echo "correcto";
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$conn->close();
?>