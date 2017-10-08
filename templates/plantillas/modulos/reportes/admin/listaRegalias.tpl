<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-body">
				<table id="tblDatos" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Fecha</th>
							<th>Empresa</th>
							<th>Socio</th>
							<th>Tipo</th>
							<th>Efectivo ($)</th>
							<th>Rocket Points</th>
							<th>Puntos Generados</th>
							<th>Regalias</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$lista item="row"}
							<tr>
								<td>{$row.registro}</td>
								<td title="{if $row.plus eq 1}Es una empresa plus{/if}" style="color: {if $row.plus eq 1}green{else}blue{/if}">{$row.razonsocial}</td>
								<td>{$row.socio}</td>
								<td style="color: {$row.color}">{$row.tipomovimiento}</td>
								<td class="text-right">{$row.efectivo}</td>
								<td class="text-right">{$row.rocketpoints}</td>
								<td class="text-right">{$row.puntos}</td>
								<td class="text-right">{$row.regalias}</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>