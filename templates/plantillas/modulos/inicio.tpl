<div class="box">
	<div class="box-header">
		<h3>Bienvenido </h3>
	</div>
	<div class="box-body">
		{$PAGE.usuario->getNombre()}
	</div>
</div>

{if $PAGE.usuario->getIdTipo() eq 1}
	{include file=$PAGE.rutaModulos|cat:"modulos/inicio/administrador.tpl"}
{/if}

{if $PAGE.usuario->getIdTipo() eq 2}
	{include file=$PAGE.rutaModulos|cat:"modulos/inicio/negocio.tpl"}
{/if}
