	
<?php
	
	require 'conexion.php';
	
	$id = $_POST['idUsuarios'];
	$Nombres = $_POST['Nombres'];
	$email = $_POST['Email_ins'];
	$telefono = $_POST['telefono'];
	$estado_civil = $_POST['estado_civil'];
	$hijos = isset($_POST['hijos']) ? $_POST['hijos'] : 0;
	$intereses = isset($_POST['intereses']) ? $_POST['intereses'] : null;
	
	
	$sql = "UPDATE personas SET nombre='$nombre', correo='$email', telefono='$telefono', estado_civil='$estado_civil', hijos='$hijos', intereses='$arrayIntereses' WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	
?>
 
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>