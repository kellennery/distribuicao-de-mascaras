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
include ("quadro_menu_vertical_OLD1.php");

?>
    <div id="posts" class="post">
			<h2>Crit�rios - Premia��o dos P�steres</h2>
			<div class="description">
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;
					Haver� uma comiss�o independente, n�o vinculada � Fiocruz, que
					avaliar� os p�steres para premia��o. Todos os p�steres apresentados
					s�o candidatos � premia��o, independentemente de sua sele��o para
					apresenta��o oral.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					S�o crit�rios para a premia��o:
				</p>
				<p class="p_text_margin">
					<br />I - Que a pesquisa tenha sido desenvolvida em territ�rio
					nacional.
				</p>
				<p class="p_text_margin">
					<br />II - A qualidade do resumo e do p�ster apresentado.
				</p>
				<p class="p_text_margin">
					<br />III - Que o trabalho seja in�dito, que n�o tenha sido
					apresentado ou publicado e tenha afinidade com os temas abordados
					no Semin�rio.
				</p>
				<p class="p_text_margin">
					<br />IV - A import�ncia do trabalho para o desenvolvimento
					cientifico, tecnol�gico, produ��o, garantia da qualidade, gest�o e
					regula��o, na �rea de imunobiol�gicos.
				</p>
				<p class="p_text_margin">
					<br />V - A import�ncia do trabalho para a sa�de publica
					brasileira.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					As quest�es e duvidas relativas � submiss�o de resumos e
					apresenta��o de p�steres ser�o decididas pela Comiss�o Cientifica
					do Semin�rio, que procurar� atender as solicita��es de forma
					criteriosa.
				</p>
				<p class="p_text">
					<br /> <a href="controller.php?modulo=criterios-inscricao">Inscri��o
						no Semin�rio</a> &nbsp;&nbsp; <input type="image"
						src="images/next.png" /> &nbsp;&nbsp; <a
						href="controller.php?modulo=criterios-selecao-resumos">Sele��o de
						Resumos</a>
				</p>
			</div>
			<div class="cleardiv"></div>
		</div>
	</div>
<?php include("rodape.php"); ?>
</body>
</html>