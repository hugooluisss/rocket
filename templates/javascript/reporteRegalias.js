$(document).ready(function(){
	$("#txtInicio").datepicker({ dateFormat: 'yy-mm-dd' });
	$("#txtFin").datepicker({ dateFormat: 'yy-mm-dd' });
	
	$("#txtInicio").change(function(){
		getLista();
	});
	
	$("#txtFin").change(function(){
		getLista();
	});
	
	getLista();
	function getLista(){
		$.post("reporteListaRegalias", {
			"inicio": $("#txtInicio").val(),
			"fin": $("#txtFin").val(),
		}, function(resp){
			$("#dvRegalias").html("");
			$("#dvRegalias").html(resp);
						
			$("#tblDatos").DataTable({
				"responsive": true,
				"language": espaniol,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"paging": false
			});
		});
	}
});