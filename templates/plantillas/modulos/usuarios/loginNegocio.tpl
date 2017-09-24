<form id="frmLogin2" class="form-horizontal frmLogin" role="form">
	<div class="modal fade modal-primary" id="winNegocioLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h5 class="modal-title" id="exampleModalLabel">Ingresa a tu cuenta</h5>
				</div>
				<div class="modal-body">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-credit-card fa-inverse" aria-hidden="true"></i></span>
						<input id="txtCorreo" name="txtCorreo" type="text" class="form-control" placeholder="* Número de socio o correo electrónico">
					</div>
					<br />
					<div class="input-group">
						<span class="input-group-addon">&nbsp;<i class="fa fa-lock fa-inverse" aria-hidden="true"></i>&nbsp;</span>
						<input type="password" id="txtPass" name="txtPass" class="form-control" placeholder="* Contraseña">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-link recuperarPass">Recuperar contraseña</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Iniciar</button>
				</div>
			</div>
		</div>
	</div>
</form>