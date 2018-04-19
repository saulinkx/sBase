<?php
/* Smarty version 3.1.30, created on 2018-04-19 16:06:47
  from "/var/www/html/jin/05_desarrollo/aplicacion_web/templates/piepagina.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad904e7047a16_12350032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85729fbf36ac50b6d33e15de8d293ea5fa7e32fe' => 
    array (
      0 => '/var/www/html/jin/05_desarrollo/aplicacion_web/templates/piepagina.html.tpl',
      1 => 1524172003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad904e7047a16_12350032 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/jin/05_desarrollo/aplicacion_web/lib/smarty/plugins/modifier.date_format.php';
?>
<footer>
	<div class="navbar navbar-default">
		  <div id="footer" class="span12">
			    <b>ISC-<?php echo smarty_modifier_date_format(time(),"%Y");?>
</b>
			    <br />
			    <span>Portal Desarrollado con Software Libre</span>
			    <br />
			    <img src="imgs/gplv3.min.png" style="height: 50%;" />
		  </div>
	</div>
</footer>
<?php }
}
