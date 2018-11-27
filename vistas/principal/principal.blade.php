<title>Principal</title>
<script src="scripts/asistencia.js"></script>
<script src="scripts/carrusel.js"></script>
<link rel="stylesheet" type="text/css" href="estilos/login.css">
<!--<link rel="stylesheet" type="text/css" href="estilos/carrusel.css">-->

</head>

<body style="background-image: url('utilidades/imagenes/asistencia.jpg'); background-size: 100%;">
	<?php
		Crear::comun('navbar');
	?>
	<div class="container">
		
		<div class="row" style="color: white;">
			<div class="col-md-6" style="margin-top:5%;">
				<div class="row justify-content-center">

					<div class="col-md-8">
						
						<center>
							
							<h5> BIENVENIDO AL GIMNASIO DEL IUT </h5>
						</center>

						<input id="asistencia" type="text" name="asistencia" class="form-control btn btn-white" placeholder="Asistencia">
						<center>
							
							{{Crear::botonEnviarAjax('Asistencia','Afiliados','asistenciaAfiliado','registrar','btn btn-dark col-6')}}
						</center>

					</div>

		<div class="row justify-content-center" style="margin-top:4%;">
			<div class="col-md-12">
				<center>
					<div class="contenedor">
					  <div class="widget">
						<div class="card" style="color:black;">
							<div class="card-body">
							    <div class="fecha">
							      <span id="diaSemana" class="diaSemana"></span>
							  	  <span>,</span>
							      <span id="dia" class="dia"></span>
							      <span>de</span>
							      <span id="mes" class="mes"></span>
							      <span>del</span>
							      <span id="anio" class="anio"></span>
							    </div>
							</div>

								<hr>

							<div class="card-body" style="font-size: 300%">
							    <div class="reloj">
								      <span id="horas" class="horas"></span>
								      <span>:</span>
								      <span id="minutos" class="minutos"></span>
								      <span id="ampm" class="ampm"></span>
							    </div>
							</div>
						</div>
					  </div>
					</div>
				</center>
			</div>
		</div>
				</div>

				<!--<div class="row justify-content-center" style="margin-top:4%;">
					<div class="col-md-8">
						<center>
							
							<div class="card" style="color:black;">
								
								<div class="card-body">
									Martes, 20 de Noviembre de 2018
									<hr>
									<h1>12<span style="color:red;">:</span>00</h1>
								</div>
							</div>
						</center>
					</div>
				</div> -->

			</div>

		<div class="col-md-6" style="margin-top:10%;color:black;">
			<div class="row justify-content-center">
				
				<div class="card col-md-8">
					<center>
						<div class="card-body">
							<table>
								<tr>
									<td><b>Nombre:</b> </td>
									<td>Cesar Bracho</td>
								</tr>
								<tr>
									<td><b>Cédula:</b> </td>
									<td>1234567</td>
								</tr>
							</table>
						</div>
						<div class="card-footer">
							<button class="btn btn-primary">Aceptar</button>
						</div>
					</center>
				</div>
				<div class="card col-md-8">
					<center>
						<div class="card-body">
							<span style="color:red;">PERSONA NO AFILIADA AL GIMNASIO</span>
						</div>
						<div class="card-footer">
							<button class="btn btn-primary">Aceptar</button>
						</div>
					</center>
				</div>

			</div>
		</div>	
										
	</div>
	<script src="scripts/principal.js"></script>
	<!--img id="imagenFondo" src="utilidades/imagenes/asistencia.jpg"-->
</body>
</html>

