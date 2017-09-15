<?php /* Smarty version Smarty-3.1.11, created on 2017-09-15 12:38:00
         compiled from "templates/plantillas/modulos/negocios/winLogotipo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147145124959bc0ff8c77e98-18829079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09706b0731a8075e76ef3dc82f9f4d8b0877a2ad' => 
    array (
      0 => 'templates/plantillas/modulos/negocios/winLogotipo.tpl',
      1 => 1505497037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147145124959bc0ff8c77e98-18829079',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59bc0ff8c79a81_35420983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bc0ff8c79a81_35420983')) {function content_59bc0ff8c79a81_35420983($_smarty_tpl) {?><div id="winLogotipo" class="modal fade" role="dialog" usuario="">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Logotipo</h4>
			</div>
			<div class="modal-body">
				<form role="form" id="frmLogotipo" action="?mod=cnegocios&action=uploadLogotipo" class="form-horizontal" onsubmit="javascript: return false;" enctype="multipart/form-data">
					<input type="file" name="upl" />
				</form>
			</div>
		</div>
	</div>
</div><?php }} ?>