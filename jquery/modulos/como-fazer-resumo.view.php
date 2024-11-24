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
			<h2>Como fazer - Resumo</h2>
			<div class="cleardiv"></div>
			<div class="description">
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;
					O resumo dever� conter o padr�o: <strong>Objetivo, Metodologia,
						Resultado e Conclus�o.</strong>
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					N�o ser� aceito a entrega do resumo via fax, correio, e-mail ou
					carta.
					<!--O �nico modo para submeter o resumo 
							� clicando no menu <a href="controller.php?modulo=enviar-resumo">Enviar resumo</a>.  -->
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					O t�tulo dever� conter at� 20 palavras e ser digitado em caixa
					alta, (Times New Roman - tamanho 14) centralizado, descrevendo
					concisamente a ess�ncia do assunto.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					O resumo � um texto de no m�ximo 450 palavras (sem contar t�tulo,
					autores e institui��o).
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					A fonte do corpo do texto dever� ser Times New Roman tamanho 12.
					Cor da fonte: preto.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					Usar espa�amento simples, margem de 2,5 cm � direita e esquerda e
					2,0 cm superior e inferior.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					O resumo poder� ser digitado em Ingl�s ou Portugu�s.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					O resumo N�O poder� conter figuras, gr�ficos ou tabelas.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					A forma do resumo � retrato e n�o poder� ser paisagem.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					Os nomes dos autores devem estar escritos por extenso em caixa
					baixa. (Ex: Jose de Souza Alves), institui��o e texto do resumo.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					O nome do autor principal dever� vir, em primeiro lugar e o nome do
					apresentador dever� estar sublinhado.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					Autores: nome por extenso (inserir no m�ximo 7 autores), n�o
					colocar o t�tulo dos autores: Ex: Doutor, Professor....
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					O apresentador � o respons�vel por fazer a apresenta��o oral no dia
					do Semin�rio, caso seja selecionado. (plen�ria)
				</p>
				<!--
					<p class="p_text"><br />
					  <input type="image" class="image_p" src="images/next.png" />&nbsp;    
					  O nome do autor principal, em primeiro lugar e o nome do apresentador dever� vir sinalizado com um asterisco logo ap�s. 
					  Fornecer o e-mail do apresentador para contato na ficha de inscri��o.
					</p>
		-->
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />
					<a href="controller.php?modulo=modelo-resumo">Veja um modelo de
						Resumo</a><br />
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					A institui��o de ensino dever� ser mencionada ap�s o nome do
					autor/apresentador atrav�s de um n�mero. Logo em seguida, o numero
					dever� estar com o nome da institui��o correspondente.
				</p>
				<p class="p_text">
					<br /> <a href="controller.php?modulo=como-fazer-poster">Como fazer
						P�ster?</a>
				</p>
			</div>
			<div class="cleardiv"></div>
		</div>
	</div>
<?php include("rodape.php"); ?>
</body>
</html>