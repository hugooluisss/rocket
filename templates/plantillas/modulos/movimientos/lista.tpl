<table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Fecha</th>
			<th>Socio</th>
			<th>Tipo</th>
			<th>Efectivo</th>
			<th>Rocket Points</th>
			<th>Acumulados</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr title="{$row.nombreTipo}">
				<td style="border-left: 3px solid {$row.color}">{$row.registro}</td>
				<td>{$row.socio}</td>
				<td>{$row.nombreTipo}</td>
				<td class="text-right">{$row.efectivo}</td>
				<td class="text-right">{$row.rocketpoints}</td>
				<td class="text-right">{$row.puntos}</td>
			</tr>
		{/foreach}
	</tbody>
</table>