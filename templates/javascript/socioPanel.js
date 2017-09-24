$(document).ready(function(){
	$("#tblDatos").DataTable({
		"responsive": true,
		"language": espaniol,
		"paging": true,
		"lengthChange": false,
		"ordering": true,
		"info": true,
		"autoWidth": false,
		"order": [[ 0, "desc" ]]
	});
	
	
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
		
		$("#txtEntidadFederativa").val($("#txtEntidadFederativa").attr("valor"));
		setEstados();
		$("#txtMunicipio").val($("#txtMunicipio").attr("valor"));
	}, "json");
	
	$("#frmSocioUpdate").validate({
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
			txtApp: "required",
		},
		wrapper: 'span', 
		submitHandler: function(form){
		
			var obj = new TSocio;
			obj.add({
				id: $("#id").val(), 
				nombre: $("#txtNombre").val(), 
				app: $("#txtApp").val(), 
				apm: $("#txtApm").val(), 
				correo: $("#txtCorreo").val(),
				pass: $("#txtPass").val(),
				municipio: $("#txtMunicipio").val(),
				entidadFederativa: $("#txtEntidadFederativa").val(),
				whatsapp: $("#txtWhatsapp").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							alert("Tus datos se han actualizado");
							location.reload(true);
						}else{
							alert("Upps... No se pudo guardar");
						}
					}
				}
			});
        }

    });

});