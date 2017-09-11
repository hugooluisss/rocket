<?php /* Smarty version Smarty-3.1.11, created on 2017-09-10 22:11:30
         compiled from "templates/plantillas/modulos/negocios/galeria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211054513759b179799a1e06-46074425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf49c6c9967d910945ee15a1dbe7ba0b66067ebd' => 
    array (
      0 => 'templates/plantillas/modulos/negocios/galeria.tpl',
      1 => 1504811282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211054513759b179799a1e06-46074425',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b17979a15397_65361995',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b17979a15397_65361995')) {function content_59b17979a15397_65361995($_smarty_tpl) {?><div class="row">
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
</div><?php }} ?>