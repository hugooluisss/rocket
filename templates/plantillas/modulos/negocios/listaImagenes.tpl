<div class="row">
{foreach from=$imagenes item="row"}
	<div class="col-xs-6 col-sm-4 col-md-3">
		<img src="{$row}" class="img-responsive"/>
	</div>
{foreachelse}
	<div class="col-xs-12">No se han agregado imágenes a la galería</div>
{/foreach}
</div>