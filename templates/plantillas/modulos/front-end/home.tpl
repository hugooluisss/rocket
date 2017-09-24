<div class="headPrincipal">
	{include file=$PAGE.rutaModulos|cat:"modulos/front-end/encabezado.tpl"}
	<div class="container">
		<div class="beneficios" id="dvComoFunciona">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h2>REGISTRATE TOTALMENTE GRATIS</h2>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="{$PAGE.imagenes}1.png" data-toggle="modal" data-target="#winRealiza"/>
					<p class="descripcion"><span class="text-danger">Realiza</span> compras en Negocios Afiliados</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="{$PAGE.imagenes}2.png" data-toggle="modal" data-target="#winAcumula"/>
					<p class="descripcion"><span class="text-danger">Acumula</span> dinero electrónico</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="{$PAGE.imagenes}4.png" data-toggle="modal" data-target="#winUtilizalo"/>
					<p class="descripcion"><span class="text-danger">Utilízalo</span> para realizar más compras</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="{$PAGE.imagenes}3.png" data-toggle="modal" data-target="#winCanjealo"/>
					<p class="descripcion"><span class="text-danger">Canjéalo</span> por dinero en efectivo</p>
				</div>
			</div>
		</div>
	</div>

	<div id="winRealiza" class="modal fade" role="dialog" usuario="">
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
							<img src="{$PAGE.imagenes}1.png"/>
						</div>
						<div class="col-xs-12 col-sm-6">
							<h3><span class="text-danger">Realiza</span> compras en Negocios Afiliados</h3>
							<br />
							<p>Busca los establecimientos que tengan el cohete Rocket Card.</p>
							<p class="text-center"><a href="brands" class="btn btn-primary">Mira nuestros negocios afiliados</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="winAcumula" class="modal fade" role="dialog" usuario="">
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
							<img src="{$PAGE.imagenes}2.png"/>
						</div>
						<div class="col-xs-12 col-sm-6">
							<h3><span class="text-danger">Acumula</span> dinero electrónico</h3>
							<br />
							<p>En las compras que realices recibirás un porcentaje de retorno que se verá reflejado en tu cuenta como Rocket Points, cada uno equivale a $1.00 m/n.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="winCanjealo" class="modal fade" role="dialog" usuario="">
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
							<img src="{$PAGE.imagenes}3.png"/>
						</div>
						<div class="col-xs-12 col-sm-6">
							<h3><span class="text-danger">Canjealo</span> por dinero en efectivo</h3>
							<br />
							<p>En el momento que tengas <b>500 ROCKET POINTS</b> o más acumulado en tu cuenta puedes canjearlo por dinero en efectivo en los Negocios Plus.</p>
							<p class="text-center"><a href="brands" class="btn btn-primary">Mira nuestros negocios afiliados</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="winUtilizalo" class="modal fade" role="dialog" usuario="">
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
							<img src="{$PAGE.imagenes}4.png"/>
						</div>
						<div class="col-xs-12 col-sm-6">
							<h3><span class="text-danger">Utilízalo</span> para realizar más compras</h3>
							<br />
							<p>Paga con tus Rocket Points en los establecimientos afiliados y sigue ganando.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	{include file=$PAGE.rutaModulos|cat:"modulos/front-end/misBeneficios.tpl"}
</div>