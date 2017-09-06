$(document).ready(function(){
	$("#frmComision").validate({
		debug: true,
		rules: {
			txtComision: {
				required: true,
				digits: true,
				min: 0,
				max: 100
			}
		},
		wrapper: 'span', 
		submitHandler: function(form){
			form = $(form);
			var obj = new TNegocio;
			
			obj.addComision({
				"negocio": $("#winComisiones").attr("usuario"),
				"comision": form.find("#txtComision").val(),
				fn: {
					before: function(){
						form.find("[type=submit]").prop("disabled", true);
					},
					after: function(resp){
						form.find("[type=submit]").prop("disabled", false);
						if (resp.band){
							alert("La comisión se activará el " + resp.fecha);
							$("#winComisiones").modal("hide");
						}else
							alert("No se pudo guardar la comisión");
					}
				}
			});
		}
	});
});