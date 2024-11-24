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
			<h2>Quem Somos</h2>
			<table cellspacing="5" cellpadding="5" border="0">
				<tr>
					<td valign="top">
						<div class="description">
							<!-- <input type="image" src="images/comissao.jpg" /> -->
							<p class="p_text">
								<strong><u>Presidente de Honra</u></strong><br /> Paulo Ernani
								Gadelha Vieira<br />
								<br /> <strong><u>Coordenador Geral</u></strong><br /> Artur
								Roberto Couto<br />
								<br /> <strong><u>Coordena��o Cient�fica</u></strong><br />
								Akira Homma e Reinaldo Martins<br />
								<br /> <strong><u>Comiss�o Executiva</u></strong><br />
								Cristiane Frensch Pereira (Coordena��o)<br /> Andrea Good Couto<br />
								Isabella Lira Figueiredo<br /> Maria de Lourdes Sousa Maia<br />
								Renata Ribeiro G�mez de Souza<br />
								<br /> <strong><u>Secretaria Executiva</u></strong><br /> Cassia
								Machado<br /> Patricia Pedroso Porto<br />
								<br />


							</p>
						</div>
						<br />

					</td>
					<td valign="top">
						<div class="description">
							<!-- <input type="image" src="images/comissao.jpg" /> -->
							<p class="p_text">
								<strong><u>Comiss�o Cient�fica</u></strong><br /> Am�lcar Tanuri<br />
								Antonio de P�dua Barbosa<br /> Antonio Gomes Pinto<br />
								Cristina de Albuquerque Possas<br /> Elaine Maria de Faria Teles<br />
								Elba Regina Sampaio de Lemos<br /> Elena Cristina Caride Campos<br />
								Elezer Monte Blanco<br /> Ellen Jessouroun<br /> Jos� Antonio
								Pinto de S� Ferreira<br /> Jos� Godinho da Silva Junior<br />
								Jos� Proc�pio Senna<br /> Marco Alberto Medeiros<br /> Marcos da
								Silva Freire<br /> Sheila Farage<br />
								<br /> <strong><u>Assessoria de Comunica��o</u></strong><br />
								Renata Ribeiro (Coordena��o)<br /> Alessandra Lopes<br />
								Bernardo Portella<br /> Danielle dos Santos<br /> Danielle
								Guedes<br /> Denyse Oliveira<br /> Gabriella Ponte<br /> Isabela
								Pimentel<br /> L�via Maldonado<br /> Paulo Schueler<br />
								Rodrigo Pereira<br /> Talita Wodtke<br />
								<br /> <strong><u>Ditin</u></strong><br /> Marcelo Correa de
								Castro<br /> Rodolpho Silva de Paula<br />

							</p>
						</div>

					</td>
				</tr>

			</table>
			<div class="cleardiv"></div>
		</div>
	</div>
<?php include("rodape.php"); ?>
</body>
</html>