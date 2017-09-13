<table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Fecha</th>
			<th>Socio</th>
			<th>Monto</th>
			<th>Puntos acumulados</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr title="{$row.nombreTipo}">
				<td style="border-left: 3px solid {$row.color}">{$row.registro}</td>
				<td><b>{$row.nombre}</b> {$row.apellidos}</td>
				<td class="text-right">{$row.monto}</td>
				<td class="text-right">{$row.puntos}</td>
			</tr>
		{/foreach}
	</tbody>
</table>