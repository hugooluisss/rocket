<div class="headPrincipal">
	{include file=$PAGE.rutaModulos|cat:"modulos/front-end/encabezado.tpl"}
	<div class="container">
		<div class="beneficios">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h2>Beneficios de ser un socio de Rocket Card</h2>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="{$PAGE.imagenes}ahorro.png" data-toggle="modal" data-target="#winAhorra"/>
					<p class="descripcion"><span class="text-danger">Ahorra</span> realizando tus compras cotidianas</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="{$PAGE.imagenes}promociones.png"  data-toggle="modal" data-target="#winPromociones"/>
					<p class="descripcion"><span class="text-danger">Recibe</span> promociones exclusivas</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="{$PAGE.imagenes}premios.png" />
					<p class="descripcion"><span class="text-danger">Participa</span> para obtener premios</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="{$PAGE.imagenes}compras.png" />
					<p class="descripcion"><span class="text-danger">Utiliza</span> Rocket Card como cuenta de ahorro</p>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="winAhorra" class="modal fade" role="dialog" usuario="">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				&nbsp;
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12 col-sm-6 text-center item">
						<img src="{$PAGE.imagenes}ahorro.png"/>
					</div>
					<div class="col-xs-12 col-sm-6">
						<h3><span class="text-danger">Ahorra</span> realizando tus compras cotidianas</h3>
						<br />
						<p>Elije los negocios afiliados para realizar tus consumos y recibe Rocket Points (cada uno equivale a $1.00) por cada compra que realices</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="winPromociones" class="modal fade" role="dialog" usuario="">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				&nbsp;
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12 col-sm-6 text-center item">
						<img src="{$PAGE.imagenes}promociones.png"/>
					</div>
					<div class="col-xs-12 col-sm-6">
						<h3><span class="text-danger">Recibe</span> promociones exclusivas</h3>
						<br />
						<p>Al ser un socio Rocket Card los establecimientos afiliados te otorgarán descuentos únicos y exclusivos a los que solo tú puedes acceder</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>