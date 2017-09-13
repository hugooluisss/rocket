<div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Razón Social</th>
					<th>Contacto</th>
					<th>Correo</th>
					<th>Comisión</th>
					<th>Saldo ($)</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr title="{if $row.plus eq 1}Es una empresa plus{/if}">
						<td style="border-left: 3px solid {if $row.plus eq 1}green{else}blue{/if}">{$row.razonsocial}</td>
						<td><b>{$row.nombre}</b> {$row.apellidos}</td>
						<td>{$row.correo}</td>
						<td class="text-center">
							<button type="button" class="btn btn-primary btn-block btn-xs" action="comision" title="Comisiones" identificador='{$row.idUsuario}' data-toggle="modal" data-target="#winComisiones">{$row.comision} %</button>
						</td>
						<td class="text-right dvSaldo">{$row.saldo}</td>
						<td class="text-right">
							<div class="btn-group btn-group-xs">
								<button type="button" class="btn btn-warning" action="abonar" title="Abonar a cuenta" datos='{$row.json}'><i class="fa fa-money"></i></button>
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