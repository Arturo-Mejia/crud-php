<?php
include 'conexion.php';                
$id=$_GET["id"];

      $conn = conectar(); 

$sql = "DELETE FROM salarios WHERE id=".$id.";"; 

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>