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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Teléfono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
					</div>
				</div>
				
				<div class="form-group">
					<label for="fecha" class="col-sm-2 control-label">Fecha</label>
					<div class="col-sm-10">
						<input type="date" name="fecha" id="fecha" placeholder="Fecha Evento">
					</div>
				</div>		
				
				<div class="form-group">
					<label for="tipo" class="col-sm-2 control-label">Ticket</label>
					<div class="col-sm-10">
						<select class="form-control" id="tipo" name="tipo">
							<option value="Cortesía">Cortesía</option>
							<option value="Preventa">Preventa</option>
							<option value="Lanzamiento">Lanzamiento</option>
							<option value="Pago en Taquilla">Pago en Taquilla</option>
							<option value="Otra">Otra</option>
						</select>
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