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
			<h2>Crit�rios para Inscri��o no evento</h2>
			<div class="description">
				<p class="p_text">Ser profissional envolvido na �rea de sa�de,
					pesquisador e/ou estudante de p�s-gradua��o proveniente da�Fiocruz.


				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					Ser profissional envolvido na �rea de sa�de, pesquisador e/ou
					estudante de p�s-gradua��o de institui��es universit�rias, de
					pesquisa, de desenvolvimento tecnol�gico e de produ��o de
					imunobiol�gicos.


				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					A aceita��o levar� em conta a disponibilidade de vagas, com
					prioridade aos que tiverem trabalhos aprovados e aos profissionais
					de Bio-Manguinhos e da Fiocruz.


				</p>
				<p class="p_text">
					<br /> <input type="image" class="image_p" src="images/next.png" />&nbsp;
					D�vidas sobre as inscri��es ser�o decididas pela Comiss�o
					Organizadora do semin�rio, que procurar� atender as solicita��es da
					maneira mais abrangente poss�vel.


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