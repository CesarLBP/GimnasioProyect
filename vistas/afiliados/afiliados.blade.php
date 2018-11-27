<?php !isset($system)? header('Location:../../'):0;?>
<title>Gestion de Afiliados</title>
<script src="scripts/afiliados.js"></script>
<link rel="stylesheet" type="text/css" href="estilos/usuarios.css">

</head>

<body>
	<?php

		Crear::comun('navbar');		
	?>
	<div class="container-fluid">
		<form method="get">
		</form>
		<div class="row" style="margin-top: 2%;">
			<div  id="registrarUsuario" class="col-md-4">
				<div class="col-md-10 offset-md-2 card" style="padding:0;">
					<div class="card-header" style="background: #212529; border:none; color:white">
						<h5 id="titulo" align="center"><strong>REGISTRAR AFILIADO</strong></h5>	
					</div>
					
						<div class="card-body">
						
						<input id="nombres" class="form-control" type="text" name="nombres" placeholder="Nombre">

						<input id="apellidos" class="form-control" type="text" name="apellidos" placeholder="Apellido">

						<input id="cedula" class="form-control" type="text" name="cedula" placeholder="Cedula">
					
						<select id="sexo" class="form-control" name="sexo">
							<option value="0">Sexo</option>
							<option value="M">M</option>
							<option value="F">F</option>
						</select>

						<select id="sangre" class="form-control" name="sangre">
							<option value="0">Tipo de Sangre</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<<option value="B+"></option>>B+</option>
							<option value="B-">B-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
						</select>

						<input id="estatura" class="form-control" type="text" name="estatura" placeholder="Estatura">

						<input id="peso" class="form-control" type="text" name="peso" placeholder="Peso">

						<input id="fecha" class="form-control" type="date" name="fecha">
						
						<input hidden name="prov" value="reg">	
						</div>
					<div class="card-footer">

					{{Crear::code()}}

					{{Crear::botonEnviarAjax('Registrar','Afiliados','registrarAfiliado','enviar','offset-4 btn btn-dark')}}
						
					</div>
			
				</div>
			</div>

			
		</div>
	</div>

<!--<img id="imagenFondo" src="utilidades/imagenes/Cuaderno.jpg">-->


</body>
</html>

