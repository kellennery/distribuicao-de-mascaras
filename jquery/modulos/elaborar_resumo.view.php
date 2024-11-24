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
			<h2>Como elaborar o Resumo</h2>
			<div class="description">
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;N�o
					ser� aceita a inscri��o do resumo via�fax, correio, e-mail ou
					carta.
				</p>
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;O
					texto�dever� seguir o padr�o: Introdu��o, Objetivos, Metodologia,
					Resultados e Conclus�o.
				</p>
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;O
					resumo � um texto de no m�ximo 450 palavras (sem contar t�tulo,
					autores e institui��o). O sistema est� programado para rejeitar o
					resumo que exceder�a este limite.
				</p>
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;O
					t�tulo deve ser digitado em caixa baixa e negrito (Times New Roman
					- tamanho 14 ou 16), descrevendo concisamente a ess�ncia do
					assunto. � at� 20 palavras.<br />Caso o t�tulo contenha algum termo
					cient�fico, este deve estar em <i>it�lico.</i>
				</p>
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;A
					fonte�do corpo do texto dever� ser Times New Roman� tamanho 12. Cor
					da fonte: preta.
				</p>
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;Os
					nomes dos autores por extenso (ex: Jos� de Souza Alves),
					institui��o e texto do resumo dever�o estar em caixa baixa.
				</p>
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;O
					nome do autor principal dever� vir, em primeiro lugar, e o nome do
					apresentador, dever� ser identificado com asterisco (*).
				</p>
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;Fornecer
					o e-mail do apresentador para contato na ficha de inscri��o e
					abaixo do t�tulo.
				</p>
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;APRESENTADOR:�
					� o respons�vel por fazer a apresenta��o oral no dia do semin�rio
					(plen�ria).
				</p>
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;Os
					t�tulos e textos dos resumos devem estar alinhados � esquerda (n�o
					justificar).
				</p>
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;Usar
					espa�amento simples, margem de 2,5 cm � direita e esquerda e 2,0 cm
					superior e inferior.
				</p>
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;O
					resumo poder� ser digitado em ingl�s ou portugu�s.
				</p>
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;O
					resumo N�O poder� conter figuras, gr�ficos ou tabelas.
				</p>
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;Antes
					de escrever o resumo, o pesquisador dever� classific�-lo�na
					categoria correspondente conforme abaixo:
				</p>
				<p align="center"">
					<br /> <a href="images/classificacao_resumo.jpg" rel="shadowbox"><img
						src="images/classificacao_resumo.jpg" width="200" height="200"
						style="cursor: pointer; border: solid 1px #000000;" /> </a>
					<!-- Duvidas Sobre shadowbox
					http://www.escolacompleta.com/desenvolvimento/jquery/efeito-light-box-utilizando-o-plugin-shadowbox
				 -->
					<br />
				</p>
				<br /> <br />
				<p class="p_text">
					<br />
					<strong>Importante: A forma do resumo � retrato (n�o poder� ser
						paisagem).</strong>
				</p>
				<br />
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;Titulo:
					At� 20 palavras
				</p>
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;Autores:
					nome por extenso (inserir no m�ximo 7 autores, podendo
					excepcionalmente chegar at� 10, desde que justificado e aceito pela
					Comiss�o Cient�fica). N�o colocar o t�tulo dos autores: Ex: Doutor,
					Professor, entre outros.
				</p>
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;O
					nome do autor principal dever� vir em primeiro lugar e o nome do
					apresentador, sinalizado com um asterisco (*) logo ap�s.� Fornecer
					o e-mail do apresentador para contato na ficha de inscri��o.
				</p>
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;A
					institui��o dever� ser mencionada ap�s o nome�do autor, como
					exemplificado abaixo.
				</p>
				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;Ao
					submeter o resumo, o autor dever� assinalar, dentre as op��es
					propostas, em qual categoria seu trabalho�� definido: biof�rmacos,
					vacinas, kits para diagn�stico ou outros temas relacionados.
				</p>
				<p class="p_text">
					<br /> <strong class="p_text">Exemplo 1: </strong> <span
						class="p_text">Jos� Faria Gomes Pedro Moreira<sup> 1</sup>* ;
						Joaquim Silva<sup> 2</sup></span><br /> <span class="p_text">E-mail:
						jose.gomes@bio.fiocruz.br</span><br /> <span class="p_text"><sup>
							1</sup>Bio- Manguinhos� / Fiocruz </span><br /> <span
						class="p_text"><sup> 2</sup>UFRJ � Universidade� Federal� do� Rio
						de Janeiro</span><br /> <strong class="p_text">NESSE EXEMPLO,
						AUTOR E APRESENTADOR S�O A MESMA PESSOA.</strong> <br />
					<br /> <strong class="p_text">Exemplo 2: </strong><span
						class="p_text">Jos� Faria Gomes<sup> 1</sup>/Mauricio Ribeiro
						Pedrosa<sup> 1</sup>* ; Pedro Moreira<sup> 1</sup>; Joaquim Silva<sup>
							2</sup>;
					</span><br /> <span class="p_text">E-mail:
						mauricio.pedrosa@bio.fiocruz.br</span><br /> <span class="p_text"><sup>
							1</sup>Bio- Manguinhos / Fiocruz</span><br /> <span
						class="p_text"><sup> 2</sup>UFRJ � Universidade�Federal�do�Rio de
						Janeiro</span><br /> <strong class="p_text">NESSE EXEMPLO, AUTOR E
						APRESENTADOR N�O S�O A MESMA PESSOA.</strong><br />
				</p>
			</div>
			<div class="cleardiv"></div>
		</div>
	</div>
<?php include("rodape.php"); ?>
</body>
</html>