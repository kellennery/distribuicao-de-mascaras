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
			<h2>Apresenta��o</h2>
			<div class="description">
				<p class="p_text">O II Semin�rio Anual Cient�fico e Tecnol�gico em
					Imunobiol�gicos acontece de 28 a 30 de maio de 2014, no Audit�rio
					do Museu da Vida, localizado no campus da Fiocruz, Rio de Janeiro.
					Esta edi��o acontece ap�s a bem sucedida estreia em 2013, que
					contou com cerca de 350 participantes e 85 trabalhos inscritos.</p>
				<p class="p_text">
					<br /> O evento visa incentivar e motivar pesquisadores de
					institui��es nacionais e internacionais, em especial os da Fiocruz
					e de Bio-Manguinhos, para a inova��o e o desenvolvimento
					tecnol�gico de vacinas, reativos para diagn�stico laboratorial e
					biof�rmacos. Estimula a inova��o com novos espa�os e oportunidades
					para jovens talentos e para a intera��o entre profissionais de
					�reas afins.


				</p>
				<p class="p_text">
					<br /> Com mais esta iniciativa, Bio-Manguinhos mant�m sua
					trajet�ria de criar condi��es prop�cias ao aperfei�oamento e
					qualifica��o profissional nessas �reas de atua��o, estimulando
					permanentemente novas abordagens, processos e tecnologias, al�m de
					identificar novos talentos e favorecer a participa��o de novos
					pesquisadores oriundos de outras institui��es do pa�s e do
					exterior.


				</p>
				<p class="p_text">
					<br /> Ao reunir profissionais da Fiocruz e de entidades de
					refer�ncia, ensino, pesquisa � al�m do Governo � o II Semin�rio
					Anual Cient�fico e Tecnol�gico em Imunobiol�gicos favorece a
					sinergia pela consolida��o de redes colaborativas de pesquisa
					cient�fica e tecnol�gica, nos planos nacional e internacional.
					Participe!

				</p>

			</div>
			<div class="cleardiv"></div>
			<!-- MODULO CONTEUDO - FINAL *** //-->
		</div>
	</div>
<?php include("rodape.php"); ?>
</body>
</html>