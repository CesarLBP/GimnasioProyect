function funciona(data){

	console.log(data);

}
function error(){

	console.log('ERROR');
}

$(function(){


	$('#enviar').click(function(){


		if ($('#nombres').val()=='') {

			alertify.alert('El campo Nombres no puede estar vacio');

		}else if ($('#apellidos').val()==''){
			
			alertify.alert('El campo Apellidos no puede estar vacio');

		}else if ($('#cedula').val()==''){
			
			alertify.alert('El campo Cedula no puede estar vacio');

		}else if ($('#sexo').val()=='0'){
			
			alertify.alert('El campo Sexo no puede estar vacio');

		}else if ($('#sangre').val()=='0'){
			
			alertify.alert('El campo Tipo de Sangre no puede estar vacio');

		}else if ($('#estatura').val()==''){

			alertify.alert('El campo Estatura no puede estar vacio');

		}else if ($('#peso').val()==''){

			alertify.alert('El campo Peso no puede estar vacio');

		}else if ($('#fecha').val()==''){

			alertify.alert('El campo Fecha no puede estar vacio');

		}else{

			datos={

				nombres:$('#nombres').val(),
				apellidos:$('#apellidos').val(),
				cedula:$('#cedula').val(),
				sexo:$('#sexo').val(),
				sangre:$('#sangre').val(),
				estatura:$('#estatura').val(),
				peso:$('#peso').val(),
				fecha:$('#fecha').val()
			};
			
			ETFPost(datos,funciona,error);

		}

	});

});