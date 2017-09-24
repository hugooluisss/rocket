$(document).ready(function(){
	getLista();
	
	$("#panelTabs li a[href=#add]").click(function(){
		$("#frmAdd").get(0).reset();
		$("#id").val("");
		$("form:not(.filter) :input:visible:enabled:first").focus();
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
	
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
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
						}else{
							alert("Upps... No se pudo guardar");
						}
					}
				}
			});
        }

    });
		
	function getLista(){
		$.get("listaSocios", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TUsuario;
					obj.del({
						"id": $(this).attr("usuario"), 
						fn: {
							after: function(data){
								getLista();
							}
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idUsuario);
				$("#txtNombre").val(el.nombre);
				$("#txtApp").val(el.app);
				$("#txtApm").val(el.apm);
				$("#txtCorreo").val(el.correo);
				$("#txtWhatsapp").val(el.whatsapp);
				$("#txtEntidadFederativa").val(el.entidadfederativa);
				$("#txtMunicipio").val(el.municipio);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("#tblDatos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
});