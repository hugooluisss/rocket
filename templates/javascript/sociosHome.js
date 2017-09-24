$(document).ready(function(){
	$.get("repositorio/entidadesestados.json", function(entidades){
		$("#txtEntidadFederativa").html("");
		$.each(entidades, function(entidad, municipios){
			var option = $("<option />", {
				value: entidad,
				text: entidad,
				json: JSON.stringify(municipios)
			});
			
			$("#txtEntidadFederativa").append(option);
		});
		
		$("#txtEntidadFederativa").change(function(){
			setEstados();
		});

		setEstados();
		
		function setEstados(){
			$("#txtMunicipio").html("");
			var municipios = jQuery.parseJSON($("#txtEntidadFederativa option:selected").attr("json"));
			
			$.each(municipios, function(i, municipio){
				var option = $("<option />", {
					value: municipio,
					text: municipio,
				});
				
				$("#txtMunicipio").append(option);
			});
		}
	}, "json");

	$("#frmRegistroSocio").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			txtApp: "required",
			txtCorreo: {
				"required": true,
				"email": true,
				remote: {
					url: "cusuarios",
					type: "post",
					data: {
						"action": "validarEmail",
					}
				}
			},
			txtPass: "required",
			txtPass2: {
				required: true
			}
		},
		wrapper: 'span', 
		messages: {
			txtCorreo: {
				remote: "Existe un socio registrado con este correo, intenta con otro"
			}
		},
		submitHandler: function(form){
			if ($(form).find("#txtPass2").val() != $(form).find("#txtPass").val())
				alert("Las contraseñas no son iguales");
			else{
				var obj = new TSocio;
				obj.add({
					nombre: $(form).find("#txtNombre").val(), 
					app: $(form).find("#txtApp").val(), 
					apm: $(form).find("#txtApm").val(), 
					municipio: $(form).find("#txtMunicipio").val(), 
					entidadFederativa: $(form).find("#txtEntidadFederativa").val(), 
					correo: $(form).find("#txtCorreo").val(), 
					pass: $(form).find("#txtPass").val(), 
					whatsapp: $(form).find("#txtWhatsapp").val(), 
					fn: {
						after: function(datos){
							if (datos.band){
								$("#frmRegistroSocio").get(0).reset();
								$("#winRegistro").modal("hide");
								
								alert("¡¡¡ Felicidades !!! ya eres nuestro socio");
							}else{
								alert("No se pudo guardar el registro");
							}
						}
					}
				});
			}
        }

    });
    
    $("#frmLogin2").validate({
		debug: true,
		rules: {
			txtCorreo: "required",
			txtPass: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var form = $(form);
			
			var obj = new TUsuario;
			obj.login({
				usuario: form.find("#txtCorreo").val(), 
				pass: form.find("#txtPass").val(), 
				fn: {
					after: function(datos){
						if (datos.band){
							$("#frmLogin2").get(0).reset();
							location.href = "panelPrincipal";
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