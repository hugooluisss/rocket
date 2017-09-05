$(document).ready(function(){
	$("#frmRegistroSocio").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			txtApellidos: "required",
			txtCorreo: {
				"required": true,
				"email": true,
				"remote": {
					url: "csocios",
					type: "post",
					data: {
						"action": "validarEmail",
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
				txtPass: $("#txtPass").val(), 
				fn: {
					after: function(datos){
						if (datos.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
						}else{
							alert("No se pudo guardar el registro");
						}
					}
				}
			});
        }

    });

});