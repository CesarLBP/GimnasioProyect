$(function(){

	function funciona(data){

		alertify.success('Asistencia Registrada');
		$('#asistencia').val('');

	}

	function error(){

		console.log('ERROR');
	}


	$('#registrar').click(function(){
		alert('fuera de aqui sapo');

	});

	$('#asistencia').keypress(function(e) {
		if (e.keycode==='13') {alert('funca');}
	});

});