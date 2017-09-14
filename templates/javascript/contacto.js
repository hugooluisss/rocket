$(document).ready(function(){
	$("#frmContacto").validate({
		debug: true,
		rules: {
			txtAsunto: "required",
			txtCorreo: {
				required: true,
				email: true
			},
			txtNombre: "required",
			txtMensaje: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			$(form).find("[type=submit]").prop("disabled", true);$(form).find("[type=submit]").prop("disabled", true)
			$.post("cfrontend", {
				"asunto": $("#txtAsunto").val(),
				"correo": $("#txtCorreo").val(),
				"nombre": $("#txtNombre").val(),
				"mensaje": $("#txtMensaje").val(),
				"action": "contacto"
			}, function(resp){
				$(form).find("[type=submit]").prop("disabled", false);
				if (resp.band){
					alert("Tu mensaje se ha enviado, pronto haremos contacto contigo");
					$(form)[0].reset();
				}else
					alert("No se pudo enviar tu mensaje");
			}, "json");
		}
	});
});