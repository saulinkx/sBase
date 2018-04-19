<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Sistema de estímulos al desempeño docente - [{$titulo}]</title>

    <link rel="stylesheet" type="text/css" href="{$ruta}css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{$ruta}css/default.css" />
    <link rel="stylesheet" type="text/css" href="{$ruta}css/uploadify.css">
    <link rel="stylesheet" type="text/css" href="{$ruta}css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="{$ruta}css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="{$ruta}css/fancybox_helpers/jquery.fancybox.css" media="screen" />

    <script src="{$ruta}js/jquery.min.js" type="text/javascript"></script>
    <script src="{$ruta}js/jquery-ui.min.js"></script>
    <script src="{$ruta}js/jquery.ui.datepicker-es.js"></script>
    <script src="{$ruta}js/jquery.uploadify.min.js" type="text/javascript"></script>
    <script src="{$ruta}js/jquery.maskedinput.js"></script>
    <script src="{$ruta}js/shadowbox.js"></script>
    <script src="{$ruta}js/bootstrap.min.js"></script>
    <script src="{$ruta}js/jquery.mousewheel-3.0.6.pack_fancy.js"></script>
    <script src="{$ruta}js/jquery.fancybox.pack.js"></script>
    {literal}
    <script type="text/javascript">
		
		function registrarOtroUsuario(){
			
			parent.$.fancybox.close();
			
		}
		
		function cancelar(){
			parent.location.href="../index.php?modulo=usuarioListar";
			parent.$.fancybox.close();
		}
		
    </script>
    {/literal}
<script type="text/javascript">

</script>
<head>
<body class="container general">
<div id="respuestaEliminar">
	<div class="jumbotron">
		<h3 class="titulo"><center>¡Se han registrado los datos del Usuario <b>{$nombre}</b> de forma exitosa!</center></h3>
		<br />
		<p>
		Te pedimos por favor anotes los siguientes datos de acceso de tu Usuario:<br />
		Usuario: {$usuario}<br />
		Password: {$password}<br />
		</p>
		<center>
			<p>
			¿Deseas agregar otro Usuario?
			</p>
			<input type="button" class="btn" onClick="registrarOtroUsuario();" value="Sí" />
			<input type="button" class="btn" onClick="cancelar();" value="No" />
		</center>
	</div>
</div>
</body>
</html>