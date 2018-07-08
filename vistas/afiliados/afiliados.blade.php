<?php !isset($system)? header('Location:../../'):0;?>
<title>Gestion de Afiliados</title>
</head>

<body>
	<?php

		Crear::comun('navbar');		
	?>
	<div class="container-fluid">
		<form method="get">
		</form>
		<div class="row">
			<div  id="registrarUsuario" class="col-md-5">
				<div class="col-md-10 offset-md-2 card" style="padding:0;">
					<div class="card-header">
						<h5 id="titulo" align="center"><strong>Registrar Afiliado</strong></h5>	
						<center>
							<span style="color:red">Todos los datos son requeridos
							</span>
						</center>
					</div>
					
						<div class="card-body">
						
						<input class="form-control" type="text" name="nombre" placeholder="Nombre">

						<input class="form-control" type="text" name="apellido" placeholder="Apellido">

						<input class="form-control" type="text" name="cedula" placeholder="Cedula">
					
						<select class="form-control" name="sangre">
							<option disabled selected>Tipo de Sangre</option>
							<option>A+</option>
							<option>A-</option>
							<option>B+</option>
							<option>B-</option>
							<option>AB+</option>
							<option>AB-</option>
							<option>O+</option>
							<option>O-</option>
						</select>

						<select class="form-control" name="sexo">
							<option disabled selected>Sexo</option>
							<option>M</option>
							<option>F</option>
						</select>
				
						<input class="form-control" type="text" name="estatura" placeholder="Estatura">

						<input class="form-control" type="text" name="peso" placeholder="Peso">

						<input class="form-control" type="date" name="fecha">
						
						<input hidden name="prov" value="reg">	
						</div>
					<div class="card-footer">

						<input type="submit" id="botonRegistrar"  class="btn btn-primary col-md-6 offset-md-3" value="Afiliar">
						
						
					</div>
			
				</div>
			</div>

			
		</div>
	</div>
</body>
</html>

