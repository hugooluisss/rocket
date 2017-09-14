<div class="container" id="winNegocio">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">{$negocio->getRazonSocial()}</h1>
		</div>
	</div>
	<div class="row">
			<div class="col-xs-12 col-sm-6 text-center">
				<img class="imgNegocio img-responsive" src="{$imagenes[0]}"/>
				<br />
				<div class="col-xs-12 dvListaImagenes">
					{foreach from=$imagenes item="img"}
						<img class="itemImagenNegocio" src="{$img}" />
					{/foreach}
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="row">
					<div class="col-xs-4 text-danger"><b>Dirección</b></div>
					<div class="col-xs-8">
						<div>{$negocio->getCalle()}</div>
						<div>{$negocio->getColonia()}</div>
						<div>{$negocio->getCodigoPostal()}</div>
						<div>{$negocio->getLocalidad()}</div>
						<div>{$negocio->getMunicipio()}</div>
						<div>{$negocio->getEntidadFederativa()}</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 text-danger"><b>Teléfono</b></div>
					<div class="col-xs-8"><div>{$negocio->getTelefono()}</div></div>
				</div>
				<div class="row">
					<div class="col-xs-4 text-danger"><b>Correo electrónico</b></div>
					<div class="col-xs-8"><div>{$negocio->getCorreo()}</div></div>
				</div>
			</div>
		</div>
	</div>
</div>
<br /><br /><br />