TNegocio = function(){
	var self = this;
	
	this.add = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('cnegocios', {
				"id": datos.id,
				"nombre": datos.nombre,
				"apellidos": datos.apellidos,
				"correo": datos.correo, 
				"pass": datos.pass,
				"razonsocial": datos.razonsocial,
				"giro": datos.giro,
				"rfc": datos.rfc,
				"calle": datos.calle,
				"colonia": datos.colonia,
				"codigopostal": datos.codigopostal,
				"localidad": datos.localidad,
				"municipio": datos.municipio,
				"entidadfederativa": datos.entidadfederativa,
				"telefono": datos.telefono,
				"plus": datos.plus,
				"action": "add"
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (datos.fn.after !== undefined)
					datos.fn.after(data);
			}, "json");
	};
	
	this.del = function(id, fn){
		$.post('cnegocios', {
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
	
	this.addComision = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('cnegocios', {
				"id": datos.negocio,
				"comision": datos.comision,
				"action": "addComision"
			}, function(data){
				if (data.band == false)
					console.log(data.mensaje);
					
				if (datos.fn.after !== undefined)
					datos.fn.after(data);
			}, "json");
	};
};