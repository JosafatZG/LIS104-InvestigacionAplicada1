<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
		
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
							<th>Apellido</th>
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
							echo "<td><a href='index.php?c=alumnos&a=modificar&carnet=".$dato["carnet"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='index.php?c=alumnos&a=eliminar&carnet=".$dato["carnet"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>