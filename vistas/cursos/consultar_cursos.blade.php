<?php !isset($system)? header('Location:../../'):0;?>
<title>Gestion de Cursos</title>
</head>

<body>
	{{Crear::comun('navbar')}}
	<div class="container">
		
		<div class="row" style="margin-top:3%;">
			<div class="col-md-3">
				<select class="form-control" required>
					<option disabled selected>Departamento</option>
					<option value="1">Informatica</option>
					<option value="2">Electronica</option>
					<option value="3">Química</option>
					<option value="4">Procesos Quémicos</option>
				</select>
			</div>
			<div class="col-md-3">
				<select class="form-control" required>
					<option disabled selected>Trayecto</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</div>
			<div class="col-md-3">
				<select class="form-control" required>
					<option disabled selected>Profesor</option>
					<option value="1">Pedro Martinez</option>
					<option value="2">Julio Cáceres</option>
					<option value="3">German Rodriguez</option>
					<option value="4">Omar Montoya</option>
				</select>
			</div>
			<div class="col-md-3">
				<select class="form-control" required>
					<option disabled selected>Estado</option>
					<option value="1">Abierto</option>
					<option value="2">Cerrado</option>
				</select>
			</div>


		</div>
		<hr>
		<div class="row justify-content-center">
			<div class="col-md-3" style="margin:1%;">
				<center>
					<div class="card">
						<div class="card-body">
							Informatica<br>Trayecto 1
							<hr>
							<span style="color:green;">Abierto</span>
						</div>
					</div>
				</center>
			</div>
			<div class="col-md-3" style="margin:1%;">
				<center>
					<div class="card">
						<div class="card-body">
							Electronica<br>Trayecto 2
							<hr>
							<span style="color:red;">Cerrado</span>
						</div>
					</div>
				</center>
			</div>
			<div class="col-md-3" style="margin:1%;">
				<center>
					<div class="card">
						<div class="card-body">
							Contaduria Pública<br>Trayecto 1
							<hr>
							<span style="color:green;">Abierto</span>
						</div>
					</div>
				</center>
			</div>
			<div class="col-md-3" style="margin:1%;">
				<center>
					<div class="card">
						<div class="card-body">
							Quimica<br>Trayecto 4
							<hr>
							<span style="color:red;">Cerrado</span>
						</div>
					</div>
				</center>
			</div>
			<div class="col-md-3" style="margin:1%;">
				<center>
					<div class="card">
						<div class="card-body">
							Mecatronica<br>Trayecto 1
							<hr>
							<span style="color:green;">Abierto</span>
						</div>
					</div>
				</center>
			</div>


		</div>
	</div>
		

</body>
</html>

