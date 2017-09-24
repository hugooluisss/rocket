$(document).ready(function(){
	$("[data-toggle=modal]").click(function(){
		$("#winNegocio").attr("datos", $(this).attr("datos"));
	});
	
	$('#winNegocio').on('show.bs.modal', function(e){
		var negocio = jQuery.parseJSON($('#winNegocio').attr("datos"));
		
		$.each(negocio, function(key, valor){
			$("[campo=" + key + "]").html(valor);
		});
		
		$(".carousel-indicators").html("");
		$(".carousel-inner").html("");
		
		$(".imgNegocio").attr("src", negocio.logotipo);
		$(".dvListaImagenes").html("");
		$.each(negocio.imagenes, function(key, img){
			var imagen = $("<img />", {
				src: img,
				class: "itemImagenNegocio"
			});
			
			imagen.click(function(){
				$(".imgNegocio").attr("src", $(this).attr("src"));
			});
			
			$(".dvListaImagenes").append(imagen);
		});
	});
	
	$('[data-toggle="popover"]').popover({trigger: 'hover'});
});