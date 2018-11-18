<?php !isset($system)? header('Location:../../'):0;?>
<title>Gestion de Cursos</title>
</head>

<body>

	<?php

		Crear::comun('navbar');

	?>

	<div class="container-fluid">
		<div class="row">
			<div id="consultarUsuario" class="col-md-12">
				<div style="margin: 1%;">
		 
</div>
	<center>
		<label>Departamento: #</label>
		<label>Trayecto: #</label>
		<label>Seccion: #</label>
	</center>


			<div class="container-fluid">
		<div class="row">
			<div id="consultarUsuario" class="col-md-12">

				<table style="text-align:center" class="table table-hover table-dark col-md-12">
					<thead>
						
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Cedula</th>
							<th>Nota</th>
							<th>Actualizar Nota</th>
						</tr>

					</thead>
					
					<?php 
					$acum=0;
					foreach($cursos as $clave => $valor){


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
						echo $valor['nota'];
						echo '</th>';

						echo '<th>';
						echo $acum.'<input id="acnot" class="form-control" type="text" name="acnot" placeholder= "">';
						echo '</th>';

						echo '</tr>';

						$acum=$acum+1;
						
					}

					?>

				</table>		
			</div>



		</div>

		
	</div>



			</div>
		</div>

		
	</div>
		
</body>
</html>
