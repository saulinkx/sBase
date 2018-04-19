<?php
/* Smarty version 3.1.30, created on 2018-04-19 16:05:59
  from "/var/www/html/jin/05_desarrollo/aplicacion_web/templates/encabezado.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad904b7017151_93755461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22263ae888f1fd830b6e4698ad511b29104ecd82' => 
    array (
      0 => '/var/www/html/jin/05_desarrollo/aplicacion_web/templates/encabezado.html.tpl',
      1 => 1524171885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad904b7017151_93755461 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/jin/05_desarrollo/aplicacion_web/lib/smarty/plugins/modifier.date_format.php';
?>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-4" id="logo">
    <img src="imgs/logotipos/" alt="Logo" class="img-responsive" style="width:80%; height:auto; padding: 7px;" />
  </div>
  <div class="col-md-6" id="logo" style="vertical-align: middle;">
    Título de la plataforma-<?php echo smarty_modifier_date_format(time(),"%Y");?>

  </div>
</div>
<?php }
}
