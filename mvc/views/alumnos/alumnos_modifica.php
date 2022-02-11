<?php
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
	
	</head>
	
	<body>
		<div class="container">
			
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=alumnos&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $data["carnet"]; ?>" />
				
				<div class="form-group">
					<label for="dui">DUI</label>
					<input type="text" class="form-control" id="dui" name="dui" value="<?php echo $data["alumnos"]["dui"]?>" />
				</div>
				
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data["alumnos"]["nombre"]?>" />
				</div>
				
				<div class="form-group">
					<label for="apellido">Apellido</label>
					<input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $data["alumnos"]["apellido"]?>" />
				</div>
				
				<div class="form-group">
					<label for="carrera">Carrera</label>
					<input type="text" class="form-control" id="carrera" name="carrera" value="<?php echo $data["akumnos"]["carrera"]?>" />
				</div>
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</body>
	</html>	