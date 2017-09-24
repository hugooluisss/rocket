<div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>No de socio</th>
					<th>Nombre completo</th>
					<th>Correo</th>
					<th>Puntos</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row.idUsuario}</td>
						<td><b>{$row.nombre}</b> {$row.app} {$row.apm}</td>
						<td>{$row.correo}</td>
						<td class="text-right">{$row.puntos}</td>
						<td style="text-align: right">
							<div class="btn-group btn-group-xs">
								<button type="button" class="btn btn-primary" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-edit"></i></button>
								<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" usuario="{$row.idUsuario}"><i class="fa fa-times"></i></button>
							</div>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>