TMovimiento = function(){
	var self = this;
	
	this.addVenta = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('cmovimientos', {
				"socio": datos.socio,
				"tipo": datos.tipo,
				"efectivo": datos.efectivo, 
				"puntos": datos.puntos,
				"action": "addVenta"
			}, function(data){
				if (data.band == false)
					console.log(data.mensaje);
					
				if (datos.fn.after !== undefined)
					datos.fn.after(data);
			}, "json");
	};
};