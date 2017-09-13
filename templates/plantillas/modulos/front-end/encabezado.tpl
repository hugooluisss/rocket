<div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-3 text-center">
				<form id="frmLoginSocio" onsubmit="javascript: return false;" method="post">
					<div class="titulo">INGRESA A TU CUENTA</div>
					<br />
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-credit-card fa-inverse" aria-hidden="true"></i></span>
						<input id="txtTarjetaUser" name="txtTarjetaUser" type="text" class="form-control" placeholder="* Número de tarjeta">
					</div>
					<br />
					<div class="input-group">
						<span class="input-group-addon">&nbsp;<i class="fa fa-lock fa-inverse" aria-hidden="true"></i>&nbsp;</span>
						<input type="password" id="txtPassTarjeta" name="txtPassTarjeta" class="form-control" placeholder="* Contraseña">
					</div>
					<br />
					<button type="submit" class="btn btn-danger">INGRESAR</button>
					<button type="button" class="btn btn-link recuperarPass">Recuperar contraseña</button>
				</form>
			</div>
			<div class="col-sm-4 col-sm-offset-4 col-md-3 col-md-offset-6 text-center">
				<div id="carruselNegocios" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carruselNegocios" data-slide-to="0" class="active"></li>
						<li data-target="#carruselNegocios" data-slide-to="1"></li>
						<li data-target="#carruselNegocios" data-slide-to="2"></li>
						<li data-target="#carruselNegocios" data-slide-to="3"></li>
						<li data-target="#carruselNegocios" data-slide-to="4"></li>
					</ol>
					
					<div class="carousel-inner">
						<div class="item active">
							<img src="{$PAGE.imagenes}negocios/1.jpg" alt="Los Angeles" style="width:100%;">
						</div>
						
						<div class="item">
							<img src="{$PAGE.imagenes}negocios/2.jpg" alt="Los Angeles" style="width:100%;">
						</div>
						
						<div class="item">
							<img src="{$PAGE.imagenes}negocios/3.jpg" alt="Los Angeles" style="width:100%;">
						</div>
						<div class="item">
							<img src="{$PAGE.imagenes}negocios/4.jpg" alt="Los Angeles" style="width:100%;">
						</div>
						<div class="item">
							<img src="{$PAGE.imagenes}negocios/5.jpg" alt="Los Angeles" style="width:100%;">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-sm-offset-3 descripcion text-center">
				SÉ UN SOCIO ROCKET CARD Y DESCUBRE QUE MIENTRAS MÁS COMPRAS, MÁS DINERO GANAS
			</div>
		</div>
	</div>
</div>