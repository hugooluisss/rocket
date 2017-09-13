$(document).ready(function(){
	$("#frmRegistroSocio").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			txtApellidos: "required",
			txtCorreo: {
				"required": true,
				"email": {
					"required": true,
					"remote": {
						url: "cusuarios",
						type: "post",
						data: {
							"action": "validarEmail",
						}
					}
				}
			},
			txtPass: "required",
			txtPass2: {
				required: true,
				equalTo: "#txtPass"
			}
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TSocio;
			obj.add({
				nombre: $("#txtNombre").val(), 
				apellidos: $("#txtApellidos").val(), 
				municipio: $("#txtMunicipio").val(), 
				entidadFederativa: $("#txtEntidadFederativa").val(), 
				correo: $("#txtCorreo").val(), 
				pass: $("#txtPass").val(), 
				fn: {
					after: function(datos){
						if (datos.band){
							$("#frmRegistroSocio").get(0).reset();
							alert("¡¡¡ Felicidades !!! ya eres nuestro socio");
						}else{
							alert("No se pudo guardar el registro");
						}
					}
				}
			});
        }

    });
    
    
    $("#frmLoginSocio").validate({
		debug: true,
		rules: {
			txtTarjetaUser: "required",
			txtPassTarjeta: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TSocio;
			obj.login({
				usuario: $("#txtTarjetaUser").val(), 
				pass: $("#txtPassTarjeta").val(), 
				fn: {
					after: function(datos){
						if (datos.band){
							$("#frmLoginSocio").get(0).reset();
							location.href = "sociopanel";
						}else{
							alert("Tus datos no son correctos, intenta corrigiendolos");
						}
					}
				}
			});
        }
    });
    
    $(".recuperarPass").click(function(){
    	var correo = prompt("¿Cual es tu cuenta de correo electrónico con la que te registraste?");
    	
    	$.post("cusuarios", {
    		"correo": correo,
    		"action": "recuperarPass"
    	}).done(function(resp){
    		alert("Te enviaremos los datos a tu correo");
    	});
    });
});