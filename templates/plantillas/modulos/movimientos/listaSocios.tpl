<table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Fecha</th>
			<th>Tipo</th>
			<th>Negocio</th>
			<th>Efectivo</th>
			<th>Rocket Points</th>
			<th>Puntos</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr title="Click o Tap para ver el detalle" style="cursor: pointer" json='{$row.json}'>
				<td style="border-left: 3px solid {$row.color}">{$row.registro}</td>
				<td>{$row.tipomovimiento}</td>
				<td>{$row.negocio}</td>
				<td class="text-right">{$row.efectivo}</td>
				<td class="text-right">{$row.rocketpoints}</td>
				<td class="text-right">{$row.puntos}</td>
			</tr>
		{/foreach}
	</tbody>
</table>