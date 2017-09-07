$(document).ready(function(){
	$("#winUploadImagen").find("form").fileupload({
		// This function is called when a file is added to the queue
		add: function (e, data) {
	    	
		
			// Automatically upload the file once it is added to the queue
			var jqXHR = data.submit();
		},
		progress: function(e, data){
			var progress = parseInt(data.loaded / data.total * 100, 10);
			
			if(progress == 100){
				//data.context.removeClass('working');
				//getImagenes($("#winUploadImagen").find("form").find("#dispositivo").val());
			}
		},
		fail: function(){
			alert("Ocurrió un problema en el servidor, contacta al administrador del sistema");
			
			console.log("Error en el servidor al subir el archivo, checa permisos de la carpeta repositorio");
		}, done: function(e, data){
			var result = jQuery.parseJSON(data.result);
			
			if (result.band){
				getImagenes();
				$("#winUploadImagen").modal("hide");
			}else
				alert("No se pudo subir");
		}
	});
	
	getImagenes();
	function getImagenes(){
		$.get("getListaImagenesGaleria", function(resp){
			$(".dvLista").html(resp);
			
			$(".dvLista").find("img").each(function(){
				var img = $(this);
				img.click(function(){
					if (confirm("¿Deseas eliminar?")){
						$.post("cnegocios", {
							"action": "eliminarImagen",
							"ruta": img.attr("src")
						}, function(resp){
							if (resp.band)
								getImagenes();
							else
								alert("no se pudo eliminar");
						}, "json");
					}
				});
			});
		});
	}
});