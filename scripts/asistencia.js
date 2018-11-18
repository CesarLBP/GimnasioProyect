
$(function(){
function funciona(data){

	alertify.success('Asistencia Registrada');
	$('#asistencia').val('');
}
function error(){

	console.log('ERROR');
}


	$('#registrar').click(function(){

				datos={
					asistencia:$('#asistencia').val()
				}
			
			ETFPost(datos,funciona,error);

	});

});