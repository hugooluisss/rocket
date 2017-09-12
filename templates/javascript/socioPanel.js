$(document).ready(function(){
	$("#tblDatos").DataTable({
		"responsive": true,
		"language": espaniol,
		"paging": true,
		"lengthChange": false,
		"ordering": true,
		"info": true,
		"autoWidth": false,
		"order": [[ 1, "desc" ]]
	});
});