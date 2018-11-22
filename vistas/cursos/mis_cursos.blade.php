<?php !isset($system)? header('Location:../../'):0;?>
<title>Mis Cursos</title>
<script src="scripts/mis_cursos.js"></script>
</head>
<body>
	{{Crear::comun('navbar')}}
	<div class="container">
	<div class="row" style="margin-top:5%;">
		<div class="col-md-4">
			<div class="row">
				<div class="col-12">
					<center>
						<br>
						Mis Cursos
						<br><br>
						
					</center>
				</div>
			</div>
			<div class="row">
				
				<table class="table table-hover table-striped text-center">
					<thead class="thead-dark">
						<tr>
							<th>Departamento</th>
							<th>Trayecto</th>
						</tr>
					</thead>
						<tr class="curso bg-light">
							<th>Informatica</th>
							<th>I</th>
						</tr>
					<a href="#">
					<tr class="curso bg-light">
						<th>Electronica</th>
						<th>II</th>
					</tr>
					</a>
				</table>			
			</div>
		</div>
		
		<div class="col-md-7 offset-md-1">
			<div class="row">
				<div class="col-12">
					<center>
						
						Detalles del curso:<br>
						Informática Trayecto 1 <br>
						Evaluaciones Realizadas: <span id="numero-evaluaciones">2</span>
					</center>
				</div>
			</div>
			<div class="row">
				
				<table class="table text-center">
					<thead class="thead-dark">
						<tr class="bg-light">
							<th></th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Cedula</th>
							<th>Promedio</th>
						</tr>
					</thead>
					<tr class="bg-light">
						<th><button data-toggle="modal" data-target="#modificar-notas" class="btn btn-success">-O</button></th>
						<th>Cesar</th>
						<th>Bracho</th>
						<th>12345678</th>
						<th>01</th>
					</tr>
					<tr class="bg-light">
						<th><button data-toggle="modal" data-target="#modificar-notas" class="btn btn-success">-O</button></th>
						<th>Rommel</th>
						<th>Montoya</th>
						<th>87654321</th>
						<th>20</th>
					</tr>
					<tr class="bg-light">
						<th><button data-toggle="modal" data-target="#modificar-notas" class="btn btn-success">-O</button></th>
						<th>Daniela</th>
						<th>Matos</th>
						<th>13243546</th>
						<th>15</th>
					</tr>
					
				</table>
			</div>
			<div class="row justify-content-center">
				<button data-toggle="modal" data-target="#cargar-notas" class="btn btn-primary">
					Cargar Nota
				</button>
			</div>
		</div>
	</div>

	</div>
	<div class="modal fade" id="cargar-notas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			      

				<div class="modal-body" style="background: #212529; border:none; color:white">
				    <div class="row">
				    	<div class="col-md-12">
				    		<center>
				    			
				        		<h5>Cargar Notas</h5>
				    		</center>
				    	</div>

				    </div>

				</div>
				<form method="post" action="#">
					<div class="modal-body">
						<center>
							
							<table>
								<tr>
									<th id="estudiante">Cesar Bracho</th>
									<th id="campo"><input class="form-control" type="text" placeholder="Nota"></th>
								</tr>
								<tr>
									<th id="estudiante">Rommel Montoya</th>
									<th id="campo"><input class="form-control" type="text" placeholder="Nota"></th>
								</tr>
								<tr>
									<th id="estudiante">Daniela Matos</th>
									<th id="campo"><input class="form-control" type="text" placeholder="Nota"></th>
								</tr>

							</table>
						</center>
					</div>

					<div class="modal-footer" style="margin:0;padding:0;">

						<div class="modal-body">
							<div class="row justify-content-center">
								
								<div class="col-md-4">

									{{Crear::botonEnviarAjax('Cargar','','','','btn btn-primary col-md-12')}}

								</div>
								<div class="col-md-4">
									<button data-dismiss="modal" class=" col-md-12 btn btn-danger">Cancelar</button>			    		
								</div>
							</div>
						</div>
					</div>
		      	</form>

			</div>
		</div>
	</div>
	<div class="modal fade" id="modificar-notas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			      

				<div class="modal-body" style="background: #212529; border:none; color:white">
				    <div class="row">
				    	<div class="col-md-12">
				    		<center>
				    			
				        		<h5 id="nombre">Cesar Bracho</h5>
				    		</center>
				    	</div>

				    </div>

				</div>
				<form method="post" action="#">
					<div class="modal-body">
						<center>
							<table>
								<tr>
									<th>Nota 1</th>
									<th><input id="nota1" readonly class="form-control" type="text" placeholder="Nota" value="18"></th>
									<th><div class="mod-nota1 btn btn-success">L</div></th>
								</tr>
								<tr>
									<th>Nota 2</th>
									<th><input id="nota2" readonly class="form-control" type="text" placeholder="Nota" value="20"></th>
									<th><div class="mod-nota2 btn btn-success">L</div></th>
								</tr>
								<tr>
									<th>Nota 3</th>
									<th><input id="nota3" readonly class="form-control" type="text" placeholder="Nota"></th>
									<th><div class="mod-nota3 btn btn-success">L</div></th>
								</tr>
								<tr>
									<th>Nota 4</th>
									<th><input id="nota4" readonly class="form-control" type="text" placeholder="Nota"></th>
									<th><div class="mod-nota4 btn btn-success">L</div></th>
								</tr>
								<tr>
									<th>Nota 5</th>
									<th><input id="nota5" readonly class="form-control" type="text" placeholder="Nota"></th>
									<th><div class="mod-nota5 btn btn-success">L</div></th>
								</tr>


							</table>
						</center>
					</div>

					<div class="modal-footer" style="margin:0;padding:0;">

						<div class="modal-body">
							<div class="row justify-content-center">
								
								<div class="col-md-4">

									{{Crear::botonEnviarAjax('Actualizar Notas','','','','btn btn-primary col-md-12')}}

								</div>
								<div class="col-md-4">
									<button data-dismiss="modal" class=" col-md-12 btn btn-danger">Cancelar</button>			    		
								</div>
							</div>
						</div>
					</div>
		      	</form>

			</div>
		</div>
	</div>

</body>
</html>