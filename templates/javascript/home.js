$(document).ready(function(){
	$("#frmLogin1").validate({
		debug: true,
		rules: {
			txtCorreo: "required",
			txtPass: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			form = $(form);
			var obj = new TUsuario;
			obj.login({
				usuario: form.find("#txtCorreo").val(), 
				pass: form.find("#txtPass").val(), 
				fn: {
					before: function(){
						form.find("[type=submit]").prop("disabled", true);	
					},
					after: function(datos){
						form.find("[type=submit]").prop("disabled", false);
						
						if (!datos.band)
							alert("Correo electrónico y/o contraseña no válidos");
						else
							location.href = "panelPrincipal";
					}
				}
			});
        }

    });
    
    
    $("#txtBuscarEmpresa").autocomplete({
		source: "?mod=listaNegociosAutocomplete",
		minLength: 2, 
		select: function(event, ui){
			redireccionarEmpresa(event, ui);
		}
	});
	
	$("#txtBuscarEmpresa2").autocomplete({
		source: "?mod=listaNegociosAutocomplete",
		minLength: 2, 
		select: function(event, ui){
			redireccionarEmpresa(event, ui);
		}
	});
	
	function redireccionarEmpresa(event, ui){
		console.log("Cliente seleccionado", ui.item.identificador);
		location.href = "negocio/" + ui.item.identificador + "/";
	};
});