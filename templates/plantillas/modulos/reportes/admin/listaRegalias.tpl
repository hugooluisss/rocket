<div class="row">
	<div class="col-xs-12 col-sm-8">
		<div class="box">
			<div class="box-body">
				<table id="tblDatos" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Fecha</th>
							<th>Empresa</th>
							<th>Tipo</th>
							<th>Monto ($)</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$lista item="row"}
							<tr>
								<td>{$row.registro}</td>
								<td title="{if $row.plus eq 1}Es una empresa plus{/if}" style="color: {if $row.plus eq 1}green{else}blue{/if}">{$row.razonsocial}</td>
								<td style="color: {$row.color}">{$row.tipomovimiento}</td>
								<td class="text-right">{$row.monto}</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-4">
		<div class="box">
			<div class="box-body">
				<table id="tblTipos" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Monto ($)</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$tipo item="row"}
							<tr>
								<td>{$row.nombre}</td>
								<td class="text-right">{$row.monto}</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>