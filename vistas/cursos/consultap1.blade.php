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

			<div class="container-fluid">
		<div class="row">
			<div id="consultarUsuario" class="col-md-12">

				<table style="text-align:center" class="table table-hover table-dark col-md-12">
					<thead>
						
						<tr>
							<th>Departamento</th>
							<th>Trayecto</th>
							<th>Seccion</th>
							<th> </th>
						</tr>

					</thead>
					
					<?php 

					foreach($cursos as $clave => $valor){

						echo '<tr>';

						echo '<th>';
						echo $valor['departamento'];
						echo '</th>';

						echo '<th>';
						echo $valor['trayecto'];
						echo '</th>';

						echo '<th>';
						echo '1';
						echo '</th>';

						echo '</tr>';
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

