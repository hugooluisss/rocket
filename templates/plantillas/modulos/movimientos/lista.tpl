<table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Fecha</th>
			<th>Socio</th>
			<th>Monto</th>
			<th>Puntos</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr title="{$row.nombreTipo}">
				<td style="border-left: 3px solid {$row.color}">{$row.registro}</td>
				<td><b>{$row.nombre}</b> {$row.apellidos}</td>
				<td>{$row.monto}</td>
				<td>{$row.puntos}</td>
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