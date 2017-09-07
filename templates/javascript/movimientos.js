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
			
			if (form.find("#txtPuntos").val() > form.find("#puntos").val()){
				alert("No se puede realizar ya que no tiene los Rocket Puntos suficientes");
				$("#txtPuntos").select();
			}else if (parseFloat(form.find("#txtPuntos").val()) + parseFloat(form.find("#txtEfectivo").val()) <= 0){
				alert("Indica el mono de la venta");
				$("#txtEfectivo").select();
			}else{
				var obj = new TMovimiento;
				obj.addVenta({
					"socio": $("#socio").val(),
					"puntos": $("#txtPuntos").val(),
					"efectivo": $("#txtEfectivo").val(),
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
	
	$("#txtSocio").change(function(){
		$.post("csocios", {
			"socio": $("#txtSocio").val(),
			"action": "getData"
		}, function(socio){
			console.log(socio.idUsuario);
			if (socio.idUsuario != ""){
				$("#txtNombre").val(socio.nombre + " " + socio.apellidos);
				$("#socio").val(socio.idUsuario);
				$("#puntos").val(socio.puntos);
			}else{
				$("#txtNombre").val("");
				$("#txtSocio").val("");
				$("#socio").val("");
				$("#puntos").val("0");
				alert("Socio no encontrado, verifica el número de socio/tarjeta o correo electrónico");
			}
		}, "json");
	});
});