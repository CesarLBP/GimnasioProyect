<?php !isset($system)? header('Location:../../'):0;?>
<title>Gestion de Afiliados</title>
<script src="scripts/afiliados.js"></script>

</head>

<body>
	<?php

		Crear::comun('navbar');		
	?>
	<div class="container-fluid">
		<div class="row">
			<div  id="registrarUsuario" class="col-md-5">

				<div class="col-md-10 offset-md-2 card" style="padding:0;">
					<div class="card-header" style="background: #212529; border:none; color:white">
						<h5 id="titulo" align="center"><b>Registrar Afiliado del Gimnasio</b></h5>
					</div>
						<div class="card-body">
							<form method="post" action=".">
								
							<input id="nombres" class="form-control" type="text" name="nombres" placeholder="Nombre" required pattern="[a-zA-Z]{2,30}" title="hola?">
							<input id="apellidos" class="form-control" type="text" name="apellidos" placeholder="Apellido">
							<input id="cedula" class="form-control" type="text" name="cedula" placeholder="Cedula" required pattern="[0-9]{6,}">
							<select id="sexo" class="form-control" name="sexo">
								<option disabled selected>Sexo</option>
								<option value="M">Masculino</option>
								<option value="F">Femenino</option>
							</select>
							<select id="sangre" class="form-control" name="sangre">
								<option disabled selected>Tipo de Sangre</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<<option value="B+"></option>>B+</option>
								<option value="B-">B-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
								<option value="O+">O+</option>
								<option value="O-">O-</option>
							</select>

							<input id="estatura" class="form-control" type="text" name="estatura" placeholder="Estatura" required pattern="[0-9][,][0-9]{2}">

							<input id="peso" class="form-control" type="text" name="peso" placeholder="Peso">
							</form>
							{{Crear::botonEnviar('Registrar','Afiliados','registrarAfiliado','enviar','offset-4 btn btn-dark')}}

							<input id="fecha" class="form-control" type="date" name="fecha">
							
							<input hidden name="prov" value="reg">	
							</div>
					<div class="card-footer">

						
					</div>
			
				</div>
			</div>

			
		</div>
	</div>
</body>
</html>

