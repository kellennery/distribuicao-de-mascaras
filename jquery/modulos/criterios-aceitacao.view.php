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
			<h2>Crit�rios para aceita��o de resumos</h2>
			<div class="description">
				<p class="p_text">Somente poder�o ser apresentados os p�steres se os
					resumos respectivos forem aprovados pela Comiss�o Cient�fica. S�o
					crit�rios para aprova��o dos resumos:</p>

				<div class="wrap-rounded_corners">
					<div class="top_corners">
						<div></div>
					</div>
					<p class="p_text">
						<input type="image" class="image_p" src="images/next.png" />&nbsp;<strong>Apenas
							para colaboradores de Bio-Manguinhos:</strong><br /> Aprova��o
						pr�via pelas seguintes inst�ncias: chefia imediata, gerente de
						departamento, vice-diretoria e NIT (N�cleo de Inova��o
						Tecnol�gica). Esta aprova��o deve ser feita antes dos trabalhos
						serem submetidos � Comiss�o Cient�fica.

					</p>
					<div class="bottom_corners"></div>
				</div>
				<!-- /wrap-rounded_corners -->

				<p class="p_text">
					<input type="image" class="image_p" src="images/next.png" />&nbsp;
					Atendimento dos requisitos e formata��o exigidos para confec��o dos
					resumos;


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
					A import�ncia do trabalho para a sa�de brasileira.



				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					As quest�es e d�vidas relativas � submiss�o de resumos e
					apresenta��o de p�steres ser�o decididos pela Comiss�o Cient�fica
					do Semin�rio, que procurar� atender as solicita��es de forma
					criteriosa.
				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					As decis�es da Comiss�o Cient�fica sobre aceita��o dos resumos
					ser�o soberanas e irrecorr�veis.

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