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
			txtApellidos: "required",
			txtComision: {
				required: true,
				digits: true,
				min: 0,
				max: 100
			}
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
		$.get("listaNegocios", function( data ) {
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
				$("#txtApellidos").val(el.apellidos);
				$("#txtCorreo").val(el.correo);
				$("#txtRazonSocial").val(el.razonsocial);
				$("#txtGiro").val(el.giro);
				$("#txtRFC").val(el.rfc);
				$("#txtCalle").val(el.calle);
				$("#txtColonia").val(el.colonia);
				$("#txtCodigoPostal").val(el.codigopostal);
				$("#txtLocalidad").val(el.localidad);
				$("#txtEntidadFederativa").val(el.entidadfederativa);
				$("#txtTelefono").val(el.telefono);
				$("#txtMunicipio").val(el.municipio);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=comision]").click(function(){
				$("#winComisiones").attr("usuario", $(this).attr("identificador"));
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
	
	
	$("#frmComision").validate({
		debug: true,
		rules: {
			txtComision: {
				required: true,
				digits: true,
				min: 5,
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
							getLista();
						}else
							alert("No se pudo guardar la comisión");
					}
				}
			});
		}
	});
});