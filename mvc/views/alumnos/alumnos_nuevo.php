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
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=alumnos&a=guarda" autocomplete="off">
				<div class="form-group">
					<label for="dui">DUI</label>
					<input type="text" class="form-control" id="dui" name="dui" />
				</div>
				
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" />
				</div>
				
				<div class="form-group">
					<label for="apellido">Apellido</label>
					<input type="text" class="form-control" id="apellido" name="apellido" />
				</div>
				
				<div class="form-group">
					<label for="carrera">Carrera</label>
					<input type="text" class="form-control" id="carrera" name="carrera" />
				</div>
							
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</div>
	</body>
</html>