<script type="text/javascript">
	
	$().ready(function() {literal}{{/literal}
		
		{section name=Accesos loop=$tiposDeAcceso}
			$("#{$tiposDeAcceso[Accesos].acceso}Inicio").datepicker({literal}{dateFormat:'yy-mm-dd'}{/literal});
			$("#{$tiposDeAcceso[Accesos].acceso}Fin").datepicker({literal}{dateFormat:'yy-mm-dd'}{/literal});
		{/section}
		
		{section name=Accesos loop=$tiposDeAcceso}
			$("#{$tiposDeAcceso[Accesos].acceso}InicioTec").datepicker({literal}{dateFormat:'yy-mm-dd'}{/literal});
			$("#{$tiposDeAcceso[Accesos].acceso}FinTec").datepicker({literal}{dateFormat:'yy-mm-dd'}{/literal});
		{/section}
		
	{literal}}{/literal});
	
	function asignar(){literal}{{/literal}
     
		if($("input[name='acceso']").is(':checked')){literal}{{/literal}
			$("#porTec").show("slow");
			$("#general").hide("slow");
			$("#tecnologico").html("[Tecnológico]");
		{literal}}else{{/literal}

			$('#escuelaId').prop('selectedIndex', 0);
			{section name=Accesos loop=$tiposDeAcceso}
					$("#{$tiposDeAcceso[Accesos].acceso}InicioTec").val("");
					$("#{$tiposDeAcceso[Accesos].acceso}FinTec").val("");
			{/section}
			$("#porTec").hide("slow");
			$("#general").show("slow");
		{literal}}{/literal}
	{literal}}{/literal}
	
	function valorTec(idTec){literal}{{/literal}
     
		if(idTec == "200"){literal}{{/literal}
			$("#tecnologico").html("[Tecnológico]");
				$("#altaLocalIdTec").val("");
				{section name=Accesos loop=$tiposDeAcceso}
					$("#{$tiposDeAcceso[Accesos].acceso}InicioTec").val("");
					$("#{$tiposDeAcceso[Accesos].acceso}FinTec").val("");
				{/section}
		{literal}}{/literal}
		
		if(idTec != "0" && idTec != "200"){literal}{{/literal}
			$.ajax({literal}{{/literal}
				type: "POST",
				url:  "ajax_jquery/obtenerNombreTecnologico.php",
				data: "escuelaId=" + idTec,
				dataType: "json",
				beforeSend: function( xhr ){literal}{{/literal}
						$("#altaLocalIdTec").val("");
						{section name=Accesos loop=$tiposDeAcceso}
							$("#{$tiposDeAcceso[Accesos].acceso}InicioTec").val("");
							$("#{$tiposDeAcceso[Accesos].acceso}FinTec").val("");
						{/section}
				{literal}}{/literal},
				
				success: function (respuesta){literal}{{/literal}
                    $("#tecnologico").html(respuesta[0].escuela);
					for(i in respuesta){literal}{{/literal}
						switch(respuesta[i].tipoAccesoId)
						{literal}{{/literal}
							{section name=Accesos loop=$tiposDeAcceso}
							case "{$tiposDeAcceso[Accesos].tipoAccesoId}":
								//$("#tecnologico").html(respuesta.escuela);
								$("#{$tiposDeAcceso[Accesos].acceso}IdTec").val(respuesta[i].accesoId);
								$("#{$tiposDeAcceso[Accesos].acceso}InicioTec").val(respuesta[i].fechaInicio);
								$("#{$tiposDeAcceso[Accesos].acceso}FinTec").val(respuesta[i].fechaFin);
							break;
							{/section}
						{literal}}{/literal}
					{literal}}{/literal}
				{literal}}{/literal}
			{literal}}{/literal});
		{literal}}{/literal}
	{literal}}{/literal}
	
	
	
	function registrarAccesoTec(
			{section name=Accesos loop=$tiposDeAcceso}
				{if $smarty.section.Accesos.last}
					{$tiposDeAcceso[Accesos].acceso}Id
				{else}
					{$tiposDeAcceso[Accesos].acceso}Id,
				{/if}
				{/section}
				){literal}{{/literal}
			
			{section name=Accesos loop=$tiposDeAcceso}
				var {$tiposDeAcceso[Accesos].acceso}Inicio = $("#{$tiposDeAcceso[Accesos].acceso}InicioTec").val();
				var {$tiposDeAcceso[Accesos].acceso}Fin    = $("#{$tiposDeAcceso[Accesos].acceso}FinTec").val();
			{/section}
				var escuelaId              			   = $("#escuelaId").val();
		
			{section name=Accesos loop=$tiposDeAcceso}
				if({$tiposDeAcceso[Accesos].acceso}Inicio.length == 10 && {$tiposDeAcceso[Accesos].acceso}Fin.length == 10){literal}{{/literal}
					// Se hace un update en las fechas a nivel nacional - alta comision local
					{$tiposDeAcceso[Accesos].acceso}Id = (typeof({$tiposDeAcceso[Accesos].acceso}Id) == 'undefined') ? 0 : {$tiposDeAcceso[Accesos].acceso}Id;
					$.ajax({literal}{{/literal}
						type: "POST",
						url:  "ajax_jquery/registrarFechasDeAcceso.php",
						data: "accesoId=" + {$tiposDeAcceso[Accesos].acceso}Id + "&fechaInicio=" + {$tiposDeAcceso[Accesos].acceso}Inicio + "&fechaFin=" + {$tiposDeAcceso[Accesos].acceso}Fin + "&escuelaId=" + escuelaId + "&tipoAcceso=" + {$tiposDeAcceso[Accesos].tipoAccesoId},
						success: function (mensaje){literal}{{/literal}
							$("#{$tiposDeAcceso[Accesos].acceso}IdTec").val(mensaje);
						{literal}}{/literal}
					{literal}}{/literal});
				{literal}}{/literal}
			{/section}
	
		lanzarFancybox('Actualizadas . . . ');
     
{literal}}{/literal}
	
	
	
	function registrarAcceso(
		{section name=Accesos loop=$tiposDeAcceso}
			{if $smarty.section.Accesos.last}
				{$tiposDeAcceso[Accesos].acceso}Id
			{else}
				{$tiposDeAcceso[Accesos].acceso}Id,
			{/if}
		{/section}
		){literal}{{/literal}
		
		{section name=Accesos loop=$tiposDeAcceso}
			var {$tiposDeAcceso[Accesos].acceso}Inicio = $("#{$tiposDeAcceso[Accesos].acceso}Inicio").val();
			var {$tiposDeAcceso[Accesos].acceso}Fin    = $("#{$tiposDeAcceso[Accesos].acceso}Fin").val();
		{/section}
			var escuelaId              			   = $("#escuelaId").val();
		
		{section name=Accesos loop=$tiposDeAcceso}
		if({$tiposDeAcceso[Accesos].acceso}Inicio.length == 10 && {$tiposDeAcceso[Accesos].acceso}Fin.length == 10){literal}{{/literal}
			// Se hace un update en las fechas a nivel nacional - alta comision local
			{$tiposDeAcceso[Accesos].acceso}Id = (typeof({$tiposDeAcceso[Accesos].acceso}Id) == 'undefined') ? 0 : {$tiposDeAcceso[Accesos].acceso}Id;
			$.ajax({literal}{{/literal}
				type: "POST",
				url:  "ajax_jquery/registrarFechasDeAcceso.php",
				data: "accesoId=" + {$tiposDeAcceso[Accesos].acceso}Id + "&fechaInicio=" + {$tiposDeAcceso[Accesos].acceso}Inicio + "&fechaFin=" + {$tiposDeAcceso[Accesos].acceso}Fin + "&escuelaId=" + escuelaId + "&tipoAcceso=" + {$tiposDeAcceso[Accesos].tipoAccesoId},
				success: function (mensaje){literal}{{/literal}
					$("#{$tiposDeAcceso[Accesos].acceso}Id").val(mensaje);
				{literal}}{/literal}
			{literal}}{/literal});
		{literal}}{/literal}
		{/section}

		lanzarFancybox('Actualizadas . . . ');
     
{literal}}{/literal}
		
