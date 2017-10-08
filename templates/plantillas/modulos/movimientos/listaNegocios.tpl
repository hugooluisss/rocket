<table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Fecha</th>
			<th>Tipo</th>
			<th>Socio</th>
			<th>Efectivo</th>
			<th>RP Cobrados</th>
			<th>RP Entregados</th>
			<th>Comisión Generada</th>
			<th>Regalias</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr title="Click o Tap para ver el detalle" style="cursor: pointer" json='{$row.json}'>
				<td style="border-left: 3px solid {$row.color}">{$row.registro}</td>
				<td>{$row.tipomovimiento}</td>
				<td>{$row.socio}</td>
				<td class="text-right">{$row.efectivo}</td>
				<td class="text-right">{$row.rocketpoints}</td>
				<td class="text-right">{$row.puntos}</td>
				<td class="text-right">{$row.comision}</td>
				<td class="text-right">{$row.regalias}</td>
			</tr>
		{/foreach}
	</tbody>
	<tfoot>
		<tr>
			<td colspan="6" class="text-right">Total</td>
			<td class="text-right">{$comision}</td>
			<td class="text-right">{$regalias}</td>
		</tr>
	</tfoot>
</table>