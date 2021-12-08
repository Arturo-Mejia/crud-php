<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <script type='text/javascript' src='funciones.js'></script>
    <title>Salarios</title>
</head>
<body>
    <?php
    include 'conexion.php';
			$conn = conectar(); 
			$sql = "SELECT * FROM salarios;";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
                ?>
            <h1>Salarios</h1>
            <div class="sectable">
            <div class="one">
            <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Salario</th>
                <th scope="col">editar</th>
                <th scope="col">borrar</th>
              </tr>
            </thead>
            <tbody>
            <?php
			while($row = $result->fetch_assoc()) {
				?>
         <tr>
         <th id=<?php echo '"tid'.$row["id"].'"';?> scope="row"><?php echo $row["id"]?></th>
         <td id=<?php echo '"tnombre'.$row["id"].'"';?>><?php echo $row["nombre"]?></td>
         <td id=<?php echo '"tedad'.$row["id"].'"';?>><?php echo $row["edad"]?></td>
            <td id=<?php echo '"tsalario'.$row["id"].'"';?>><?php echo $row["salario"]?></td>
            <td><button type="button" onclick=<?php echo '"editar('.$row["id"].');"';?> class="btn btn-primary">Editar</button></td>
            <td><button type="button" onclick=<?php echo '"eliminar('.$row["id"].');"';?> class="btn btn-danger">Borrar</button></td>
        </tr>
			<?php	
        } 

      echo  '</tbody>';
       echo '</table>';
       echo '</div>';
		$conn->close();
		}
    ?> 

<div class="two">
    <form>
  <div class="form-group">
    <label>ID</label>
    <input type="text" class="form-control" id="id">
  </div>
  <div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" id="nombre">
  </div>
  <div class="form-group">
    <label>Edad</label>
    <input type="text" class="form-control" id="edad">
  </div>
  <div class="form-group">
    <label>Salario</label>
    <input type="text" class="form-control" id="salario">
  </div>
  <button type="button" onclick="actualizar();" class="btn btn-success">Actualizar</button> 
  <button type="button" onclick="registrar();" class="btn btn-secondary">Registrar</button>
</form>

</div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>