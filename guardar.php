<?php
	
	require 'conexion.php';

	$idUsuarios = $_POST['idUsuarios'];
	$Nombres = $_POST['Nombres'];
	$Apellidos = $_POST['Apellidos'];
	$Email_ins = $_POST['Email_ins'];
	$Tipo_user = $_POST['Tipo_user'];
	$Tipo_pross = $_POST['Tipo_pross'];
	$Contraseña = $_POST['Contraseña'];

	
	$sql = "INSERT INTO Usuarios (idUsuarios, Nombres, Apellidos, Email_ins, Tipo_user, Tipo_pross, Contraseña) VALUES ('$idUsuarios', '$Nombres', '$Apellidos', '$Email_ins', '$Tipo_user','$Tipo_pross', '$Contraseña')";
	$resultado = $mysqli->query($sql);

?>

<html lang="es">
	<head>
	<!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="static/css/index.css" th:href="@{/css/index.css}">
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<!--<a href="index.php" class="btn btn-primary">Regresar</a>-->
					
				</div>
			</div>
		</div>
	</body>
</html>