<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		
	</head>
	
	<body>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<a href="index.php?c=alumnos&a=nuevo" class="btn btn-primary">Agregar</a>
			
			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>Carnet</th>
							<th>DUI</th>
							<th>Nombre</th>
							<th>APellido</th>
							<th>Carrera</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["alumnos"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["carnet"]."</td>";
							echo "<td>".$dato["dui"]."</td>";
							echo "<td>".$dato["nombre"]."</td>";
							echo "<td>".$dato["apellido"]."</td>";
							echo "<td>".$dato["carrera"]."</td>";
							echo "<td><a href='index.php?c=alumnos&a=modificar&id=".$dato["carnet"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='index.php?c=alumnos&a=eliminar&id=".$dato["carnet"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</body>
</html>