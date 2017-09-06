<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Socios</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar / Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtNombre">Nombre</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtApellidos">Apellidos</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtApellidos" name="txtApellidos">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtMunicipio">Municipio</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtMunicipio" name="txtMunicipio">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtEntidadFederativa">Entidad federativa</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtEntidadFederativa" name="txtEntidadFederativa">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtCorreo">Correo electrónico</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="txtCorreo" name="txtCorreo">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtPass">Contraseña</label>
						<div class="col-sm-9">
							<input type="password" class="form-control" id="txtPass" name="txtPass">
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div>