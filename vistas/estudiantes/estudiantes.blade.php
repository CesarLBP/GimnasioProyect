<?php !isset($system)? header('Location:../../'):0;?>
<title>Gestion de Estudiantes</title>
</head>

<body>

	{{Crear::comun('navbar')}}

	<div class="container-fluid">

		<div class="row">
			
			<div  id="registrarUsuario" class="col-md-5">
				
				<div class="col-md-10 offset-md-2 card" style="padding:0;">
					<div class="card-header">
						<h5 id="titulo" align="center"><strong>Inscribir Estudiante</strong></h5>	
						<center>
							<span style="color:red">Todos los datos son requeridos
							</span>

						</center>
					</div>
					
						<div class="card-body">
						
					

							<input id="nombres" class="form-control" type="text" name="nombres" placeholder="Nombres">

							<input id="apellidos" class="form-control" type="text" name="apellidos" placeholder="Apellidos">

							<input id="cedula" class="soloNumeros form-control limitarLargo" type="text" name="cedula" placeholder="Cédula" pattern="{1,10}">

							<select class="form-control">
								<option disabled selected>Sexo</option>
								<option>M</option>
								<option>F</option>
							</select>

							<select class="form-control">
								<option disabled selected>Departamento</option>
								<option>Informatica</option>
								<option>Electronica</option>
								<option>Electricidad</option>
								<option>Contaduria</option>
								<option>Instrumentacion y Control</option>
							</select>

						
							<input hidden name="prov" value="reg">	
						</div>
					<div class="card-footer">


						{{Crear::code()}}

						{{Crear::botonEnviarAjax('Enviar','estudiantes','prueba','registrar','btn btn-dark offset-4 col-4')}}
						
						
					</div>
		
				</div>
			</div>

			<div id="consultarUsuario" class="col-md-5 offset-md-1">
				
				<table style="text-align:center" class="table table-hover table-dark col-md-12">
					<thead>
						
						<tr>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Departamento</th>
						</tr>

					</thead>

					<?php 

					foreach($estudiantes as $clave => $valor){

						echo '<tr>';

						echo '<th>';
						echo $valor['nombres'];
						echo '</th>';

						echo '<th>';
						echo $valor['apellidos'];
						echo '</th>';

						echo '<th>';
						echo $valor['departamento'];
						echo '</th>';

						echo '</tr>';
					}


					?>


				</table>		
			</div>



		</div>

		
	</div>
	
	<div class="modal fade" id="editarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header" style="margin:1%;padding:1%;">

	        <div class="modal-body">
		        <div class="row">
		        	<div class="co-md-4 offset-md-4">
		        		
			        	<h5 class="col-md-12 modal-title" id="exampleModalLabel">Editar Usuario</h5>
		        	</div>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span class="fa fa-times-circle" ></span>
			        </button>

		        </div>

		    </div>
	      </div>

	      <div class="modal-body">

	        <input id="usuario" class="col-md-8 offset-md-2 form-control" placeholder="Usuario" type="text">
	        <input id="contrasena" class="col-md-8 offset-md-2 form-control" placeholder="Contraseña" type="text">
	        <input id="repContrasena" class="col-md-8 offset-md-2 form-control" placeholder="Repetir Contraseña" name="">
	        <select id="permisos" class="col-md-4 offset-md-4 form-control">
	        	<option value="1">Administrador</option>
	        	<option value="2">Usuario</option>
	        </select>
	      </div>

	      <div class="modal-footer" style="margin:0;padding:0;">
	        
		      <div class="modal-body">
		        <div class="col-md-4 offset-md-4">
		        	
		        	<button type="button" class="btn btn-primary col-md-12">Guardar</button>
		        </div>
		      </div>
	      </div>

	    </div>
	  </div>
	</div>
	
	<div class="modal fade" id="eliminarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	    	<div class="modal-header" style="margin:0;padding:0;">
		    	<div class="modal-body">
		    		
	    		
		    		<h5 class="text-center">¿Esta seguro que desea eliminar a este usuario?</h5>
		    	</div>
		    	
	    	</div>
	      

		    <div class="modal-body">

		    	
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="btn-group col-md-8 offset-md-2">
		    				
				    		<button data-dismiss="modal" class=" col-md-12 btn btn-primary">Aceptar</button>			    		
			    		
				    		<button data-dismiss="modal" class=" col-md-12 btn btn-danger">Cancelar</button>			    		
		    			</div>
		    		</div>
		    	</div>
		    	
		    </div>

	    </div>
	  </div>
	</div>
	<script src="scripts/estudiantes.js"></script>
</body>
</html>

