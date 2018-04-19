<?php
/* Smarty version 3.1.30, created on 2018-04-19 16:03:30
  from "/var/www/html/jin/05_desarrollo/aplicacion_web/templates/layout.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad90422e66280_07924870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e18275fcd334fd194acf0a1cd7df35a4350812eb' => 
    array (
      0 => '/var/www/html/jin/05_desarrollo/aplicacion_web/templates/layout.html.tpl',
      1 => 1505105370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado.html.tpl' => 1,
    'file:menu.html.tpl' => 1,
    'file:piepagina.html.tpl' => 1,
  ),
),false)) {
function content_5ad90422e66280_07924870 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Plataforma para el Encuentro de Jovenes Investigadores - [<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
]</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="css/uploadify.css">
    <link rel="stylesheet" type="text/css" href="css/fancybox_helpers/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.15/b-1.4.0/b-print-1.4.0/cr-1.3.3/datatables.min.css"/>
 
    
    
    <?php echo '<script'; ?>
 src="js/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.ui.datepicker-es.conf.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.uploadify.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.maskedinput.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.mousewheel-3.0.6.pack_fancy.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.fancybox.pack.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap-filestyle.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.15/b-1.4.0/b-print-1.4.0/cr-1.3.3/datatables.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="js/funciones/default.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/funciones/participantes/registroParticipantes.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/funciones/evaluadores/registroEvaluadores.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/funciones/evaluadores/asignacionEvaluadorProyecto.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/funciones/evaluadores/evaluarProyectosDeForma.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/funciones/evaluadores/evaluarProyectosPorRubrica.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/funciones/especiales/generarMesas.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/funciones/organismoRector.js"><?php echo '</script'; ?>
>

</head>

<body>
	<?php $_smarty_tpl->_subTemplateRender("file:encabezado.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:menu.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container general">
	<?php if ($_smarty_tpl->tpl_vars['errorMensaje']->value) {?>
	<div class="row">
		<div id="error" class="col-sm-4 col-md-6 col-md-offset-3 alert alert-danger">
	  		<?php echo $_smarty_tpl->tpl_vars['errorMensaje']->value;?>
	
		</div>
	</div>
	<?php }?>
	<?php $_smarty_tpl->_assignInScope('template', ("templates/").($_smarty_tpl->tpl_vars['contenido']->value));
?>
	<?php if (!empty($_smarty_tpl->tpl_vars['contenido']->value) && file_exists($_smarty_tpl->tpl_vars['template']->value)) {?>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	<?php } else { ?>
	<div class="row">
		<div class="col-sm-4 col-md-6 col-md-offset-3 alert alert-danger">
	  		La plantilla <?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>
 no existe
		</div>
	</div>
	<?php }?>
	<div class="row">
	    <?php $_smarty_tpl->_subTemplateRender("file:piepagina.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>
</div>
</body>
</html>
<?php }
}
