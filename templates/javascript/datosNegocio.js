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


$(document).ready(function(){
	$("#winLogotipo").find("form").fileupload({
		// This function is called when a file is added to the queue
		add: function (e, data) {
	    	
		
			// Automatically upload the file once it is added to the queue
			var jqXHR = data.submit();
		},
		progress: function(e, data){
			var progress = parseInt(data.loaded / data.total * 100, 10);
			
			if(progress == 100){
				//data.context.removeClass('working');
				//getImagenes($("#winUploadImagen").find("form").find("#dispositivo").val());
			}
		},
		fail: function(){
			alert("Ocurrió un problema en el servidor, contacta al administrador del sistema");
			
			console.log("Error en el servidor al subir el archivo, checa permisos de la carpeta repositorio");
		}, done: function(e, data){
			var result = jQuery.parseJSON(data.result);
			
			if (result.band){
				$("#imgLogotipo").attr("src", "repositorio/negocios/" + $("#imgLogotipo").attr("identificador") + ".jpg?" + Math.random());
				$("#winLogotipo").modal("hide");
			}else
				alert("No se pudo subir");
		}
	});
});