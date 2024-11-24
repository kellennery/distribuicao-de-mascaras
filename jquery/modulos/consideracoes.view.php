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
			<!-- MODULO CONTEUDO - INICIO *** //-->
			<h2>Considera��es finais</h2>
			<div class="description">
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;Caso
					o apresentador tenha algum impedimento para a apresenta��o oral na
					data previamente marcada pela Comiss�o Cient�fica, ele dever�
					apontar seu substituto e as formas de contato, atrav�s de e-mail.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;Bio-Manguinhos
					n�o arcar� com os custos das despesas do p�ster. Esse gasto � de
					responsabilidade do(s) autor(es) do trabalho.

				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />
					A Comiss�o Cient�fica informar� ao autor do trabalho se o mesmo foi
					aceito, recusado ou est� com pend�ncias at� o dia 16 de abril.

				</p>

				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;Para
					os resumos com pend�ncia, a ressubmiss�o � Comiss�o Cient�fica ser�
					entre os dias 17 e 27 de abril.

				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;A
					Comiss�o Cient�fica ir� receber todos os resumos e, atrav�s de uma
					sele��o, indicar� os 24 trabalhos que ser�o apresentados oralmente.

				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;Os
					trabalhos selecionados para apresenta��o oral dever�o tamb�m ser
					colocados na exposi��o de p�steres.

				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;Os
					pr�mios aos melhores trabalhos ser�o decididos pela Comiss�o de
					Premia��o Independente, conforme regulamento, e poder�o incluir
					trabalhos n�o apresentados oralmente.

				</p>

			</div>
			<div class="cleardiv"></div>
			<!-- MODULO CONTEUDO - FINAL *** //-->
		</div>
	</div>
<?php include("rodape.php"); ?>
</body>
</html>