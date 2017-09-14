$(document).ready(function(){
	$(".itemImagenNegocio").click(function(){
		$(".imgNegocio").attr("src", $(this).attr("src"));
	});
});