$(function(){

	$('.item').change(function(){
		var item = [];
		item[0] = $('#departamento');
		item[1] = $('#trayecto');
		var variables = '';
		
		for (var i = item.length - 1; i >= 0; i--) {
			variables += '&'+item[i].attr('id')+'='+item[i].val();
		}
		window.location ='./?mod=cursos/crear_curso'+variables;
	});

});