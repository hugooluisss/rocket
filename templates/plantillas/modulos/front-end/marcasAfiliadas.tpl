<div class="container">
	<div class="row">
		<div class="col-xs-12 text-center">
			<h2>Beneficios de ser un socio de Rocket Card</h2>
		</div>
	</div>
	<div class="row">
		{foreach from=$negocios item="negocio"}
			<div class="col-xs-6 col-sm-4 col-md-3">
				<div class="thumbnail">
					<a href="#" title="Haz click/tap sobre la imagen para ver la información completa" datos='{$negocio.json}' data-toggle="modal" data-target="#winNegocio">
						<img src="{$negocio.imagenes[0]}" alt="Lights" style="height:150px">
						<div class="caption">
							<p class="text-center text-danger"><b>{$negocio.razonsocial}</b></p>
							<p>{$negocio.giro}</p>
						</div>
					</a>
				</div>
		    </div>
	    {/foreach}
	</div>
</div>


<div id="winNegocio" class="modal fade" role="dialog" usuario="">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" campo="razonsocial"></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12 text-center">
						<img class="imgNegocio" />
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 dvListaImagenes">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 text-danger"><b>Dirección</b></div>
					<div class="col-xs-8">
						<div campo="calle"></div>
						<div campo="colonia"></div>
						<div campo="codigopostal"></div>
						<div campo="localidad"></div>
						<div campo="municipio"></div>
						<div campo="entidadfederativa"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 text-danger"><b>Teléfono</b></div>
					<div class="col-xs-8" campo="telefono"></div>
				</div>
				<div class="row">
					<div class="col-xs-4 text-danger"><b>Correo electrónico</b></div>
					<div class="col-xs-8" campo="correo"></div>
				</div>
			</div>
		</div>
	</div>
</div>