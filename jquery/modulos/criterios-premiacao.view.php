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
			<h2>Crit�rios para premia��o dos p�steres</h2>
			<div class="description">
				<p class="p_text">Haver� uma Comiss�o de Premia��o Independente,
					composta por pesquisadores de reconhecida excel�ncia, n�o vinculada
					� Fiocruz, que avaliar� os p�steres para premia��o.</p>
				<p class="p_text">
					<br /> Todos os p�steres apresentados s�o candidatos � premia��o,
					independentemente de sua sele��o para apresenta��o oral. <br />S�o
					crit�rios para a premia��o:
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					Que a pesquisa tenha sido desenvolvida em territ�rio nacional;
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					A qualidade do resumo e do p�ster apresentado;
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					Que o trabalho n�o tenha sido p�blicado em revista ou anais de
					congresso e tenha afinidade com os temas abordados no Semin�rio;
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					A import�ncia do trabalho para o desenvolvimento cient�fico,
					tecnol�gico, produ��o, garantia da qualidade, gest�o e regula��o,
					na �rea de imunobiol�gicos;

				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					A import�ncia do trabalho para a sa�de p�blica brasileira.

				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					As decis�es da Comiss�o de Premia��o Independente ser�o soberanas e
					irrecorr�veis.

				</p>

				<!--   <p class="p_text"><br />
			<a href="controller.php?modulo=criterios-selecao-resumos">Sele��o de Resumos</a>
			&nbsp;&nbsp;
			<input type="image" src="images/next.png" />
			&nbsp;&nbsp;   
			<a href="controller.php?modulo=criterios-premiacao-posteres">Premia��o dos P�steres</a><br />
		 </p >-->
			</div>
			<div class="cleardiv"></div>
		</div>
	</div>
<?php include("rodape.php"); ?>
</body>
</html>