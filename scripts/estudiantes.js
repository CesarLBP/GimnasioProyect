function funciona(data){

	console.log(data);

}
function error(){

	console.log('ERROR');
}

$(function(){


	$('#registrar').click(function(){
		

		if ($('#nombres').val()=='') {

			alertify.alert('El campo Nombres no puede estar vacio');

		}else if ($('#apellidos').val()==''){
			
			alertify.alert('El campo Apellidos no puede estar vacio');

		}else if ($('#cedula').val()==''){
			
			alertify.alert('El campo Cedula no puede estar vacio');

		}else if ($('#sexo').val()=='0'){
			
			alertify.alert('El campo Sexo no puede estar vacio');

		}else if ($('#departamento').val()=='0'){
			
			alertify.alert('El campo Departamento no puede estar vacio');

		}else if ($('#trayecto').val()==''){

			alertify.alert('El campo Trayecto no puede estar vacio');

		}else{

			datos={

				nombres:$('#nombres').val(),
				apellidos:$('#apellidos').val(),
				cedula:$('#cedula').val(),
				sexo:$('#sexo').val(),
				departamento:$('#departamento').val(),
				trayecto:$('#trayecto').val()
			};
			
			ETFPost(datos,funciona,error);
		}

	});

});