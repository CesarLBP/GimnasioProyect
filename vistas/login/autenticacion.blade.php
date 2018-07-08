<title>Iniciar Sesion</title>

<link rel="stylesheet" type="text/css" href="estilos/login.css">
</head>

<body>
	
	<div class="container-fluid">

		<div class="row">

			<div class="col-md-4 offset-md-4">

				<div id="cajaLogin" class="align-middle col-md-10 offset-md-1">
					
					<center>
						
						<h2>Iniciar Sesión</h2>
						
						<form method='post'>
							<div class="form-group">
								
								<input class="form-control" type="text" maxlength="15" name="usuario" placeholder="Usuario">
							
								<input class="form-control" type="password" maxlength="255" name="contrasena" placeholder="Contraseña">

								<input hidden name="prov" value="index">

									{{Crear::botonEnviar('Ingresar','login','iniciarSesion','enviar','btn btn-primary col-md-8 form-control')}}
									
							</div>
						</form>

					</center>
				</div>
			</div>
		</div>
	</div>
	<img id="imagenFondo" src="utilidades/imagenes/Laptop.jpg">
</body>
</html>
