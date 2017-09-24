<?php /* Smarty version Smarty-3.1.11, created on 2017-09-23 12:13:58
         compiled from "templates/plantillas/modulos/front-end/marcasAfiliadas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13295301159b1fb9e9c4b07-53153527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '005a3c75d095143403998722bf688b53266d8971' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/marcasAfiliadas.tpl',
      1 => 1506186834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13295301159b1fb9e9c4b07-53153527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b1fb9e9c5868_31605300',
  'variables' => 
  array (
    'negocios' => 0,
    'negocio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b1fb9e9c5868_31605300')) {function content_59b1fb9e9c5868_31605300($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-xs-12 text-center">
			<h2>Nuestras marcas</h2>
		</div>
	</div>
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars["negocio"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["negocio"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['negocios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["negocio"]->key => $_smarty_tpl->tpl_vars["negocio"]->value){
$_smarty_tpl->tpl_vars["negocio"]->_loop = true;
?>
			<div class="col-xs-12 col-sm-4 negocioAfiliado" data-toggle="popover" data-placement="top" <?php if ($_smarty_tpl->tpl_vars['negocio']->value['plus']==1){?>title="Este es un negocio plus" data-content="En <?php echo $_smarty_tpl->tpl_vars['negocio']->value['razonsocial'];?>
 puedes cambiar tus Rocket Points por dinero en efectivo" <?php }?>>
				<img class="logotipo" src="<?php echo $_smarty_tpl->tpl_vars['negocio']->value['logotipo'];?>
" datos='<?php echo $_smarty_tpl->tpl_vars['negocio']->value['json'];?>
' data-toggle="modal" data-target="#winNegocio" />
				<?php if ($_smarty_tpl->tpl_vars['negocio']->value['plus']==1){?>
					<div class="negocioPlus">
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
				<?php }?>
		    </div>
	    <?php } ?>
	</div>
</div>


<div id="winNegocio" class="modal fade" role="dialog" usuario="">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" campo="razonsocial"></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12 text-center" style="height: 200px; overflow-y: hidden;">
						<img class="imgNegocio" />
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 dvListaImagenes">
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-xs-4 text-danger"><b>Dirección</b></div>
					<div class="col-xs-8">
						<span campo="calle"></span>
						<span campo="colonia"></span>
						<span campo="codigopostal"></span>
						<span campo="localidad"></span>
						<span campo="municipio"></span>
						<span campo="entidadfederativa"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 text-danger"><b>Teléfono</b></div>
					<div class="col-xs-8" campo="telefono"></div>
				</div>
				<div class="row">
					<div class="col-xs-4 text-danger"><b>Correo electrónico</b></div>
					<div class="col-xs-8" campo="correo"></div>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>