<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Movimientos</h1>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-md-3">
		<button class="btn btn-lg btn-primary btn-block"  data-toggle="modal" data-target="#winVenta">Registrar venta</button>
	</div>
	<div class="col-xs-6 col-md-3">
		<button class="btn btn-lg btn-danger btn-block">Canjear puntos por efectivo</button>
	</div>
</div>

<br />

<div class="box">
	<div class="box-body" id="dvLista">
	</div>
</div>

{include file=$PAGE.rutaModulos|cat:"modulos/movimientos/winVenta.tpl"}