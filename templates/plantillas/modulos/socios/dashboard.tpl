<br />
<div class="row">
	<div class="col-xs-12 col-sm-6">
		<h3>Bienvenido <span class="text-danger">{$PAGE.usuario->getNombre()} {$PAGE.usuario->getApellidos()}</span></h3>
	</div>
</div>

<div class="row">
	<div class="col-xs-6">
		<div class="box">
			<div class="box-body">
				Actualmente tienes un saldo de <span class="text-danger"><b>{$socio->getPuntos()} Puntos Rocket</b></span>
			</div>
		</div>
	</div>
	<div class="col-xs-6">
		<div class="box">
			<div class="box-body text-right">
				<a href="logout">Salir <i class="fa fa-sign-out" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-body">
				<table id="tblDatos" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Fecha</th>
							<th>Tipo</th>
							<th>Negocio</th>
							<th>Pago</th>
							<th>Puntos obtenidos</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$lista item="row"}
							<tr {}>
								<td style="border-left: 5px solid {$row.color}">{$row.registro}</td>
								<td>{$row.tipo}</td>
								<td>{$row.negocio}</td>
								<td class="text-right">{$row.monto}</td>
								<td class="text-right">{$row.puntos}</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>