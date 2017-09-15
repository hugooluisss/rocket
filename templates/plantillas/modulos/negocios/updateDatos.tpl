<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Actualizar datos del negocio</h1>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 text-center">
			<img id="imgLogotipo" name="imgLogotipo" src="repositorio/negocios/{$negocio->getId()}.jpg?{rand()}" onerror="javascript: this.src='repositorio/logo.jpg'" title="Click para cambiar" style="cursor: pointer" data-toggle="modal" data-target="#winLogotipo" identificador="{$negocio->getId()}"/>
	</div>
</div>
<br />

<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="box">
		<div class="box-body">
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
				<div class="col-sm-5">
					<input type="text" class="form-control" id="txtApellidos" name="txtApellidos" placeholder="Apellidos" value="{$negocio->getApellidos()}">
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
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="txtCorreo">Correo</label>
				<div class="col-sm-3">
					<input type="email" class="form-control" id="txtCorreo" name="txtCorreo" disabled="true" readonly="true" value="{$negocio->getCorreo()}">
				</div>
				<label class="col-sm-3 control-label" for="txtCorreo">Contraseña</label>
				<div class="col-sm-3">
					<input type="password" class="form-control" id="txtPass" name="txtPass">
				</div>
			</div>
			
		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-info pull-right">Guardar</button>
			<input type="hidden" id="id" value="{$negocio->getId()}"/>
		</div>
	</div>
</form>

{include file=$PAGE.rutaModulos|cat:"modulos/negocios/winLogotipo.tpl"}