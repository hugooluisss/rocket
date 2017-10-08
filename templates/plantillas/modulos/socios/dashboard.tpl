<br />
<div class="row">
	<div class="col-xs-12 col-sm-6">
		<h3>Bienvenido <span class="text-danger">{$PAGE.usuario->getNombre()} {$PAGE.usuario->getApp()} {$PAGE.usuario->getApm()}</span></h3>
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
				<br />
				<a href="#" data-toggle="modal" data-target="#winPerfil">Mi perfil de socio <i class="fa fa-user" aria-hidden="true"></i></a>
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
							<th>Efectivo</th>
							<th>Rocket Points</th>
							<th>Puntos obtenidos</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$lista item="row"}
							<tr {}>
								<td style="border-left: 5px solid {$row.color}">{$row.registro}</td>
								<td>{$row.tipo}</td>
								<td>{$row.negocio}</td>
								<td class="text-right">{$row.efectivo}</td>
								<td class="text-right">{$row.rocketpoints}</td>
								<td class="text-right">{$row.puntos}</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<form role="form" id="frmSocioUpdate" class="form-horizontal" onsubmit="javascript: return false;">
	<div id="winPerfil" class="modal fade" role="dialog" usuario="">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Mi perfil de socio</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtNombre">Nombre</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtNombre" name="txtNombre" value="{$socio->getNombre()}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtApellidos">Apellidos</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="txtApp" name="txtApp" placeholder="Paterno" value="{$socio->getApp()}">
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="txtApm" name="txtApm" placeholder="Materno" value="{$socio->getApm()}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtEntidadFederativa">Entidad federativa</label>
						<div class="col-sm-9">
							<select class="form-control" id="txtEntidadFederativa" name="txtEntidadFederativa" valor="{$socio->getEntidadFederativa()}">
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtMunicipio">Municipio</label>
						<div class="col-sm-9">
							<select class="form-control" id="txtMunicipio" name="txtMunicipio" valor="{$socio->getMunicipio()}">
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtWhatsapp">Whatsapp</label>
						<div class="col-sm-9">
							<input type="tel" class="form-control" id="txtWhatsapp" name="txtWhatsapp" value="{$socio->getWhatsapp()}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtCorreo">Correo electrónico</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="txtCorreo" name="txtCorreo" value="{$socio->getCorreo()}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtPass">Contraseña</label>
						<div class="col-sm-9">
							<input type="password" class="form-control" id="txtPass" name="txtPass">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<input type="hidden" id="id" name="id" value="{$socio->getId()}" />
				</div>
			</div>
		</div>
	</div>
</form>