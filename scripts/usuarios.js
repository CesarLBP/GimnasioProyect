

function funciona(data){

	console.log(data);

}
function error(){

	console.log('ERROR');
}

$(function(){
var contrasena = document.getElementById('contrasena');
var rep_contrasena = document.getElementById('repContrasena');

contrasena.onchange = validar_contrasena;
rep_contrasena.onkeyup = validar_contrasena;

function validar_contrasena(){
	if(contrasena.value.length < 6 ){
		contrasena.setCustomValidity('La contraseña debe tener al menos 6 caracteres');
	}else{
		contrasena.setCustomValidity('');

	} if(rep_contrasena.value != contrasena.value){
		rep_contrasena.setCustomValidity('Las contraseñas no coinciden');
	}else{
		rep_contrasena.setCustomValidity('');
	}
}





	$('.eliminar').click(function(){
		id = $(this).attr('id');
		$('#eliminar-usuario').val(id);
	});

	$('.editar').click(function(){
		
		var datos = $(this);		
		$('#id-mod').val(datos.attr('id'));
		$('#id-persona-mod').val(datos.attr('id_persona'));
		$('#usuario-mod').val(datos.attr('usuario'));
		$('#permisos-mod').val(datos.attr('permisos'));
		$('#nombres-mod').val(datos.attr('nombres'));
		$('#apellidos-mod').val(datos.attr('apellidos'));
		$('#cedula-mod').val(datos.attr('cedula'));
		$('#sexo-mod').val(datos.attr('sexo'));


	});

});