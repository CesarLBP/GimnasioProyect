<title>Principal</title>
<script src="scripts/asistencia.js"></script>
<link rel="stylesheet" type="text/css" href="estilos/login.css">


</head>

<body>
	<?php
		Crear::comun('navbar');
	?>
	<div class="container-fluid">
			<div>

						
						
			<center>
			
			<h5 style="color: white;"> BIENVENIDO AL GIMNASIO DEL IUT </h5>
				<input id="asistencia" type="text" name="asistencia" class="btn btn-white col-6" placeholder="Asistencia">
				{{Crear::botonEnviarAjax('Asistencia','Afiliados','asistenciaAfiliado','registrar','btn btn-dark col-6')}}

			</center>
										
			</div>
	</div>
	<script src="scripts/principal.js"></script>
	<img id="imagenFondo" src="utilidades/imagenes/Apple.jpg">
</body>
</html>

