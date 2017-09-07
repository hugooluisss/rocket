$(document).ready(function(){
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtCorreo: {
				"required": true,
				"remote": {
					url: "cusuarios",
					type: "post",
					data: {
						"action": "validarEmail",
						"id": function(){
							return $("#id").val();
						}
					}
				}
			},
			txtNombre: "required",
			txtApellidos: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
		
			var obj = new TNegocio;
			obj.add({
				id: $("#id").val(), 
				nombre: $("#txtNombre").val(), 
				apellidos: $("#txtApellidos").val(), 
				correo: $("#txtCorreo").val(),
				pass: $("#txtPass").val(),
				razonsocial: $("#txtRazonSocial").val(),
				giro: $("#txtGiro").val(),
				rfc: $("#txtRFC").val(),
				calle: $("#txtCalle").val(),
				colonia: $("#txtColonia").val(),
				codigopostal: $("#txtCodigoPostal").val(),
				localidad: $("#txtLocalidad").val(),
				municipio: $("#txtMunicipio").val(),
				entidadfederativa: $("#txtEntidadFederativa").val(),
				telefono: $("#txtTelefono").val(),
				fn: {
					before: function(){
						$(form).find("[type=submit]").prop("disabled", true);
					},
					after: function(datos){
						$(form).find("[type=submit]").prop("disabled", false);
						if (datos.band)
							alert("Sus datos fueron actualizados");
						else
							alert("Upps... No se pudo guardar");
					}
				}
			});
	    }
	
	});
});