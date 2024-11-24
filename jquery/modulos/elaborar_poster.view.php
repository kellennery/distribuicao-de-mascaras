<?php
require_once "admin/includes/global.php";
require_once "admin/includes/private.php";
require_once "admin/includes/format.php";

$TXT_BUSCA = "";
$PAG_NUMERO = 1;

getDadosModulo ();

// IsOnLine();

getDadosUsuario ();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include_once ('tags.php');
include_once ('estilos.php');
include_once ('javascripts.php');

include_once ('jquery.php');
if (file_exists ( 'modulos/' . $MOD_CLASSE . '.js.php' ))
	include_once ('modulos/' . $MOD_CLASSE . '.js.php');
?>
<link href="shadowbox_js/shadowbox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="shadowbox_js/jquery.js"></script>
<script type="text/javascript" src="shadowbox_js/shadowbox.js"></script>
<script type="text/javascript">
 Shadowbox.init({
 language: 'pt',
 player: ['img', 'html', 'swf','php','asp']
 });
</script>
</head>
<body>
<?php include("cabecalho.php"); ?>
<div id="content">
<?php
// include("quadro_menu_vertical.php");
include ("quadro_menu_vertical.php");

?>
        <div id="posts" class="post">
			<h2>Como elaborar o p�ster</h2>
			<div class="description">
				<p class="p_text">
					<ul>
						<li class="p_text">O �nico tamanho permitido � de 90cm x 120cm
							(largura x altura) � formato retrato.</li>
						<br />
						<li class="p_text">O p�ster � um recurso visual. Por isso, dever�
							ser confeccionado utilizando-se um tamanho de fonte que permita a
							leitura do conte�do a alguma dist�ncia (2 metros, por exemplo)</li>
						<br />
						<li class="p_text">As fontes do t�tulo poder�o ser: Arial,
							Calibri, ou Avant Garde. Tamanho: a partir do 50.</li>
						<br />
						<li class="p_text">Para o texto, � recomend�vel que a letra seja
							Times New Roman. Tamanho: 30.</li>
						<br />
						<li class="p_text">O fundo do p�ster dever� ser branco.</li>
						<br />
						<li class="p_text">N�o � recomend�vel utilizar fotos ao fundo,
							para n�o dificultar a leitura.</li>
						<br />
						<li class="p_text">O texto do p�ster dever� ser lido rapidamente.
							Por essa raz�o, n�o � aconselh�vel colocar um texto corrido. As
							informa��es pontuais acerca da pesquisa relatada causam um
							impacto maior e se tornam mais atrativas para a leitura.</li>
						<br />
						<li class="p_text">O p�ster dever� ser organizado da seguinte
							maneira:<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
							type="image" class="image_p" src="images/next.png" /> T�tulo no
							topo<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
							type="image" class="image_p" src="images/next.png" /> Nome e
							institui��o do(s) autor(es) logo abaixo do t�tulo<br />
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
							type="image" class="image_p" src="images/next.png" /> A seguir:
							Introdu��o, Objetivos, Metodologia, Resultados e Conclus�o<br />
						<br />
						</li>
						<li class="p_text">Os apresentadores poder�o fornecer aos
							participantes c�pias de tamanho reduzido do p�ster, que ser�
							apresentado, como um handout. Nesse caso, os apresentadores devem
							trazer suas c�pias j� prontas.</li>
						<br />
						<li class="p_text">Cada participante aprovado ir� receber um
							e-mail com a data e hor�rio para exposi��o do trabalho.</li>
						<br />
						<li class="p_text">O apresentador que tiver o seu p�ster
							selecionado, dever� estar, no dia e hor�rio marcados, junto de
							seu p�ster, � disposi��o da Comiss�o Cient�fica e dos
							interessados durante 1 hora (entre os dias 28 e 30 de maio).</li>
						<br />
					</ul>

				</p>

			</div>
			<div class="cleardiv"></div>
		</div>
	</div>
<?php include("rodape.php"); ?>
</body>
</html>