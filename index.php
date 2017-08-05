<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" type="text/css" href="http://www.filmmania.es/Themes/MinimalistAndEffective_by_SMFSimple/css/index.css?fin20" />
	<script type="text/javascript" src="http://www.filmmania.es/Themes/default/scripts/script.js?fin20"></script>
	<script type="text/javascript" src="http://www.filmmania.es/Themes/MinimalistAndEffective_by_SMFSimple/scripts/theme.js?fin20"></script>
	<script type="text/javascript"><!-- // --><![CDATA[
		var smf_theme_url = "http://www.filmmania.es/Themes/MinimalistAndEffective_by_SMFSimple";
		var smf_default_theme_url = "http://www.filmmania.es/Themes/default";
		var smf_images_url = "http://www.filmmania.es/Themes/MinimalistAndEffective_by_SMFSimple/images";
		var smf_scripturl = "http://www.filmmania.es/index.php";
		var smf_iso_case_folding = false;
		var smf_charset = "UTF-8";
		var ajax_notification_text = "Cargando...";
		var ajax_notification_cancel_text = "Cancelar";
	// ]]></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Foro - Índice" />
	<meta name="keywords" content="Foro Cine Películas Noticias Estrenos" />
	<title>APP Filmmania</title><center>
	</center> 
	<meta name="robots" content="noindex" />
	<link rel="canonical" href="http://www.filmmania.es/index.php" />
	<link rel="help" href="http://www.filmmania.es/index.php?action=help" />
	<link rel="search" href="http://www.filmmania.es/index.php?action=search" />
	<link rel="contents" href="http://www.filmmania.es/index.php" />
        <!-- twitter app card start-->
        <!-- https://dev.twitter.com/docs/cards/types/app-card -->
        <meta name="twitter:card" content="app">
    
        <meta name="twitter:app:id:iphone" content="307880732">
        <meta name="twitter:app:url:iphone" content="tapatalk://">
        <meta name="twitter:app:id:ipad" content="307880732">
        <meta name="twitter:app:url:ipad" content="tapatalk://">
        
        <meta name="twitter:app:id:googleplay" content="com.quoord.tapatalkpro.activity">
        <meta name="twitter:app:url:googleplay" content="tapatalk://www.filmmania.es/?user_id=142&location=index">
        
    <!-- twitter app card -->
    <link rel="stylesheet" type="text/css" href="http://www.filmmania.es/Themes/default/css/LikePosts.css" />
	<link rel="stylesheet" type="text/css" id="spoiler_css" href="http://www.filmmania.es/Themes/default/css/spoiler.css" />
	<script type="text/javascript"><!-- // --><![CDATA[
		var smf_avatarMaxWidth = 150;
		var smf_avatarMaxHeight = 200;
	window.addEventListener("load", smf_avatarResize, false);
	// ]]></script>
</head>
<div id="wrapper" style="width: 950px">
	
	<hr class="hr_min" />
	
	<div id="header">
		<div class="frame">
			<table width="100%">
				<tr>
					<td class="top_log">
						<a href="http://www.filmmania.es/index.php"><img src="http://www.filmmania.es/header/rotator.php" alt="Foro" /></a>	
					</td>
					<td align="right"></td>
				</tr>
			</table>
		<script type="text/javascript"><!-- // --><![CDATA[

			var campos = 1;
			var posicion = 1;

			function agregarCampo(){
			  campos = campos + 1;
			  var NvoCampo= document.createElement("div");
			  NvoCampo.id= "divcampo_"+(campos);
			  NvoCampo.innerHTML= 
			     "<table>" +
			     "   <tr>" +
			     "     <td nowrap='nowrap'>" + posicion + ".- " +
			     "        <input type='text' size='50' name='articu_" + campos + 
			                   "' id='articu_" + campos + "'>" +
			     "     </td>" +
			     //"     <td nowrap='nowrap'>" +
			     //"        <a href='JavaScript:quitarCampo(" + campos +");'> Quitar </a>" +
			     //"     </td>" +
			     "   </tr>" +
			     "</table>";


			     posicion = posicion +1;
			   var contenedor= document.getElementById("contenedorcampos");
			   contenedor.appendChild(NvoCampo);
			}
			function quitarCampo(iddiv){
			  var eliminar = document.getElementById("divcampo_" + iddiv);
			  var contenedor= document.getElementById("contenedorcampos");
			  posicion = posicion - 1;
			  campos = campos - 1;
			  contenedor.removeChild(eliminar);
			}
		// ]]></script>
		<br class="clear" />
	</div></div>



		<div id="boardindex_table">
			<center>

				<form id="formdinamico" name="formdinamico" action="generador.php" method="POST">
					<table border="0" width="100%">   
				      <tr>
				        <td></td>
				        <a href='JavaScript:agregarCampo();'> Agregar nuevo campo |  </a>
				        <a href='JavaScript:quitarCampo(campos);'> | Eliminar última posición </a>
				      </tr>
				   </table> 


					<div id="contenedorcampos">

				   	</div>

				   <table border="0" width="100%">   
				      <tr>
				        <td></td>
				        <a href='JavaScript:agregarCampo();'> Agregar nuevo campo |  </a>
				        <a href='JavaScript:quitarCampo(campos);'> | Eliminar última posición </a>
				      </tr>
				   </table> 

				   <br>

				   <input type='submit' value='Enviar'>

				   

				</form>


			<br><br>
		</center>
		</div>




</div>


</html>
