<div class="container">
	<div class="row">
		<div class="col-xs-12 text-center">
			<h2>Nuestras marcas</h2>
		</div>
	</div>
	<div class="row">
		{foreach from=$negocios item="negocio"}
			<div class="col-xs-12 col-sm-4 negocioAfiliado" data-toggle="popover" data-placement="top" {if $negocio.plus eq 1}title="Este es un negocio plus" data-content="En {$negocio.razonsocial} puedes cambiar tus Rocket Points por dinero en efectivo" {/if}>
				<img class="logotipo" src="{$negocio.logotipo}" datos='{$negocio.json}' data-toggle="modal" data-target="#winNegocio" />
				{if $negocio.plus eq 1}
					<div class="negocioPlus">
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
				{/if}
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
					<div class="col-xs-12 text-center" style="height: 200px; overflow-y: hidden;">
						<img class="imgNegocio" />
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 dvListaImagenes">
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-xs-4 text-danger"><b>Dirección</b></div>
					<div class="col-xs-8">
						<span campo="calle"></span>
						<span campo="colonia"></span>
						<span campo="codigopostal"></span>
						<span campo="localidad"></span>
						<span campo="municipio"></span>
						<span campo="entidadfederativa"></span>
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