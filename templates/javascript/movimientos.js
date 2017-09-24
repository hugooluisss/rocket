$(document).ready(function(){
	getLista();	
			
	function getLista(){
		$.get("listaMovimientos", function( data ) {
			$("#dvLista").html(data);
			
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
		});
	}
	
	$("#frmVenta").validate({
		debug: true,
		rules: {
			txtSocio: "required",
			txtEfectivo: {
				"required": true,
				"min": 0,
				"number": true
			},
			txtPuntos: {
				"required": true,
				"min": 0,
				"number": true
			}
		},
		wrapper: 'span', 
		submitHandler: function(form){
			form = $("#frmVenta");
			var puntos = parseFloat(form.find("#txtPuntos").val());
			var lPuntos = parseFloat(form.find("#puntos").val());
			var efectivo = parseFloat(form.find("#txtEfectivo").val());
			
			console.log(puntos, lPuntos, puntos > lPuntos);
			if (puntos > lPuntos && puntos > 0){
				alert("No se puede realizar ya que no tiene los Rocket Puntos suficientes");
				$("#txtPuntos").select();
			}else if (puntos + efectivo <= 0){
				alert("Indica el mono de la venta");
				$("#txtEfectivo").select();
			}else{
				var obj = new TMovimiento;
				obj.addVenta({
					"socio": form.find("#socio").val(),
					"puntos": form.find("#txtPuntos").val(),
					"efectivo": form.find("#txtEfectivo").val(),
					fn: {
						before: function(){
							form.find("[type=submit]").prop("disabled", true);
						},
						after: function(resp){
							form.find("[type=submit]").prop("disabled", false);
							if (resp.band){
								$("#winVenta").modal("hide");
								alert("Registro realizado");
								getLista();
								$("#dvSaldo").html(resp.saldo);
							}else
								alert("Ocurrió un error al registrar el movimiento");
						}
					}
				});
			}
		}
	});
	
	$(".socio").each(function(){
		var el = $(this);
		el.change(function(){
			var form = $("#" + el.attr("formulario"));
			$.post("csocios", {
				"socio": form.find("#txtSocio").val(),
				"action": "getData"
			}, function(socio){
				if (socio.idUsuario != ""){
					form.find("#txtNombre").val(socio.nombre + " " + socio.app + " " + socio.apm);
					form.find("#socio").val(socio.idUsuario);
					form.find("#puntos").val(socio.puntos);
				}else{
					form.find("#txtNombre").val("");
					form.find("#txtSocio").val("");
					form.find("#socio").val("");
					form.find("#puntos").val("0");
					
					alert("Socio no encontrado, verifica el número de socio/tarjeta o correo electrónico");
				}
			}, "json");
		});
	});
	
	$("#frmCanje").validate({
		debug: true,
		rules: {
			txtSocio: "required",
			txtPuntos: {
				"required": true,
				"min": 1,
				"number": true
			}
		},
		wrapper: 'span', 
		submitHandler: function(form){
			form = $(form);
			var puntos = parseFloat(form.find("#txtPuntos").val());
			var lPuntos = parseFloat(form.find("#puntos").val());
			var efectivo = parseFloat(form.find("#txtEfectivo").val());
			
			if (puntos > lPuntos){
				alert("No se puede realizar ya que no tiene los Rocket Puntos suficientes");
				$("#txtPuntos").select();
			}else{
				var obj = new TMovimiento;
				obj.canjearPuntos({
					"socio": form.find("#socio").val(),
					"puntos": form.find("#txtPuntos").val(),
					fn: {
						before: function(){
							form.find("[type=submit]").prop("disabled", true);
						},
						after: function(resp){
							form.find("[type=submit]").prop("disabled", false);
							if (resp.band){
								$("#winCanje").modal("hide");
								alert("Registro realizado");
								getLista();
								
								$("#dvSaldo").html(resp.saldo);
							}else
								alert("Ocurrió un error al registrar el movimiento");
						}
					}
				});
			}
		}
	});
	
	$("#winVenta").on('show.bs.modal', function(){
		$("#frmVenta")[0].reset();
	});
	
	$("#winCanje").on('show.bs.modal', function(){
		$("#frmCanje")[0].reset();
	});
});