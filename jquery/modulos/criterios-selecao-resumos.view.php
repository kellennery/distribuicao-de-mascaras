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
			<h2>Crit�rios - Sele��o de Resumos</h2>
			<div class="description">
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />
					Somente poder�o ser apresentados os p�steres, se os resumos
					respectivos forem aprovados pela Comiss�o Cientifica.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					S�o crit�rios para aprova��o dos resumos:
				</p>
				<p class="p_text_margin">
					<br /> I - Atendimento dos requisitos e formata��o exigidos para
					confec��o dos resumos ver <a
						href="controller.php?modulo=como-fazer">Como fazer Resumo?</a>.
				</p>
				<p class="p_text_margin">
					<br /> II - Que o trabalho seja in�dito, que n�o tenha sido
					apresentado ou publicado, e tenha afinidade com os temas abordados
					no Semin�rio.
				</p>
				<p class="p_text_margin">
					<br /> III - A import�ncia do trabalho para o desenvolvimento
					cientifico, tecnol�gico, produ��o, garantia da qualidade, gest�o e
					regula��o, na �rea de imunobiol�gicos.
				</p>
				<p class="p_text_margin">
					<br /> IV - A import�ncia do trabalho para a sa�de publica
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
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					Os membros da Comiss�o Cient�fica estar�o impedidos de avaliarem
					seus pr�prios trabalhos.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />
					Se houver um numero de p�steres aceitos acima da capacidade de
					apresenta��o e exposi��o, ainda sim, os mesmos ser�o publicados.
				</p>
				<p class="p_text">
					<br /> <a href="controller.php?modulo=criterios-inscricao">Inscri��o
						no Semin�rio</a> &nbsp;&nbsp; <input type="image"
						src="images/next.png" /> &nbsp;&nbsp; <a
						href="controller.php?modulo=criterios-premiacao-posteres">Premia��o
						dos P�steres</a><br />
				</p>
			</div>
			<div class="cleardiv"></div>
		</div>
	</div>
<?php include("rodape.php"); ?>
</body>
</html>