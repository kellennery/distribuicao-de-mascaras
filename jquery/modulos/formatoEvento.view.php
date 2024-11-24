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
</head>
<body>
<?php include("cabecalho.php"); ?>
<div id="content">
<?php 
// include("quadro_menu_vertical.php");
include ("quadro_menu_vertical.php");

?>
    <div id="posts" class="post">
	<?php //include("quadro_mensagem.php"); ?>
	<!-- MODULO CONTEUDO - INICIO *** //-->
			<h2>Formato do evento</h2>
			<div class="description">
				<p class="p_text">O evento destaca apresenta��o de p�steres e mesas
					redondas,�com representantes da Fiocruz, do Minist�rio da Sa�de e
					institui��es de destaque no cen�rio biofarmac�utico, ao longo de
					tr�s dias, como em 2013.</p>
				<p class="p_text">
					<br /> Para aumentar a participa��o, a Comiss�o Cient�fica
					selecionar� 24 p�steres para apresenta��o oral � seis a mais dos
					que foram apresentados em 2013.
				</p>
				<p class="p_text">
					<br /> Uma Comiss�o de Premia��o Independente selecionar� os tr�s
					melhores p�steres para os pr�mios Oswaldo Cruz (1� lugar); Carlos
					Chagas (2� lugar) e Alcides Godoy (3� lugar). Al�m desses,�outros
					tr�s pr�mios s�o oferecidos para o melhor trabalho de Jovem Talento
					Cient�fico (at� 26 anos de idade): Pr�mio Henrique de Azevedo
					Penna, Pr�mio Evandro Chagas e Pr�mio S�rgio� Arouca. Em 2013,
					apenas 1 trabalho foi premiado nesta categoria.
				</p>
				<p class="p_text">
					<br /> Os resumos de todos os trabalhos aprovados para exposi��o
					ser�o distribu�dos na abertura do evento. As publica��es n�o ser�o
					revisadas, sendo publicadas exatamente como apresentadas na p�gina
					do semin�rio. O primeiro autor � o respons�vel legal por todo o seu
					conte�do (incluindo dados da pesquisa, nomes e institui��es dos
					autores e demais informa��es). A comiss�o cient�fica entender� que
					os demais participantes (coautores) concordam com o mesmo.
				</p>
				<p class="p_text">
					<br /> Os autores dos trabalhos aprovados e apresentados receber�o
					certificados de apresenta��o no semin�rio.

				</p>

			</div>
			<div class="cleardiv"></div>
			<!-- MODULO CONTEUDO - FINAL *** //-->
		</div>
	</div>
<?php include("rodape.php"); ?>
</body>
</html>