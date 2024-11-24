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
	<?php //include("quadro_mensagem.php"); ?>
	<!-- MODULO CONTEUDO - INICIO *** //-->
			<h2>Institucional</h2>
			<div class="description">
				<p class="p_text">
					<strong> Funda��o Oswaldo Cruz (Fiocruz)</strong><br /> � um �rg�o
					vinculado ao Minist�rio da Sa�de e com papel central no Sistema
					�nico de Sa�de (SUS). A Fiocruz tem uma atua��o diversificada �
					estudos cl�nicos, epidemiol�gicos e em ci�ncias biol�gicas, humanas
					e sociais; expedi��es cient�ficas; forma��o de recursos humanos do
					n�vel t�cnico ao doutorado; presta��o de servi�os hospitalares,
					ambulatoriais e de vigil�ncia sanit�ria de refer�ncia; e fabrica��o
					de medicamentos, vacinas e outros insumos estrat�gicos, al�m dos
					subs�dios �s pol�ticas p�blicas. Mant�m centros de refer�ncia para
					diversas doen�as e temas do campo da sa�de p�blica, reconhecidos
					por entidades como a Organiza��o Mundial de Sa�de (OMS). Est�
					presente em dez dos estados brasileiros, possuindo fora do Rio de
					Janeiro seis unidades final�sticas, nas cidades de Belo Horizonte,
					Curitiba, Manaus, Recife e Salvador, al�m de representa��o em
					Bras�lia. Como parte do projeto de expans�o nacional, em aten��o �s
					pol�ticas de desconcentra��o da pesquisa e forma��o de recursos
					humanos, promovidas pelo Governo Federal, est�o em estrutura��o
					representa��es da Funda��o nos estados do Cear�, Rond�nia, Mato
					Grosso de Sul e Piau�.

				</p>
				<p class="p_text">
					<br /> <strong>Bio-Manguinhos/Fiocruz</strong><br /> O Instituto de
					Tecnologia em Imunobiol�gicos (Bio-Manguinhos) � a unidade da
					Fiocruz respons�vel pelo desenvolvimento tecnol�gico e pela
					produ��o de vacinas, reativos para diagn�stico e biof�rmacos. Sua
					miss�o � atender prioritariamente �s demandas da sa�de p�blica
					nacional. Em 2013, at� novembro, mais de 92 milh�es de doses de
					vacinas foram fornecidas para o PNI e tamb�m para organismos
					internacionais como a Organiza��o Mundial da Sa�de (OMS),
					Organiza��o Pan-Americana da Sa�de (OPAS) e o Fundo das Na��es
					Unidas para a Inf�ncia (Unicef).

				</p>
			</div>
			<div class="cleardiv"></div>
			<!-- MODULO CONTEUDO - FINAL *** //-->
		</div>
	</div>
<?php include("rodape.php"); ?>
</body>
</html>