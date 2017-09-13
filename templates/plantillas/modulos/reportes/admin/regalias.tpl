<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Regalías</h1>
	</div>
</div>

<div class="box">
	<div class="box-body">
		<div class="row">
			<div class="col-xs-2 col-md-2 text-right">
				<label for="txtInicio">Inicio</label>
			</div>
			<div class="col-xs-4 col-md-3">
				<input type="date" placeholder="Y-m-d" class="form-control" id="txtInicio" name="txtInicio" value="{$smarty.now|date_format:"%Y-%m-%d"}" readonly/>
			</div>
			<div class="col-xs-2 col-md-2 col-md-offset-1 text-right">
				<label for="txtFin">Fin</label>
			</div>
			<div class="col-xs-4 col-md-3">
				<input type="date" placeholder="Y-m-d" class="form-control" id="txtFin" name="txtFin" value="{$smarty.now|date_format:"%Y-%m-%d"}" readonly/>
			</div>
		</div>
	</div>
</div>

<div id="dvRegalias"></div>