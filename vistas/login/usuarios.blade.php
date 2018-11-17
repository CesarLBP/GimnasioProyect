<?php !isset($system)? header('Location:../../'):0;?>
<title>Iniciar Sesion</title>
<link rel="stylesheet" type="text/css" href="estilos/usuarios.css">
<script src="scripts/usuarios.js"></script>
</head>

<body>
	<?php Crear::comun('navbar');?>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<?php
					Crear::alerta('del',[
					0=>['Ha ocurrido un error al eliminar al usuario. Inténtelo de nuevo.'=>'warning'],
					1=>['Usuario eliminado correctamente'=>'success'] ]);
				?>
				<?php
					Crear::alerta('upd',[
					0=>['Ha ocurrido un error al actualizar los datos del usurario. Inténtelo de nuevo.'=>'danger'],
					1=>['Datos actualizados correctamente'=>'success'] ]);
				?>
				<?php
					Crear::alerta('reg',[
					0=>['El usuario no fue creado. Intente crear al usuario nuevamente'=>'warning'],
					1=>['Usuario creado correctamente'=>'success'],
					2=>['Ha ocurrido un inconveniente interno. Intente crear al usuario nuevamente'=>'success'] ]);
				?>
			</div>

		</div>
		<div class="row" style="margin-top: 2%;">
			
			<div  id="registrarUsuario" class="col-md-4">

				<div class="card" style="padding:0;">
					<div class="card-header" style="background: #212529; border:none; color:white">
						<h5 id="titulo" align="center"><strong>REGISTRAR USUARIO</strong></h5>	
					</div>
					<div class="card-body">
						<form method="post" action=".">

							<input id="nombres" class="form-control" type="text" name="nombres" placeholder="Nombres" required pattern="[a-zA-Z]{2,20}">

							<input id="apellidos" class="form-control" type="text" name="apellidos" placeholder="Apellidos" required pattern="[a-zA-Z]{2,20}">

							<input id="cedula" class="form-control" type="text" name="cedula" placeholder="Cédula" required pattern="[0-9]{6,}" title="Debe ser un número de seis (6) dígitos o más">

							<select id="sexo" name="sexo" class="form-control" required>
								<option disabled selected>Sexo</option>
								<option value="M">Masculino</option>
								<option value="F">Femenino</option>
							</select>

							<input id="usuario" class="form-control" type="text" name="usuario" placeholder="Usuario" required>

							<input id="contrasena" class="form-control" type="password" name="contrasena" placeholder="Contraseña" required>

							<input id="repContrasena" class="form-control" type="password" placeholder="Repetir Contraseña" required>
							
							<select id="permisos" class="form-control" name="permisos" style="margin-bottom: 3%;" required>
					        	<?php if(Funciones::PGSC('permisos')[0]=='1'):?>

									<option value="1111">Root</option>
								
								<?php endif ?>
								<option disabled selected>Permisos</option>
								<option value="0001">Profesor</option>
								<option value="0010">Supervisor</option>
								<option value="0100">Jefe</option>
							</select>

							{{Crear::botonEnviar('Registrar','login','registrar_usuario','enviar','offset-4 btn btn-dark')}}
							
						</form>
					</div>						
				</div>
			</div>

			<div id="consultarUsuario" class="col-md-8">
				
				<table style="text-align:center" class="table table-hover table-striped col-md-12">
					<thead class="thead-dark">
						
						<tr>
							<th>Usuarios</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Permisos</th>
							<th>Opciones</th>
						</tr>
					</thead>
					@foreach($usuarios as $clave => $valor)
						@if((($valor['id']!=-1) && ($valor['id']!=$_SESSION['id']))&&($valor['estado']!=0))
							<tr class="bg-light">
								<td>{{$valor['usuario']}}</td>
								<td>{{$valor['nombres']}}</td>
								<td>{{$valor['apellidos']}}</td>
								<td>
									@if($valor['permisos']=='0100')
										{{'Jefe'}}
									@elseif($valor['permisos']=='0010')
										{{'Supervisor'}}
									@elseif($valor['permisos']=='0001')
										{{'Profesor'}}
									@endif
								</td>
								
								<td clave="{{$clave}}" id="{{$valor['id']}}" usuario="{{$valor['usuario']}}" permisos="{{$valor['permisos']}}">

									<button id="{{$valor['id']}}" id_persona="{{$valor['id_persona']}}" nombres="{{$valor['nombres']}}" apellidos="{{$valor['apellidos']}}" cedula="{{$valor['cedula']}}" sexo="{{$valor['sexo']}}" usuario="{{$valor['usuario']}}" permisos="{{$valor['permisos']}}"  data-toggle="modal" data-target="#editarUsuario" class="editar btn btn-link fas fa-edit"></button>

									<button id="{{$valor['id']}}" data-toggle="modal" data-target="#eliminarUsuario" class="eliminar btn btn-link fas fa-times-circle"></button>
								</td>
									
								
							</tr>
						@endif
					@endforeach
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
	      	<form method="post" action="./?mod=login/modificar_usuario">
		      		
		        <input hidden name="id_mod" id="id-mod">
		        <input hidden name="id_persona_mod" id="id-persona-mod">

		        <input name="nombres_mod" id="nombres-mod" class="col-md-8 offset-md-2 form-control" placeholder="Usuario" type="text">

		        <input name="apellidos_mod" id="apellidos-mod" class="col-md-8 offset-md-2 form-control" placeholder="Contraseña" type="text">

		        <input name="cedula_mod" id="cedula-mod" class="col-md-8 offset-md-2 form-control" placeholder="Repetir Contraseña" type="text">
		        <input name="usuario_mod" id="usuario-mod" class="col-md-8 offset-md-2 form-control" placeholder="Usuario" type="text">
		        <input name="contrasena_mod" id="contrasena-mod" class="col-md-8 offset-md-2 form-control" placeholder="Contraseña" type="text">
		        <input id="repContrasena" class="col-md-8 offset-md-2 form-control" placeholder="Repetir Contraseña" name="">
		        <div class="row">
		        	
			        <div class="col-md-4 offset-md-2">
			        	
				        <select id="permisos-mod" name="permisos_mod" class="form-control">
				        	<option disabled>Permisos</option>
				        	<?php if(Funciones::PGSC('permisos')[0]=='1'):?>

								<option value="1111">Root</option>
											
							<?php endif ?>
				        	<option value="0001">Profesor</option>
				        	<option value="0010">Supervisor</option>
				        	<option value="0100">Jefe</option>
				        </select>
			        </div>
			        <div class="col-md-4">
			        	
				        <select id="estado-mod" name="estado_mod" class="form-control">
				        	<option value="1" selected>Activo</option>
				        	<option value="2">Inactivo</option>
				        </select>
			        </div>
		        </div>

		      </div>

		      <div class="modal-footer" style="margin:0;padding:0;">
		        
			      <div class="modal-body">
			        <div class="col-md-4 offset-md-4">

			        	{{Crear::botonEnviarAjax('Guardar','Login','modificar_usuario','guardar','btn btn-primary col-md-12')}}

			        </div>
			      </div>
		      </div>
      	</form>

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
		    		
		    			<div class="col-md-4 offset-md-2">
		    				<form method="post" action="./?mod=login/eliminar_usuario">
		    					<input id="eliminar-usuario" hidden name="usuario" value="">
				    			<input type="submit" class="col-md-12 btn btn-primary" value="Aceptar">		    		
		    				</form>
		    			</div>
		    			<div class="col-md-4">

				    		<button data-dismiss="modal" class=" col-md-12 btn btn-danger">Cancelar</button>			    		
		    			</div>
		    	</div>
		    	
		    </div>

	    </div>
	  </div>
	</div>
	
</body>
</html>
