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
	<title>Generador de listas de Filmmania</title><center>
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
						<a href="http://listas.filmmania.es"><img src="http://www.filmmania.es/header/rotator.php" alt="Foro" /></a>	
					</td>
					<td align="right"></td>
				</tr>
			</table>
		<br class="clear" />
	</div></div>


			<?php
				 // Definimos la función cURL
			    function curl($url) {
			        $ch = curl_init($url); // Inicia sesión cURL
			        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // Configura cURL para devolver el resultado como cadena
			        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Configura cURL para que no verifique el peer del certificado dado que nuestra URL utiliza el protocolo HTTPS
			        $info = curl_exec($ch); // Establece una sesión cURL y asigna la información a la variable $info
			        curl_close($ch); // Cierra sesión cURL
			        return $info; // Devuelve la información de la función
			    }

			    $pos = 1;
				foreach ($_REQUEST as $key => $value) {




				    $sitioweb = curl($value);  // Ejecuta la función curl escrapeando el sitio web https://devcode.la and regresa el valor a la variable $sitioweb

					preg_match_all('/<span itemprop="name">(.*)<\/span>/i', $sitioweb, $matches1);
					$titulo = trim($matches1[1][0]);
					$matches1 = array();

					preg_match_all('/<span itemprop="name">(.*)<\/span><\/a>/i', $sitioweb, $matches1);
					$director = trim($matches1[1][0]);
					$matches1 = array();

					preg_match_all('/<dd itemprop="datePublished">(.*)<\/dd>/i', $sitioweb, $matches1);
					$anno = trim($matches1[1][0]);
					$matches1 = array();

					preg_match_all('/<dd><span id="country-img"><img src="(.*)" alt="/i', $sitioweb, $matches1);
					$url_bandera = "https://www.filmaffinity.com" . trim($matches1[1][0]);
					$matches1 = array();

					if($pos < 10){
						$resultado .= "0".$pos." ~ ".$titulo." ~ ".$director." ~ ".$anno." [img]".$url_bandera."[/img]<br>";
					}else{
						$resultado .= $pos." ~ ".$titulo." ~ ".$director." ~ ".$anno." [img]".$url_bandera."[/img]<br>";
					}
					$pos++;

				}

				$resultado = utf8_decode($resultado);


			

			?>

			<div class="codeheader"><?=utf8_decode("Código")?>: <a href="javascript:void(0);" onclick="return smfSelectText(this);" class="codeoperation">[Seleccionar]</a></div><pre style="margin: 0; padding: 0;"><code class="bbc_code"><?=$resultado?><br /></code></pre><br />


			<br><br>
		</center>
		</div>




</div>


</html> 
