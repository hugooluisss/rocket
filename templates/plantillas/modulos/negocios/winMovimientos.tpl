<div id="winMovimientos" class="modal fade" role="dialog" usuario="">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Movimientos</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label class="col-sm-3 control-label" for="txtInicio">Inicio</label>
					<div class="col-sm-3">
						<div class="input-group">
							<input type="text" class="form-control setFechas" id="txtInicio" name="txtInicio" value="{$smarty.now|date_format:"%Y-%m-%d"}" readonly="true">
						</div>
					</div>
					<label class="col-sm-3 control-label" for="txtFin">Fin</label>
					<div class="col-sm-3">
						<div class="input-group">
							<input type="text" class="form-control setFechas" id="txtFin" name="txtFin" value="{$smarty.now|date_format:"%Y-%m-%d"}" readonly="true">
						</div>
					</div>
				</div>
				<br />
				<button id="btnEstadoCuenta" class="btn btn-primary btn-xs">PDF</button>
				<br />
				<br />
				<div class="dvMovimientos">
				
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>