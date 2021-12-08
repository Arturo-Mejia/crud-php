<?php 
    include 'conexion.php';
			$datos["salarios"]=array(); 
			$conn = conectar(); 
			$sql = "SELECT * FROM salarios;";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
					array_push($datos["salarios"],$row);
                 }

				 echo json_encode($datos); 
			} else {
			 echo "Sin resultados";  
			}
		$conn->close();
?> 