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

});