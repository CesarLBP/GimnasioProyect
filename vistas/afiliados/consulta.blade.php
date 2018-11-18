<?php !isset($system)? header('Location:../../'):0;?>
<title>Gestion de Afiliado</title>
</head>

<body>
	<?php

		Crear::comun('navbar');


		
	?>
	<div class="container-fluid">
		<div class="row">
			<div id="consultarUsuario" class="col-md-12">
				
			<center>
				<input type="button" name="" value="Inscribir Afiliado" class="btn btn-primary" style="margin: 1%;">
			</center>


				<table style="text-align:center" class="table table-hover table-dark col-md-12">
					<thead>
						
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

						echo '<tr>';

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

