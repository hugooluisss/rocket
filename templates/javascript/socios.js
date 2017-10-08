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
		messages: {
			txtCorreo: {
				remote: "El correo ya existe para otro, escoge otro"
			}
		},
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
				setEstados(function(){
					$("#txtMunicipio").val(el.municipio);
				});
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=movimientos]").click(function(){
				var btn = $(this);
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#winMovimientos").attr("socio", el.idUsuario);
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
	
	
	$('#winMovimientos').on('shown.bs.modal', function(){
		getMovimientos();
	});
	
	$(".setFechas").change(function(){
		getMovimientos();
	});
	
	$("#txtInicio").datepicker({ dateFormat: 'yy-mm-dd' });
	$("#txtFin").datepicker({ dateFormat: 'yy-mm-dd' });
	
	
	
	function getMovimientos(){
		$.post("listaMovimientosSocio", {
			socio: $("#winMovimientos").attr("socio"),
			inicio: $("#txtInicio").val(),
			fin: $("#txtFin").val()
		},function(data) {
			$(".dvMovimientos").html(data);
			
			$(".dvMovimientos").find("#tblDatos").find("tr").click(function(){
				var el = jQuery.parseJSON($(this).attr("json"));
				$.each(el, function(key, valor){
					$("#winDetalleMovimiento").find("[campo=" + key + "]").text(valor);
				});
				$("#winDetalleMovimiento").modal();
			});
			
			$(".dvMovimientos").find("#tblDatos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"order": [[ 0, "desc" ]]
			});
		});
	}
	
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
	}, "json");
	
	function setEstados(after){
		$("#txtMunicipio").html("");
		
		try{
			var municipios = jQuery.parseJSON($("#txtEntidadFederativa option:selected").attr("json"));
			
			$.each(municipios, function(i, municipio){
				var option = $("<option />", {
					value: municipio,
					text: municipio,
				});
				
				$("#txtMunicipio").append(option);
			});
			
			if (after != undefined)
				after();
		}catch(e){
			console.log("La entidad federativa no se encuentra en la lista o su json está mal construido");
		}
	}
	
	$("#btnEstadoCuenta").click(function(){
		$.post("cmovimientos", {
			"socio": $("#winMovimientos").attr("socio"),
			inicio: $("#txtInicio").val(),
			fin: $("#txtFin").val(),
			"action": "estadoCuentaSocio"
		}, function(resp){
			if (resp.band)
				window.open(resp.uri, "Estado de cuenta");
		}, "json");
	});
});