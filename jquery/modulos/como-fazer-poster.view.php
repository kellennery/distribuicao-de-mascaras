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
			<!-- MODULO CONTEUDO - INICIO *** //-->
			<h2>Como fazer - P�ster</h2>
			<div class="cleardiv"></div>
			<div class="description">
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;
					O p�ster apresentado dever� ser in�dito, n�o tendo sido apresentado
					em congresso anterior.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					O tamanho do p�ster dever� ser 90 cm X 120 cm (largura x altura) �
					formato retrato.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					O p�ster � um recurso visual. Por isso dever� ser confeccionado
					utilizando-se um tamanho de fonte que permita a leitura do conte�do
					a alguma dist�ncia (2 metros, por exemplo).
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					As fontes do t�tulo poder�o ser: Arial, Calibri, ou Avant Garde.
					Tamanho: a partir do 50.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					Para o texto, � recomend�vel que a letra seja Times New Roman.
					Tamanho: 30.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					O fundo do p�ster se for branco, as letras poder�o ser mais
					escuras.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					O fundo colorido, propicia a letra branca para que o contraste seja
					maior.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					� recomend�vel nunca usar fotos ao fundo para n�o dificultar a
					leitura (marca-d�gua).
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					O texto do p�ster dever� ser lido facilmente. Por essa raz�o, n�o �
					aconselh�vel colocar um texto corrido. As informa��es pontuais
					acerca da pesquisa relatada causam um impacto maior e se tornam
					mais atrativas para a leitura.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					O p�ster dever� ser organizado da seguinte maneira:<br />
					<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T�tulo no topo<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nome e institui��o do(s)
					autor(es) logo abaixo do t�tulo<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A seguir: Introdu��o,
					objetivos, metodologia, resultados e conclus�es
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					Os apresentadores poder�o fornecer aos participantes, c�pias de
					tamanho reduzido do p�ster que ser� apresentado, como um handout.
					Nesse caso, os apresentadores devem trazer suas c�pias j� prontas.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					Cada participante aprovado ir� receber um e-mail com a data para
					exposi��o do trabalho. (entre os dias 12, 13 e 14 de agosto.)
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					No hor�rio previsto para visita aos p�steres o apresentador e
					coautores dever�o estar presentes para esclarecimentos.
				</p>
				<p class="p_text">
					<br /> <a href="controller.php?modulo=como-fazer-resumo">Como fazer
						Resumo?</a><br />
				</p>
			</div>
			<div class="cleardiv"></div>
			<!-- MODULO CONTEUDO - FINAL *** //-->
		</div>
	</div>
<?php include("rodape.php"); ?>
</body>
</html>