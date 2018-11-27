<?php !isset($system)? header('Location:../../'):0;?>
<title>Gestion de Afiliado</title>
</head>

<body>
	<?php

		Crear::comun('navbar');


		
	?>
	<div class="container-fluid">
		<div class="row justify-content-center">
			<h5> CONSULTA DIARIA </h5>
		</div>
		<div class="row">
			<div id="consultarUsuario" class="col-md-12">

				<table style="text-align:center" class="table table-hover table-striped col-md-12">
					<thead class="thead-dark">
						
						<tr>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Cedula</th>
							<th>T. Sangre</th>
							<th>Fecha Nac.</th>
							<th>Asistencia</th>
						</tr>

					</thead>

					<?php 

					foreach($afiliados as $clave => $valor){

						echo '<tr class="bg-light">';

						echo '<th>';
						echo $valor['nombres'];
						echo '</th>';

						echo '<th>';
						echo $valor['apellidos'];
						echo '</th>';

						echo '<th>';
						echo $valor['cedula'];
						echo '</th>';

						echo '<th>';
						echo $valor['tipo_sangre'];
						echo '</th>';
					
						echo '<th>';
						echo $valor['fecha_nac'];
						echo '</th>';

						echo '<th>';
						echo $valor['asistencia'];
						echo '</th>';

						echo '</tr>';
					}


					?>


				</table>		
			</div>



		</div>

		
	</div>
		

</body>
</html>

