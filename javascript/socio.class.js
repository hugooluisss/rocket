TSocio = function(){
	var self = this;
	
	this.add = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('csocios', {
				"id": datos.id,
				"nombre": datos.nombre,
				"apellidos": datos.apellidos,
				"correo": datos.correo, 
				"pass": datos.pass,
				"municipio": datos.municipio,
				"entidadfederativa": datos.entidadFederativa,
				"action": "add"
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (datos.fn.after !== undefined)
					datos.fn.after(data);
			}, "json");
	};
	
	this.del = function(id, fn){
		$.post('csocios', {
			"id": id,
			"action": "del"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar el registro");
			}
		}, "json");
	};
};