</script>
<div class="row container">
	<h1 class="titulo">Asignación de fechas de acceso al sistema</h1>
<form name="registrarAccesos" id="registrarAccesos" method="POST" action="index.php?modulo=asignarFechas" />
	<div class="row">
		<div class="col-md-3 col-md-offset-5">
			<label class="checkbox-inline">
				<input type="checkbox" name="acceso" id="acceso" onClick="asignar();" /> Acceso por tecnológico
			</label>
		</div>
	</div>

	<div id="general" class="container cuerpoRow" style="display:yes">
		<div class="row container">
			<div class="col-md-5 col-md-offset-4">
			<h1 class="titulo">Acceso general - [Nacional]</h1>
			</div><!-- colomna -->
		</div><!-- row 1-->
		<div class="row container">
			<div class="col-md-4 col-md-offset-7 encabezadoRow">
				<span class="titulo"><h3>Fechas</h3></span>
			</div>
		</div>
		{section name=Accesos loop=$tiposDeAcceso}
			<div class="row container registroRow">
				<div class="col-md-6 col-md-offset-1">
					{$tiposDeAcceso[Accesos].descripcionAcceso}
					{if $tiposDeAcceso[Accesos].acceso == cargaFer}
						{$smarty.now|date_format:"%Y"}
					{/if}
					
					<input type="hidden" name="tipoAccesoId" id="tipoAccesoId" value="{$tiposDeAcceso[Accesos].tipoAccesoId}">
					<input type="hidden" name="{$tiposDeAcceso[Accesos].acceso}Id" id="{$tiposDeAcceso[Accesos].acceso}Id" value="{$tiposDeAcceso[Accesos].accesoId}" />
				</div>
				<div class="col-md-2">
					<div class="input-group">
						<div class="input-group-addon">
							Inicio
						</div>
						<input type="text" class="form-control fechas" placeholder="Inicio" name="{$tiposDeAcceso[Accesos].acceso}Inicio" id="{$tiposDeAcceso[Accesos].acceso}Inicio" value="{$tiposDeAcceso[Accesos].fechaInicio}" /></td>
					</div>
				</div>
				<div class="col-md-2">
					<div class="input-group">
						<div class="input-group-addon">
							Fin
						</div>
						<input type="text" class="form-control fechas" placeholder="Fin" name="{$tiposDeAcceso[Accesos].acceso}Fin" id="{$tiposDeAcceso[Accesos].acceso}Fin" value="{$tiposDeAcceso[Accesos].fechaFin}" />
					</div>
				</div>
			</div>
		{/section}
		
		<div class"row container">
			<p>&nbsp;</p>
		</div>
		<div class="row">
			<div class="col-md-5 col-md-offset-4">
				<input type="button" class="btn" name="accion" id="accion" value="Registrar" onClick="registrarAcceso(
				{section name=Accesos loop=$tiposDeAcceso} 
					{if $smarty.section.Accesos.last}
						$('#{$tiposDeAcceso[Accesos].acceso}Id').val() 
					{else} 
						$('#{$tiposDeAcceso[Accesos].acceso}Id').val(), 
					{/if}
				{/section})" />
			</div>
		</div>
		<div class"row container">
			<p>&nbsp;</p>
		</div>
	</div>
   
	<div id="porTec" class="container cuerpoRow" style="display:none">
		<div class="row">
			<div class="col-md-5 col-md-offset-4">
				<div class="form-group">
					<label for="escuelaId">Tecnológico:</label>
					<select class="form-control" name="escuelaId" id="escuelaId" onChange="valorTec($(this).val())">
						<option value="200"> -- Selecciona un tecnológico -- </option>
						{section name=escuela loop=$escuelas}
							<option value="{$escuelas[escuela].escuelaId}">
								{$escuelas[escuela].escuela}
							</option>
						{/section}
					</select>
				</div>
				<h1 class="titulo">Acceso ITS - <span id="tecnologico"></span><h1>
			</div><!-- columna-->   
		</div>
		<div class="row container">
			<div class="col-md-4 col-md-offset-7 encabezadoRow">
				<span class="titulo"><h3>Fechas</h3></span>
			</div>
		</div>
		{section name=Accesos loop=$tiposDeAcceso}
			<div class="row container registroRow">
				<div class="col-md-6 col-md-offset-1">
				{if $tiposDeAcceso[Accesos].acceso != evaluacionNacional && $tiposDeAcceso[Accesos].acceso != apelacionNacional && $tiposDeAcceso[Accesos].acceso != nacional && $tiposDeAcceso[Accesos].acceso != catalogos && $tiposDeAcceso[Accesos].acceso != registroDocente}
					{$tiposDeAcceso[Accesos].descripcionAcceso}
						{if $tiposDeAcceso[Accesos].acceso == cargaFer}
							{$smarty.now|date_format:"%Y"}
						{/if}
				{/if}
					{assign var="numeroAcceso" value=$tiposDeAcceso[Accesos].tipoAccesoId}
					{math assign="index" equation="$numeroAcceso -1"}
					<input type="hidden" name="{$tiposDeAcceso[Accesos].acceso}IdTec" id="{$tiposDeAcceso[Accesos].acceso}IdTec" />
				</div>
				<div class="col-md-2">
					<div class="input-group">
					{if $tiposDeAcceso[Accesos].acceso != evaluacionNacional && $tiposDeAcceso[Accesos].acceso != apelacionNacional && $tiposDeAcceso[Accesos].acceso != nacional && $tiposDeAcceso[Accesos].acceso != catalogos && $tiposDeAcceso[Accesos].acceso != registroDocente}
						<div class="input-group-addon">
							Inicio
						
						</div>
					{/if}
						{if $tiposDeAcceso[Accesos].acceso != evaluacionNacional && $tiposDeAcceso[Accesos].acceso != apelacionNacional && $tiposDeAcceso[Accesos].acceso != nacional && $tiposDeAcceso[Accesos].acceso != catalogos && $tiposDeAcceso[Accesos].acceso != registroDocente}
							<input type="text" class="form-control fechas" placeholder="Inicio" name="{$tiposDeAcceso[Accesos].acceso}InicioTec" id="{$tiposDeAcceso[Accesos].acceso}InicioTec" />
						{else}
						<input type="hidden" class="form-control fechas" placeholder="Inicio" name="{$tiposDeAcceso[Accesos].acceso}InicioTec" id="{$tiposDeAcceso[Accesos].acceso}InicioTec" />
						{/if}
					</div>
				</div>
				<div class="col-md-2">
					<div class="input-group">
					{if $tiposDeAcceso[Accesos].acceso != evaluacionNacional && $tiposDeAcceso[Accesos].acceso != apelacionNacional && $tiposDeAcceso[Accesos].acceso != nacional && $tiposDeAcceso[Accesos].acceso != catalogos && $tiposDeAcceso[Accesos].acceso != registroDocente}
						<div class="input-group-addon">
							Fin
						</div>
					{/if}
						{if $tiposDeAcceso[Accesos].acceso != evaluacionNacional && $tiposDeAcceso[Accesos].acceso != apelacionNacional && $tiposDeAcceso[Accesos].acceso != nacional && $tiposDeAcceso[Accesos].acceso != catalogos && $tiposDeAcceso[Accesos].acceso != registroDocente}
							<input type="text" class="form-control fechas" placeholder="Fin" name="{$tiposDeAcceso[Accesos].acceso}FinTec" id="{$tiposDeAcceso[Accesos].acceso}FinTec" />
						{else}
							<input type="hidden" class="form-control fechas" placeholder="Fin" name="{$tiposDeAcceso[Accesos].acceso}FinTec" id="{$tiposDeAcceso[Accesos].acceso}FinTec" />
						{/if}
					</div>
				</div>
			</div>
		{/section}
		
		<div class"row container">
			<p>&nbsp;</p>
		</div>
		<div class="row">
			<div class="col-md-5 col-md-offset-4">
				<input type="button" class="btn" name="accion" id="accion" value="Registrar" onClick="registrarAccesoTec(
					{section name=Accesos loop=$tiposDeAcceso} 
					{if $smarty.section.Accesos.last}
						$('#{$tiposDeAcceso[Accesos].acceso}IdTec').val() 
					{else} 
						$('#{$tiposDeAcceso[Accesos].acceso}IdTec').val(), 
					{/if}
					{/section})" />
			</div>
		</div>
		<div class"row container">
			<p>&nbsp;</p>
		</div>
	</div>

</form>
</div>
<div class"row"><p>&nbsp;</p></div>
<div class"row"><p>&nbsp;</p></div>
<div class"row"><p>&nbsp;</p></div>
<div class"row"><p>&nbsp;</p></div>
<div class"row"><p>&nbsp;</p></div>
<div class"row"><p>&nbsp;</p></div>
<div class"row"><p>&nbsp;</p></div>
