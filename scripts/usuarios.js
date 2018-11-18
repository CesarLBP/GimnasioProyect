

function funciona(data){

	console.log(data);

}
function error(){

	console.log('ERROR');
}

$(function(){
var contrasena = document.getElementById('contrasena');
var rep_contrasena = document.getElementById('repContrasena');
var contrasena_mod = document.getElementById('contrasena-mod');
var rep_contrasena_mod = document.getElementById('rep-contrasena-mod');

contrasena.onchange = validar_contrasena;
rep_contrasena.onkeyup = validar_contrasena;

contrasena_mod.onchange = validar_contrasena_mod;
rep_contrasena_mod.onkeyup = validar_contrasena_mod;

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
function validar_contrasena_mod(){
	if((contrasena_mod.value.length < 6 ) && (contrasena_mod.value.length >= 1 )){
		contrasena_mod.setCustomValidity('La contraseña debe tener al menos 6 caracteres');
	}else if((contrasena_mod.value.length == 0 ) || (contrasena_mod.value.length >= 6 )){
		contrasena_mod.setCustomValidity('');

	} if(rep_contrasena_mod.value != contrasena_mod.value){
		rep_contrasena_mod.setCustomValidity('Las contraseñas no coinciden');
	}else{
		rep_contrasena_mod.setCustomValidity('');
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