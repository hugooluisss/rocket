TSocio = function(){
	var self = this;
	
	this.add = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('csocios', {
				"id": datos.id,
				"nombre": datos.nombre,
				"app": datos.app,
				"apm": datos.apm,
				"correo": datos.correo, 
				"pass": datos.pass,
				"municipio": datos.municipio,
				"entidadfederativa": datos.entidadFederativa,
				"whatsapp": datos.whatsapp,
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
	
	this.login = function(datos){
		if (datos.fn.before !== undefined)
			datos.fn.before();
			
		$.post('csocios', {
			"usuario": datos.usuario,
			"pass": datos.pass,
			"action": "login"
		}, function(data){
			if (datos.fn.after != undefined)
				datos.fn.after(data);
				
			if (data.band == false)
				console.log("Los datos del usuario no son válidos");
		}, "json");
	}
};