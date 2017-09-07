<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Galería de imágenes</h1>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-6 col-sm-offset-3">
		<button type="button" class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#winUploadImagen">Subir fotografía</button>
	</div>
</div>
<br />
<div class="box">
	<div class="box-body dvLista">
	</div>
</div>


<div class="modal fade" id="winUploadImagen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3>Subir fotografía</h3>
			</div>
			<div class="modal-body">
				<form method="post" action="?mod=cnegocios&action=uploadGaleria" enctype="multipart/form-data">
					<input type="file" name="upl" multiple />
					<ul class="elementos list-group">
					<!-- The file list will be shown here -->
					</ul>
				</form>
			</div>
		</div>
	</div>
</div>