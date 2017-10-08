$(document).ready(function(){
	$("#txtInicio").datepicker({ dateFormat: 'yy-mm-dd' });
	$("#txtFin").datepicker({ dateFormat: 'yy-mm-dd' });
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
			var band = true;
			if ($("#selPlus").val() == 1)
				if ($("#txtRFC").val() == ''){
					alert("Para los negocios plus es necesario el RFC");
					band = false;
				}
			
			if (band){
				var obj = new TNegocio;
				obj.add({
					id: $("#id").val(), 
					nombre: $("#txtNombre").val(), 
					app: $("#txtApp").val(), 
					apm: $("#txtApm").val(), 
					correo: $("#txtCorreo").val(),
					pass: $("#txtPass").val(),
					razonsocial: $("#txtRazonSocial").val(),
					giro: $("#txtGiro").val(),
					rfc: $("#txtRFC").val(),
					calle: $("#txtCalle").val(),
					numero: $("#txtNumero").val(),
					colonia: $("#txtColonia").val(),
					codigopostal: $("#txtCodigoPostal").val(),
					localidad: $("#txtLocalidad").val(),
					municipio: $("#txtMunicipio").val(),
					entidadfederativa: $("#txtEntidadFederativa").val(),
					telefono: $("#txtTelefono").val(),
					plus: $("#selPlus").val(),
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
				$("#txtApp").val(el.app);
				$("#txtApm").val(el.apm);
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
				
				setEstados(function(){
					$("#txtMunicipio").val(el.municipio);
				});
				$("#selPlus").val(el.plus);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=comision]").click(function(){
				$("#winComisiones").attr("usuario", $(this).attr("identificador"));
			});
			
			$("[action=abonar]").click(function(){
				var btn = $(this);
				var el = jQuery.parseJSON($(this).attr("datos"));
				var cobro = el.saldo < 0?(el.saldo * -1):0;
				var abono = prompt("¿Cantidad a abonar?", cobro);
				
				if (isNaN(abono))
					alert("Debe ser un número");
				else if(abono <= 0)
					alert("Debe ser mayor a 0");
				else{
					var obj = new TNegocio;
					obj.cobrarRegalias({
						id: el.idUsuario,
						monto: abono,
						fn: {
							after: function(resp){
								if (resp.band){
									alert("Abono realizado y saldo actualizado");
									btn.parent().parent().parent().find(".dvSaldo").text(resp.saldo);
								}else
									alert("No se pudo realizar el abono a la cuenta");
							}
						}
					});
				}
			});
			
			$("[action=movimientos]").click(function(){
				var btn = $(this);
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#winMovimientos").attr("negocio", el.idUsuario);
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
							alert("Comisión activada");
							$("#winComisiones").modal("hide");
							getLista();
						}else
							alert("No se pudo guardar la comisión");
					}
				}
			});
		}
	});
	
	
	
	$('#winMovimientos').on('show.bs.modal', function(){
		getMovimientos();
	});
	
	$(".setFechas").change(function(){
		getMovimientos();
	});
	
	function getMovimientos(){
		$.post("listaMovimientosNegocio", {
			negocio: $("#winMovimientos").attr("negocio"),
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
			"negocio": $("#winMovimientos").attr("negocio"),
			inicio: $("#txtInicio").val(),
			fin: $("#txtFin").val(),
			"action": "estadoCuentaEmpresa"
		}, function(resp){
			if (resp.band)
				window.open(resp.uri, "Estado de cuenta");
		}, "json");
	});

});