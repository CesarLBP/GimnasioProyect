function funciona(data){

	console.log(data);

}
function error(){

	console.log('ERROR');
}

$(function(){

	$('#enviar').click(function(){

			datos={

				//dep:$('#dep').val(),
				tra:$('#tra').val()
			};
			
			ETFPost(datos,funciona,error);

	});

});