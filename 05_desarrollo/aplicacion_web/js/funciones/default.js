/************************************
 * Carga de valores por default, para manipularlos desde
 * el inicio*/
$().ready(function(){
    inicializador=0;
	
});

/************************************
 * Función para mostrar texto parpadeante
 * con la finalidad que sea leido
 * @Param N/A*/

function importante(){
inicializador++;
if(inicializador==1){ $(".imp").css("display", "none");}
if(inicializador==2){inicializador=0; $(".imp").css("display", "inline");}
setTimeout("importante()",600);
}

function lanzarFancybox(texto){
	
	$.fancybox({
		content: '<p>&nbsp;</p><center><b>' + texto + '</b></center>',
		maxWidth	: 900,
		maxHeight	: 800,
		fitToView	: false,
		width	: '90%',
		height	: '55%',
		autoSize	: false,
		closeClick: false,
		openEffect: 'none',
		closeEffect: 'elastic'
    });
	setTimeout("$.fancybox.close()",3000);
	
}

function registrarUsuarioAdmin(){
     
	if($('input#nombre').val() == ""){
          $("input#nombre").css("background",colorObligatorio);

          $("input#nombre").focus();
          return false;
     }
     
     if($('input#email').val() == ""){
          $("input#email").css("background",colorObligatorio);
          $("input#email").focus();
          return false;
     }
     
     if($('select#perfilId').val() == "0"){
          $("#mensajePerfil").html("<div class=\"alert alert-danger\"> * Selecciona el perfil que tendrá el usuario</div>");
		return false;
     }
     
     $.ajax({
          type: "POST",
          url:  "ajax_jquery/ajax_registrarUsuario.php",
          dataType: "json",
          data: "nombre=" + $("input#nombre").val() + "&perfilId=" + $("select#perfilId").val() + "&email=" + $("input#email").val(),
          success: function (mensaje){
			
			$.fancybox({
				type: 'iframe',
				href: 'ajax_fancybox/ajax_mostrarDatosDelUsuarioRegistrados.php?nombre=' + mensaje.nombre + '&usuario=' + mensaje.usuario + '&password=' + mensaje.password,
				maxWidth	: 900,
				maxHeight	: 800,
				fitToView	: false,
				width	: '90%',
				height	: '90%',
				autoSize	: false,
				closeClick: false,
				openEffect: 'none',
				closeEffect: 'elastic',
		  
				handleOversize: "drag",
				displayNav: false,
				enableKeys: false,
				modal: true,
		  
				afterClose : function(){
					
					$('input[type=text]').val('');
					$('select#perfilId').val('0');
					
				}
			});
               
          }
     });
     
}


/************************************
 * Función para mostrar texto parpadeante
 * con la finalidad que sea leido
 * @Param elemento ---> nombre del elemento que alque se le mostrara el mensaje Info
 * @Param texto --->mensaje a mostrar
 */ 
function msjInfo(elemento, texto){
	$("#" + elemento).html('<div class="alert alert-info text-center"><b>' + texto + '.</b></div>');
	setTimeout("ocultar(" + elemento + ")", 2000);
}

function ocultar(elemento){
	$(elemento).html('');
}


function mostrarFormularioRecuperarPass(tipoRecuperacion){

     $("#mostrarCurpRecuperarPass").show('slow');
     
     if(tipoRecuperacion == 'd'){
     
          $("#perfilIdRecuperarPass").val("6");
     
     }else if(tipoRecuperacion == 'e'){
     
          $("#perfilIdRecuperarPass").val("");
     
     }

}

var colorObligatorio = "#72B8D3";

function verificarEmail(){
     if($("input#usuario").val() == ""){
          $("input#usuario").css("background",colorObligatorio);
          $("input#usuario").focus();
          return false;
     }
     
     $("#botonRecuperarPassword").html('<div style="background: url("imgs/fancybox_overlay.png") repeat;width:50px;height:50px"><img src="imgs/loading_general.gif" /></div>');
}

function clearScreenErrors(control){
     id = control.attr('id');
     $("#e_" + id).text('');
}

function clearElement(control){
     $("#" + control.attr('id')).css({"background-color":"#FFF"})
}

function validarCorreo(email){

	var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

	if (caract.test(email) == false){
		
		return false;
		
	}
}

function validaAceptacionPoliticas(){
	
	var aceptado = $("input[name='acepto']:checked").val();
	
	if(aceptado != 's'){
		$("#e_acepto").html("<div class=\"alert alert-danger\">* Debes aceptar los términos descritos en tu carta de aceptación</div>");
	          return false;
	}
	
}
