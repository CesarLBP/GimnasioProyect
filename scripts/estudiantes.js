soloNumeros()
var cardnumber = $(".limitarLargo").val();
if (cardnumber.length < 12) {
   $("#card_error").toggle();
   $("input#cardnumber").focus();
   return false;
}
$(function(){


	$('#registrar').click(function(){

		if($('#nombres').val()==''){

			alertify.alert('Debe indicar sus nombres.');

		}else if($('#apellidos').val()==''){

			alertify.alert('Debe indicar sus apellidos.');

		}else if($('#cedula').val()==''){

			alertify.alert('Debe indicar una cedula.');
		}




	});




});