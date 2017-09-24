<form id="frmRegistroNegocio" class="form-horizontal" role="form">
	<div class="modal fade" id="winDatosNegocio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h5 class="modal-title" id="exampleModalLabel">Actualizar información</h5>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtRazonSocial">Razón social</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtRazonSocial" name="txtRazonSocial" value="{$negocio->getRazonSocial()}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtGiro">Giro del negocio</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtGiro" name="txtGiro" value="{$negocio->getGiro()}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtContacto">Contacto</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre" value="{$negocio->getNombre()}">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-5 col-sm-offset-3">
							<input type="text" class="form-control" id="txtApp" name="txtApp" placeholder="Apellido Paterno" value="{$negocio->getApp()}">
						</div>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="txtApp" name="txtApp" placeholder="Apellido Paterno" value="{$negocio->getApm()}">
						</div>
					</div>
					<hr />
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtRFC">RFC</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtRFC" name="txtRFC" value="{$negocio->getRFC()}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtCalle">Calle y número</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtCalle" name="txtCalle" value="{$negocio->getCalle()}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtColonia">Colonia</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txtColonia" name="txtColonia" value="{$negocio->getColonia()}">
						</div>
						<label class="col-sm-3 control-label" for="txtCodigoPostal">Código Postal</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txtCodigoPostal" name="txtCodigoPostal" value="{$negocio->getCodigoPostal()}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtLocalidad">Localidad</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txtLocalidad" name="txtLocalidad" value="{$negocio->getLocalidad()}">
						</div>
						<label class="col-sm-3 control-label" for="txtMunicipio">Municipio</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txtMunicipio" name="txtMunicipio" value="{$negocio->getMunicipio()}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtEntidadFederativa">Entidad Federativa</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txtEntidadFederativa" name="txtEntidadFederativa" value="{$negocio->getEntidadFederativa()}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtTelefono">Telefono</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txtTelefono" name="txtTelefono" value="{$negocio->getTelefono()}">
						</div>
						<label class="col-sm-3 control-label" for="txtCorreo">Correo</label>
						<div class="col-sm-3">
							<input type="email" class="form-control" id="txtCorreo" name="txtCorreo" disabled="true" readonly="true" value="{$negocio->getCorreo()}">
						</div>
					</div>
				</div>
			
				<div class="modal-footer text-right">
					<button type="submit" class="btn btn-primary">Actualizar</button>
				</div>
			</div>
		</div>
	</div>
</form>