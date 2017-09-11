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
				"autoWidth": false
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
			form = $(form);
			
			if (form.find("#txtPuntos").val() > form.find("#puntos").val() && form.find("#txtPuntos").val() > 0){
				alert("No se puede realizar ya que no tiene los Rocket Puntos suficientes");
				$("#txtPuntos").select();
			}else if (parseFloat(form.find("#txtPuntos").val()) + parseFloat(form.find("#txtEfectivo").val()) <= 0){
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
					form.find("#txtNombre").val(socio.nombre + " " + socio.apellidos);
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
			if (form.find("#txtPuntos").val() > form.find("#puntos").val()){
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
							}else
								alert("Ocurrió un error al registrar el movimiento");
						}
					}
				});
			}
		}
	});
});