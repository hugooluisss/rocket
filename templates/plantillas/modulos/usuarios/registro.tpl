<form id="frmRegistroSocio" class="form-horizontal" role="form">
	<div class="modal fade modal-primary" id="winRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h5 class="modal-title" id="exampleModalLabel">Registrate ahora</h5>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label class="col-sm-4 control-label" for="txtNombre">Nombre</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="txtApellidos">Apellidos</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="txtApp" name="txtApp" placeholder="Paterno">
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="txtApm" name="txtApm" placeholder="Materno">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="txtEntidadFederativa">Entidad federativa</label>
						<div class="col-sm-8">
							<select class="form-control" id="txtEntidadFederativa" name="txtEntidadFederativa">
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="txtMunicipio">Municipio</label>
						<div class="col-sm-8">
							<select class="form-control" id="txtMunicipio" name="txtMunicipio">
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="txtCorreo">Correo electrónico</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" id="txtCorreo" name="txtCorreo">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="txtWhatsapp">Whatsapp</label>
						<div class="col-sm-8">
							<input type="tel" class="form-control" id="txtWhatsapp" name="txtWhatsapp">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="txtPass">Contraseña</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="txtPass" name="txtPass">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label" for="txtPass2">Confirma la contraseña</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="txtPass2" name="txtPass2">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Registrarme</button>
				</div>
			</div>
		</div>
	</div>
</form>