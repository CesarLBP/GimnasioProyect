<title>Principal</title>

</head>

<body>
	<div class="container-fluid">
		<?php
		
			Crear::comun('navbar');
			
		?>

		<input type="text" id="nombre">
		<input type="text" id="apellido">
		<?php Crear::botonEnviarAjax('enviar','principal','prueba','enviar','btn btn-primary') ?>
		<?php Crear::code()?>
	
	</div>
	<script src="scripts/principal.js"></script>
</body>
</html>

