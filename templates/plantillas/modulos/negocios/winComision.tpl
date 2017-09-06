<form role="form" id="frmComision" class="form-horizontal" onsubmit="javascript: return false;">
	<div id="winComisiones" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Comisiones</h4>
				</div>
				<div class="modal-body">
					<div class="alert alert-info">
						Las comisiónes son aplicadas 24 horas después de su aplicación
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtComision">Nueva comisión</label>
						<div class="col-sm-3">
							<div class="input-group">
								<input type="number" class="form-control" id="txtComision" name="txtComision" value="0">
								<span class="input-group-addon" id="basic-addon1">%</span>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>
		</div>
	</div>
</form>