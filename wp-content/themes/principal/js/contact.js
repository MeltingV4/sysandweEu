$(document).ready(function() {// wait until the document is ready
	
	$("#send").click(function(){ // when the button is clicked the code executes
	//alert('envio');
		$('.error').fadeOut('slow'); // reset the error messages (hides them)

		var error_form = false; // we will set this true if the form isn't valid
		
		//////////Nombre
		var name = $("#form_name").val(); // get the value of the input field
		
		//////Empresa
		var empresa = $("#form_empresa").val(); // get the value of the input field
		
		///Ciudad
		var ciudad = $("#form_ciudad").val();
		
		///País
		var pais = $("#form_pais").val();
		
		/////////Email
		var email_compare = /^([a-z0-9_.-]+)@([da-z.-]+).([a-z.]{2,6})$/; // Syntax to compare against input
		var email = $("#form_email").val(); // get the value of the input field
		
		///Telefono
		var telefono = $("#form_tel").val();
		
		
		/////Interes
		var interes = new Array();
		$("#form_interes").find("option:selected").each(function() {
			interes.push($(this).attr('value'));
		});
		
		////Mensaje
		var mensaje = $("#form_message").val(); // get the value of the input field
		
		var data_string = "nombre=" + name + "&empresa=" + empresa + "&ciudad=" + ciudad + "&pais=" + pais + "&email=" + email + "&telefono=" + telefono + "&interes=" + interes + "&mensaje=" + mensaje;

		/*$.ajax({
			type: "POST",
			url: "mail-it.php",
			data: data_string,
			timeout: 6000,
			error: function(request,error) {
				if (error == "timeout") {
					$('#err-timedout').slideDown('slow');
				}
				else {
					$('#err-state').slideDown('slow');
					$("#err-state").html('Ha ocurrido un error: ' + error + '');
				}
			},
			success: function(data) {
				$('#ajax-form').slideUp('slow');
				$('#ajaxsuccess').slideDown('slow');
				//location.href = 'contacto.html';
				setTimeout("location.href='contacto.html'", 5000);
				
			}
		});*/
		//location.href = 'contacto.html';

		return false; // stops user browser being directed to the php file
		//location.href = 'contacto.html';
	}); // end click function
});
