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
<?php include("quadro_menu_vertical.php"); ?>
    <div id="posts" class="post">
			<!-- MODULO CONTEUDO - INICIO *** //-->
			<h2>Not�cias</h2>
			<p class="p_text">
				<br />
			</p>
			<p class="p_text">
				Confira as Not�cias do I Semin�rio<br />
			</p>
			<div class="div_palestrante">
				<p>
					<img class="img_palestrante" src="images/noticia-padrao.jpg"
						height="90px;" /> <span class="noticia_titulo">15/08/2013 -
						Semin�rio premia os melhores trabalhos</span><br /> O Semin�rio
					Anual Cient�fico e Tecnol�gico de Bio-Manguinhos, que aconteceu de
					12 a 14 de agosto, no audit�rio do Museu da Vida, no Campus de
					Manguinhos, foi encerrado com a premia��o dos tr�s melhores resumos
					cient�ficos apresentados, de um total de 85 avaliados por uma
					comiss�o externa composta por quatro especialistas... &nbsp;&nbsp;</br>
					<a href="noticias/15082013-sact8.pdf" TARGET="_blank">saiba mais</a>
					<img src="images/tracejado.png" alt="" />
				</p>
				<p>
					<img class="img_palestrante" src="images/noticia-padrao.jpg"
						height="90px;" /> <span class="noticia_titulo">14/08/2013 -
						Trabalhar em rede � a solu��o</span><br /> No �ltimo debate do
					Semin�rio Anual Cient�fico e Tecnol�gico de Bio-Manguinhos,
					realizado dia 14 de agosto, no Museu da Vida, o pesquisador
					categoria 1A do Conselho Nacional de Desenvolvimento Cient�fico e
					Tecnol�gico (CNPq), Mitermayer Galv�o, apresentou estudos
					realizados na popula��o de comunidades no Nordeste, enfatizando a
					rede nesta regi�o, al�m de propor a��es futuras para que a Fiocruz
					ajude a melhorar o mercado de vacinas, biof�rmacos e reativos no
					Brasil... &nbsp;&nbsp; <a href="noticias/14082013-sact7.pdf"
						TARGET="_blank">saiba mais</a> <img src="images/tracejado.png"
						alt="" />
				</p>
				<p>
					<img class="img_palestrante" src="images/noticia-padrao.jpg"
						height="90px;" /> <span class="noticia_titulo">14/08/2013 -
						Parcerias para o desenvolvimento da cadeia produtiva nacional</span><br />
					Incentivadas desde o in�cio dos anos 90 por Bio-Manguinhos, as
					Parcerias para o Desenvolvimento Produtivo (PDP) foram um dos temas
					abordados na manh� do �ltimo dia do Semin�rio Cient�fico e
					Tecnol�gico (14/08). O diretor do Instituto, Artur Roberto Couto,
					explicou como a utiliza��o do poder de compras do estado pela
					unidade foi importante para o crescimento do portf�lio de
					produtos... &nbsp;&nbsp; <a href="noticias/14082013-sact6.pdf"
						TARGET="_blank">saiba mais</a> <img src="images/tracejado.png"
						alt="" />
				</p>
				<p>
					<img class="img_palestrante" src="images/noticia-padrao.jpg"
						height="90px;" /> <span class="noticia_titulo">13/08/2013 -
						Segundo dia do semin�rio abordou desafios e perspectivas para
						reativos e biof�rmacos</span><br /> O segundo dia do Semin�rio
					Anual Cient�fico e Tecnol�gico de Bio-Manguinhos, que acontece de
					12 a 14 de agosto, no audit�rio do Museu da Vida, no Campus de
					Manguinhos, foi dedicado � discuss�o dos desafios, gargalos e
					perspectivas em desenvolvimento tecnol�gico e produ��o no Brasil de
					reativos para diagn�stico e biof�rmacos... &nbsp;&nbsp; <a
						href="noticias/13082013-sact5.pdf" TARGET="_blank">saiba mais</a>
					<img src="images/tracejado.png" alt="" />
				</p>
				<p>
					<img class="img_palestrante" src="images/noticia-padrao.jpg"
						height="90px;" /> <span class="noticia_titulo">13/08/2013 - Mais
						desenvolvimento tecnol�gico e qualifica��o profissional</span><br />
					�Bio-Manguinhos � refer�ncia nacional em produ��o e inova��o na
					�rea de biof�rmacos�. Essa foi uma das primeiras frases da
					apresenta��o do secret�rio-adjunto da Secretaria de Ci�ncia,
					Tecnologia e Insumos Estrat�gicos do Minist�rio da Sa�de, Leonardo
					Paiva, no dia 13 de agosto, no debate As perspectivas de
					desenvolvimento tecnol�gico e produ��o de biof�rmacos no Brasil...
					&nbsp;&nbsp; <a href="noticias/13082013-sact4.pdf" TARGET="_blank">saiba
						mais</a> <img src="images/tracejado.png" alt="" />
				</p>
				<p>
					<img class="img_palestrante" src="images/noticia-padrao.jpg"
						height="90px;" /> <span class="noticia_titulo">13/08/2013 - Tetra
						viral � inclu�da no calend�rio vacinal</span><br /> Durante o
					Semin�rio Anual Cient�fico Tecnol�gico, na palestra Desafios,
					gargalos e perspectivas em vacinas e vacina��es no Brasil, ocorrida
					no dia 12 de agosto, a coordenadora do Programa Nacional de
					Imuniza��es (PNI), Carla Domingues apresentou n�o s� as diversas
					a��es e conquistas do programa, como a inclus�o de novas vacinas no
					calend�rio das crian�as, como a varicela (catapora)... &nbsp;&nbsp;
					<a href="noticias/13082013-sact3.pdf" TARGET="_blank">saiba mais</a>
					<img src="images/tracejado.png" alt="" />
				</p>
				<p>
					<img class="img_palestrante" src="images/noticia-padrao.jpg"
						height="90px;" /> <span class="noticia_titulo">12/08/2013 -
						Desafios e perspectivas da vacina��o do pa�s</span><br /> Investir
					continuamente em tecnologia e pesquisa, capacitar m�o de obra e
					cumprir as demandas do Sistema �nico de Sa�de (SUS). Assim, o
					diretor de Bio-Manguinhos, Artur Couto iniciou a apresenta��o da
					primeira mesa de debates na abertura do Semin�rio Anual Cient�fico
					tecnol�gico, realizada na manh� de hoje (12/08), no audit�rio do
					Museu da Vida, no campus de Manguinhos... &nbsp;&nbsp; <a
						href="noticias/12082013-sact2.pdf" TARGET="_blank">saiba mais</a>
					<img src="images/tracejado.png" alt="" />
				</p>
				<p>
					<img class="img_palestrante" src="images/noticia-padrao.jpg"
						height="90px;" /> <span class="noticia_titulo">12/08/2013 -
						Especialistas do setor biofarmac�utico se reunir�o em Semin�rio na
						Fiocruz</span><br /> Para apresentar os atuais desafios e
					perspectivas do desenvolvimento de insumos estrat�gicos no Brasil e
					construir um ambiente favor�vel � inova��o tecnol�gica, atrav�s do
					est�mulo � pesquisa, produ��o cient�fica, troca de experi�ncias e
					conhecimentos, Bio-Manguinhos promove, de 12 a 14 de agosto, o
					Semin�rio Anual Cient�fico e Tecnol�gico... &nbsp;&nbsp; <a
						href="noticias/12082013-sact1.pdf" TARGET="_blank">saiba mais</a>
				</p>
			</div>
			<div class="cleardiv"></div>
		</div>
		<!-- MODULO CONTEUDO - FINAL *** //-->
	</div>
<?php include("rodape.php"); ?>
</body>
</html>