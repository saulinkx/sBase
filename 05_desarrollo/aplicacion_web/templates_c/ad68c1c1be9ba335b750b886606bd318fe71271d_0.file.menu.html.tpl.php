<?php
/* Smarty version 3.1.30, created on 2018-04-19 16:03:30
  from "/var/www/html/jin/05_desarrollo/aplicacion_web/templates/menu.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad90422ed9048_43387973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad68c1c1be9ba335b750b886606bd318fe71271d' => 
    array (
      0 => '/var/www/html/jin/05_desarrollo/aplicacion_web/templates/menu.html.tpl',
      1 => 1505102016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad90422ed9048_43387973 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/jin/05_desarrollo/aplicacion_web/lib/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) require_once '/var/www/html/jin/05_desarrollo/aplicacion_web/lib/smarty/plugins/modifier.replace.php';
if (!$_smarty_tpl->tpl_vars['ocultarMenu']->value) {?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-1" >
	<span class="sr-only" >menu</span>
	<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php if (isset($_smarty_tpl->tpl_vars['sesionIniciada']->value)) {?>
	<div class="navbar-brand"><span style="font-size:15px;">Bienvenido:</span><br /><b><span  style="font-size:10px;"><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</span></b></div>
      <?php }?>
    </div>
    
    <div class="collapse navbar-collapse navbar-right" id="navbar-1" >
      <ul class="nav navbar-nav" >
	<?php if ($_smarty_tpl->tpl_vars['mostrarLogin']->value == "1") {?>
	  <li class="menu_bar"><a href="index.php?modulo=inicio">Inicio</a></li>
	<?php } else { ?>
	  <li class="menu_bar"><a href="index.php?modulo=panelUsuario">Inicio</a></li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['mostrarLogin']->value == "1") {?>
	  <li class="menu_bar"><a href="index.php?modulo=registro">Registro</a></li>
	<?php }?>
	<li class="menu_bar"><a href="index.php?modulo=materialDeApoyo">Convocatoria</a></li>
	<li class="menu_bar"><a href="index.php?modulo=fechasImportantes">Fechas Importantes</a></li>
	<li class="menu_bar"><a href="index.php?modulo=asignacionDeHorariosLugar">Horarios</a></li>
	
	<?php if (in_array("institucional",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	  <li class="dropdown menu_bar">
	    <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Institucional <span class="caret"></span></a>
	    <ul class="dropdown-menu">
	      <?php if (in_array("escuelaAgregar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	      <li><a href="index.php?modulo=escuelaAgregar">Nuevo tecnológico</a></li>
	      <?php }?>
	      <?php if (in_array("escuelaListar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	      <li><a href="index.php?modulo=escuelaListar">Listar tecnológicos</a></li>
	      <?php }?>
	      <?php if (in_array("profesorAgregar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li class="divider"></li>
	      <li><a href="index.php?modulo=profesorAgregar">Nuevo docente</a></li>
	      <?php }?>
	      <?php if (in_array("profesorListar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	      <li><a href="index.php?modulo=profesorListar">Listar docentes</a></li>
	      <?php }?>
	    </ul>
	  </li>
	<?php }?>
	
	<?php if (in_array("comisionLocalPar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	  <li class="dropdown menu_bar">
	    <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Evaluadores <span class="caret"></span></a>
	    <ul class="dropdown-menu">
	      <?php if (in_array("evaluadorAgregar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		
		<li><a href="index.php?modulo=evaluadorAgregar">Nuevo evaluador</a></li>
	      <?php }?>
	      <?php if (in_array("evaluadorListar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li><a href="index.php?modulo=evaluadorListar">Listar evaluadores</a></li>
	      <?php }?>
	      <?php if (in_array("asignacionParListar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li><a href="index.php?modulo=asignacionParListar">Listar asignación par</a></li>
	      <?php }?>
	      <?php if (in_array("evaluadorDocenteAsignar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li class="divider"></li>
		<li><a href="index.php?modulo=evaluadorProyectoAsignar">Asignar evaluador de forma - proyecto</a></li>
	      <?php }?>
	      <?php if (in_array("evaluadorDocenteListar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	      
		<li><a href="index.php?modulo=evaluadorDocenteListar">Listar evaluador - docente </a></li>
	      <?php }?>
	      <?php if (in_array("avanceEvaluacionLocalPar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li><a href="index.php?modulo=avanceEvaluacionLocalPar"> Avance de evaluaciones </a></li>
	      <?php }?>
	    </ul>
	  </li>
	<?php }?>
	
	<?php if (in_array("calendario",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	  <li class="dropdown menu_bar">
	    <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Calendario <span class="caret"></span></a>
	    <ul class="dropdown-menu">
	      <?php if (in_array("asignarFechas",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li><a href="index.php?modulo=asignarFechas">Asignar fechas de acceso</a></li>
	      <?php }?>
	    </ul>
	  </li>
	<?php }?>
	
	<?php if (in_array("usuarios",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	  <li class="dropdown menu_bar">
	    <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Usuarios <span class="caret"></span></a>
	    <ul class="dropdown-menu">
	      <?php if (in_array("usuarioAgregar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li><a href="index.php?modulo=usuarioAgregar">Nuevo usuario</a></li>
	      <?php }?>
	      <?php if (in_array("usuarioListar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li><a href="index.php?modulo=usuarioListar">Lista de usuarios</a></li>
	      <?php }?>
	      <?php if (in_array("perfilAgregar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	      <li class="divider"></li>
		<li><a href="index.php?modulo=perfilAgregar">Nuevo perfil</a></li>
	      <?php }?>
	      <?php if (in_array("perfilListar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li><a href="index.php?modulo=perfilListar">Lista de perfiles</a></li>
	      <?php }?>
	      <?php if (in_array("passwordModificar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	      <li class="divider"></li>
		<li><a href="index.php?modulo=passwordModificar">Cambiar Password</a></li>
	      <?php }?>
	    </ul>
	  </li>
	<?php }?>
	
	<?php if (in_array("catalogos",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	  <li class="dropdown menu_bar">
	    <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Catalogos <span class="caret"></span></a>
	    <ul class="dropdown-menu">
	      <?php if (in_array("competenciaAgregar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li><a href="index.php?modulo=competenciaAgregar">Nuevo rubro</a></li>
	      <?php }?>
	      <?php if (in_array("competenciaListar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<!--<li><a href="index.php?modulo=competenciaListar">Listar rubros</a></li>-->
	      <?php }?>
	      <?php if (in_array("actividadAgregar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li><a href="index.php?modulo=actividadAgregar">Nueva categoría</a></li>
	      <?php }?>
	      
		<!--<li><a href="index.php?modulo=actividadListar">Listar categorías</a></li>-->
	      
	      <?php if (in_array("subActividadAgregar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li><a href="index.php?modulo=subActividadAgregar">Nueva actividad</a></li>
	      <?php }?>
	      
		<!--<li><a href="index.php?modulo=subActividadListar">Listar actividades</a></li>-->
	      
	      <?php if (in_array("subSubActividadAgregar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li><a href="index.php?modulo=subSubActividadAgregar">Nueva subactividad</a></li>
	      <?php }?>
	      
		<!--<li><a href="index.php?modulo=subSubActividadListar">Listar subactividades</a></li>-->
	      
	      <?php if (in_array("competencias",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li class="divider"></li>
		<li><a href="index.php?modulo=competencias">Competencias</a></li>
	      <?php }?>
	    </ul>
	  </li>
	<?php }?>
	
	<?php if (in_array("evaluacion",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	  <li class="dropdown menu_bar">
	     <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Evaluación <span class="caret"></span></a>
          <ul class="dropdown-menu">
               
               <?php if (in_array("generarMesas",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
               		<li class="dropdown-header">Administrar</li>
	               <li><a href="index.php?modulo=generarMesasAuto">Generar mesas - Proyecto</a></li>
               <?php }?>
               <?php if (in_array("mesaEvaluadorAsignar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	               <li><a href="index.php?modulo=mesaEvaluadorAsignar">Asignar a Mesas - Evaluadores</a></li>
               <?php }?>
               <?php if (in_array("aignarMesaCoordinador",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
                    <li><a href="index.php?modulo=mesaCoordinadorAsignar">Asignar Coordinadores a mesas</a></li>
               <?php }?>
               <?php if (in_array("evaluarForma",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
                    <li><a href="index.php?modulo=evaluarProyectosDeForma">Evaluación de Forma</a></li>
               <?php }?>
               <?php if (in_array("evaluarProyecto",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
                    <li><a href="index.php?modulo=evaluarProyectosPorRubrica">Proyectos a evaluar</a></li>
               <?php }?>
               <div class="divider"></div>
               <?php if (in_array("verPuntajesProyectos",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
                    <li><a href="index.php?modulo=puntajesProyecto">Mostrar Puntajes Finales por mesa</a></li>
               <?php }?>
          </ul>
	  </li>
	<?php }?>
	
	<?php if (in_array("proyecto",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	  <li class="dropdown menu_bar">
	     <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Proyecto <span class="caret"></span></a>
          <ul class="dropdown-menu">
               <?php if (in_array("registrarProyecto",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	               <li><a href="index.php?modulo=registrarProyecto">Registrar Proyecto</a></li>
	          <?php }?>
	          <?php if (in_array("subirPresentacion",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	               <li><a href="index.php?modulo=subirPresentacion">Subir Presentación</a></li>
	          <?php }?>
	          <?php if (in_array("proyectoListar",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	               <li><a href="index.php?modulo=listarProyectosCordinadorPorMesa">Listar Proyectos</a></li>
	          <?php }?>
          </ul>
	  </li>
	<?php }?>
	
	<?php if (in_array("miPerfil",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	
	     <li class="dropdown menu_bar">
	          <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Mi Perfil <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	               <?php if (in_array("solicitud",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	               <li><a href="index.php?modulo=solicitud">Solicitud</a></li>
	               <?php }?>
	               <?php if (in_array("changePassword",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	               <li><a href="index.php?modulo=changePassword">Modificar contraseña</a></li>
	               <?php }?>
	          </ul>
	
	<?php }?>
	
	<?php if (in_array("seguimiento",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	  <li class="dropdown menu_bar">
	    <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Seguimiento<span class="caret"></span></a>
	    <ul class="dropdown-menu">
	      <?php if (in_array("dictamenes",$_smarty_tpl->tpl_vars['usuarioPermisos']->value) && !in_array("comisionnacional_dictamen",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li>
		  <!-- Se agrega comentario al modulo que debera ver la local de la nacional-->
		  <a href="index.php?modulo=generarDictamenes">Generar dictámenes</a>
		</li>
	      <?php }?>
	      <?php if (in_array("dictamenes",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
	      <li>
			<a href="index.php?modulo=subirDocumentosPresidente">Carga de documentos</a>
	      </li>
		<li>
		  <!-- Se comenta esta linea temporalmente para mostrar el modulo de ver respuesta de apelaciones -->
		  <!--<a href="index.php?modulo=subirDictamenesLocalParApelaciones">Subir Dictámenes o Apelaciones</a>-->
		  <a href="index.php?modulo=respuestaApelacion">Respuesta de apelaciones</a>
		</li>
	      <?php }?>
	      <?php if (in_array("documentosPresidentes",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li>
		  <a href="index.php?modulo=descargarDocumentosPresidentes">Descargar FER / DIC / FAPCL</a>
		</li>
	      <?php }?>
	      <?php if (in_array("comisionnacional_dictamen",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li>
		  <a href="index.php?modulo=comisionnacional_dictamen">Generar dictámenes nacionales</a>
		</li>
	      <?php }?>
	      <?php if (in_array("comisionnacional_dictamen",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li>
		  <a href='imprimibles/imprimir.php?imprimir=dictamen_final&nombreArchivo=DIC-F-<?php echo smarty_modifier_date_format(time(),"%Y");?>
'>Dictamen final <?php echo smarty_modifier_date_format(time(),"%Y");?>
</a>
		</li>
	      <?php }?>
	      <?php if (in_array("comisionnacional_estadisticas",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li>
		  <a href="index.php?modulo=comisionnacional_estadisticas">Estadísticas</a>
		</li>
	      <?php }?>
	      <?php if (in_array("avanceEvaluacion",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
		<li><a href="index.php?modulo=avanceNacional">Avance de evaluación</a></li>
	      <?php }?>
	      <?php if (in_array("dictamenFinal",$_smarty_tpl->tpl_vars['usuarioPermisos']->value)) {?>
                <li>
		  <a href='imprimibles/imprimir.php?imprimir=dic&nombreArchivo=<?php echo smarty_modifier_date_format(time(),"%Y");?>
_<?php echo $_smarty_tpl->tpl_vars['escuelaId']->value;?>
-<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['escuela']->value," ","_");?>
'>Formato Dictamen Final <?php echo smarty_modifier_date_format(time(),"%Y");?>
</a>
		</li>
		<?php }?>
	    </ul>
	  </li>
	<?php }?>
	
	<li class="dropdown menu_bar">
	  <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Ayuda <span class="caret"></span></a>
	  <ul class="dropdown-menu">
		<?php if (!isset($_smarty_tpl->tpl_vars['ocultarAcercaDe']->value)) {?>
	      
		<?php }?>
		<?php if (!isset($_smarty_tpl->tpl_vars['ocultarAcercaDe']->value)) {?>
			<li><a href="index.php?modulo=acerca_de">Acerca de... </a></li>
		<?php }?>
	  </ul>
	</li>

	<?php if (isset($_smarty_tpl->tpl_vars['sesionIniciada']->value)) {?>
	  <li><a href="#">&nbsp;</a></li>
	  <li class="menu_bar"><a href="index.php?modulo=logout"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['mostrarLogin']->value == "1") {?>
	  <li><a href="#">&nbsp;</a></li>
	  <li class="menu_bar"><a href="index.php?modulo=login"><span class="glyphicon glyphicon-user"></span> Login</a></li>
	<?php }?>
	
      </ul>
    </div>
  </div>
</nav>
<?php }
}
}
