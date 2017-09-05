$(document).ready(function(){
	$("#frmLoginNegocio").validate({
		debug: true,
		rules: {
			txtCorreo: {
				"required": true,
				"email": true
			},
			txtPass: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TUsuario;
			obj.login({
				usuario: $("#frmLoginNegocio").find("#txtCorreo").val(), 
				pass: $("#frmLoginNegocio").find("#txtPass").val(), 
				fn: {
					before: function(){
						$("#frmLoginNegocio").find("[type=submit]").prop("disabled", true);	
					},
					after: function(datos){
						$("#frmLoginNegocio").find("[type=submit]").prop("disabled", false);
						
						if (!datos.band)
							alert("Correo electrónico y/o contraseña no válidos");
						else
							location.href = "panelPrincipal";
					}
				}
			});
        }

    });
});