
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
				<h3 style="text-align:center">Registrar Usuario</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" enctype="multipart/form-data" autocomplete="off">
				
			<div class="form-group">
					<label for="ID_Usuario" class="col-sm-2 control-label">ID Usuario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="idUsuarios" name="idUsuarios" placeholder="ID del Usuario" required>
					</div>
				</div>	
			
			<div class="form-group">
						<label for="nombre" class="col-sm-2 control-label">Nombres </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Nombres completos" required>
					</div>
				</div>
				<div class="form-group">
					<label for="apellidos" class="col-sm-2 control-label">Apellidos </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellidos completos" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="Correo Institucional" class="col-sm-2 control-label">Correo Institucional</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="Email_ins" name="Email_ins" placeholder="Email" required>
					</div>
				</div>
			
				
				<div class="form-group">
					<label for="Tipo_User" class="col-sm-2 control-label">Tipo de Usuario</label>
					<div class="col-sm-10">
						<select class="form-control" id="Tipo_user" name="Tipo_user">
							<option value="Estudiante">Estudiante</option>
							<option value="Jurado">Jurado</option>
							<option value="Asesor">Asesor</option>
						</select>
					</div>
				</div>

				
				<div class="form-group">
					<label for="Tipo_pross" class="col-sm-2 control-label">Tipo de Proceso</label>
					<div class="col-sm-10">
						<select class="form-control" id="Tipo_pross" name="Tipo_pross">
							<option value="Ante-Proyecto">Ante-Proyecto</option>
							<option value="Proyecto">Proyecto</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="password" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="Contraseña" name="Contraseña" placeholder="Contraseña">
					</div>
				</div>
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
