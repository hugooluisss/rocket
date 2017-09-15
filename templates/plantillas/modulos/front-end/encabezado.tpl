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
						{foreach from=$archivosSlider item="row" key="key"}
							<li data-target="#carruselNegocios" data-slide-to="{$key}" data-slide-to="{$key}" {if $key eq 0}class="active"{/if}></li>
						{/foreach}
					</ol>
					
					<div class="carousel-inner">
						{foreach from=$archivosSlider item="row" key="key"}
							<div class="item {if $key eq 0}active{/if}">
								<img src="{$row}" style="width:100%;">
							</div>
						{/foreach}
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