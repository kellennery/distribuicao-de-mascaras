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
			<div id="tabs">
				<ul>
					<li><a href="#tabs-1">Not�cias de 2014</a></li>
					<li><a href="#tabs-2">Not�cias de 2013</a></li>
					<!--  <li><a href="ajax/content2.html">Tab 2</a></li>
				    <li><a href="ajax/content3-slow.php">Tab 3 (slow)</a></li>
				    <li><a href="ajax/content4-broken.php">Tab 4 (broken)</a></li>-->
				</ul>
				<div id="tabs-1">
					<p>
						<div class="post-content-date">
							<span>06</span>jun
						</div>
						<div class="post-info">
							<span class="noticia_titulo">Bio reconhece seus pesquisadores
								dando visibilidade aos trabalhos cient�ficos</span><br /> Dos 58
							trabalhos aceitos pela Comiss�o Cient�fica do II Semin�rio
							Cient�fico e Tecnol�gico em Imunobiol�gicos, ocorrido no Museu da
							Vida de 28 a 30 de maio, 24 foram apresentados oralmente e seis,
							premiados... &nbsp;&nbsp;</br> <a
								href="noticias/2014/Bio_reconhece_seus_pesquisadores_dando_visibilidade_aos_trabalhos_cient�ficos.pdf"
								TARGET="_blank">saiba mais</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-date">
							<span>30</span>mai
						</div>
						<div class="post-info">
							<span class="noticia_titulo">Semin�rio debate diferentes
								estrat�gias para biof�rmacos</span><br /> Na manh� dessa
							sexta-feira, o II Semin�rio Anual Cient�fico e Tecnol�gico (SACT)
							de Bio-Manguinhos foi dominado pelo tema dos biof�rmacos e as
							diferentes estrat�gias que podem ser derivadas do relacionamento
							com cada paciente... &nbsp;&nbsp;</br> <a
								href="noticias/2014/diferentes-estrategias-biofarmacos.pdf"
								TARGET="_blank">saiba mais</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-date">
							<span>30</span>mai
						</div>
						<div class="post-info">
							<span class="noticia_titulo">Tema com maior n�mero de trabalhos
								selecionados, biof�rmacos � debatido na conclus�o das
								apresenta��es</span><br /> O II Semin�rio Anual Cient�fico e
							Tecnol�gico (SACT) de Bio-Manguinhos teve sua parte de
							apresenta��es orais conclu�das na tarde dessa sexta-feira, quando
							oito trabalhos foram apresentados ao p�blico... &nbsp;&nbsp;</br>
							<a href="noticias/2014/biofarmacos_debatido_apresentacoes.pdf"
								TARGET="_blank">saiba mais</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-date">
							<span>29</span>mai
						</div>
						<div class="post-info">
							<span class="noticia_titulo">Da bancada para o p�ster</span><br />
							O espa�o para apresenta��o de trabalhos no Semin�rio Cientifico e
							Tecnol�gico de Bio-Manguinhos � uma oportunidade para divulgar
							diversas pesquisas de dentro e fora do Instituto e de
							parceiros... &nbsp;&nbsp;</br> <a
								href="noticias/2014/Da_bancada_para_o_poster.pdf"
								TARGET="_blank">saiba mais</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-date">
							<span>29</span>mai
						</div>
						<div class="post-info">
							<span class="noticia_titulo">Trabalhos sobre reativos fecham
								tarde do segundo dia do II SactBio</span><br /> Iniciando as
							apresenta��es orais dos trabalhos selecionados sobre reativos
							para diagn�stico no segundo dia do II Semin�rio Anual Cient�fico
							e Tecnol�gico em Imunobiol�gicos de Bio-Manguinhos (SACT),
							Fernanda Ludoulf... &nbsp;&nbsp;</br> <a
								href="noticias/2014/Trabalhos_sobre_reativos_fecham_tarde_do_segundo_dia_do_II_SactBio.pdf"
								TARGET="_blank">saiba mais</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-date">
							<span>29</span>mai
						</div>
						<div class="post-info">
							<span class="noticia_titulo">Setores p�blico e privado discutem
								desafios dos reativos para diagn�stico</span><br /> Para debater
							os principais desafios do desenvolvimento de reativos para
							diagn�stico no pa�s, o segundo dia do II Semin�rio Anual
							Cient�fico e Tecnol�gico em Imunobiol�gicos de
							Bio-Manguinhos/Fiocruz (SACT), 29 de maio, dedicou um dia
							inteiramente ao tema... &nbsp;&nbsp;</br> <a
								href="noticias/2014/Setores_publico_e_privado_discutem_desafios_dos_reativos_para_diagnostico.pdf"
								TARGET="_blank">saiba mais</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>

					<p>
						<div class="post-content-date">
							<span>28</span>mai
						</div>
						<div class="post-info">
							<span class="noticia_titulo">Luta pela erradica��o da p�lio no
								mundo</span><br /> Abrindo a programa��o do II Semin�rio Anual
							Cient�fico e Tecnol�gico em Imunobiol�gicos de
							Bio-Manguinhos/Fiocruz (SACT), na manh� do dia 28/5...
							&nbsp;&nbsp;</br> <a
								href="noticias/2014/Luta_pela_erradicacao_na_polio_no_mundo.pdf"
								TARGET="_blank">saiba mais</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-date">
							<span>28</span>mai
						</div>
						<div class="post-info">
							<span class="noticia_titulo">Apresenta��es sobre vacinas de febre
								amarela, meningococo e rotav�rus s�o maioria no primeiro dia do
								II SACT</span><br /> Dos 58 trabalhos dos participantes do II
							Semin�rio Anual Cient�fico e Tecnol�gico em Imunobiol�gicos de
							Bio-Manguinhos/Fiocruz (SACT)... &nbsp;&nbsp;</br> <a
								href="noticias/2014/Apresentacoes_sobre_vacinas_de_febre_amarela_mening_coco_e_rotav�rus_sao_maioria_no_primeiro_dia_do_II_SACT.pdf"
								TARGET="_blank">saiba mais</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-date">
							<span>28</span>mai
						</div>
						<div class="post-info">
							<span class="noticia_titulo">Incentivando jovens a pensar em
								ci�ncia, tecnologia e inova��o</span><br /> Com jovens talentos
							em busca do reconhecimento e especialistas em temas que dominam a
							pauta da sa�de p�blica global, o II Semin�rio Anual Cient�fico e
							Tecnol�gico em Imunobiol�gicos de Bio-Manguinhos (SACT) foi
							aberto hoje (28/5)... &nbsp;&nbsp;</br> <a
								href="noticias/2014/Incentivando_jovens_a_pensar_em ci�ncia_tecnologia_e_inova��o.pdf"
								TARGET="_blank">saiba mais</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-date">
							<span>21</span>mai
						</div>
						<div class="post-info">
							<span class="noticia_titulo">II Semin�rio Cient�fico e
								Tecnol�gico de Bio-Manguinhos/Fiocruz re�ne especialistas e
								jovens talentos</span><br /> Com jovens talentos em busca do
							reconhecimento e especialistas em temas que dominam a pauta da
							sa�de p�blica global, o II Semin�rio Cient�fico e Tecnol�gico
							(SACT).... &nbsp;&nbsp; <a href="noticias/2014/bio-sact.pdf"
								TARGET="_blank">saiba mais</a>

						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
				</div>
				<div id="tabs-2">
					<p>
						<div class="post-content-date">
							<span>15</span>ago
						</div>
						<div class="post-info">
							<span class="noticia_titulo">Semin�rio premia os melhores
								trabalhos</span><br /> O Semin�rio Anual Cient�fico e
							Tecnol�gico de Bio-Manguinhos, que aconteceu de 12 a 14 de
							agosto, no audit�rio do Museu da Vida, no Campus de Manguinhos,
							foi encerrado com a premia��o dos tr�s melhores resumos
							cient�ficos apresentados, de um total de 85 avaliados por uma
							comiss�o externa composta por quatro especialistas...
							&nbsp;&nbsp;</br> <a href="noticias/15082013-sact8.pdf"
								TARGET="_blank">saiba mais</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-date">
							<span>14</span>ago
						</div>
						<div class="post-info">
							<span class="noticia_titulo">Trabalhar em rede � a solu��o</span><br />
							No �ltimo debate do Semin�rio Anual Cient�fico e Tecnol�gico de
							Bio-Manguinhos, realizado dia 14 de agosto, no Museu da Vida, o
							pesquisador categoria 1A do Conselho Nacional de Desenvolvimento
							Cient�fico e Tecnol�gico (CNPq), Mitermayer Galv�o, apresentou
							estudos realizados na popula��o de comunidades no Nordeste,
							enfatizando a rede nesta regi�o, al�m de propor a��es futuras
							para que a Fiocruz ajude a melhorar o mercado de vacinas,
							biof�rmacos e reativos no Brasil... &nbsp;&nbsp; <a
								href="noticias/14082013-sact7.pdf" TARGET="_blank">saiba mais</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-date">
							<span>14</span>ago
						</div>
						<div class="post-info">
							<span class="noticia_titulo">Parcerias para o desenvolvimento da
								cadeia produtiva nacional</span><br /> Incentivadas desde o
							in�cio dos anos 90 por Bio-Manguinhos, as Parcerias para o
							Desenvolvimento Produtivo (PDP) foram um dos temas abordados na
							manh� do �ltimo dia do Semin�rio Cient�fico e Tecnol�gico
							(14/08). O diretor do Instituto, Artur Roberto Couto, explicou
							como a utiliza��o do poder de compras do estado pela unidade foi
							importante para o crescimento do portf�lio de produtos...
							&nbsp;&nbsp; <a href="noticias/14082013-sact6.pdf"
								TARGET="_blank">saiba mais</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-date">
							<span>13</span>ago
						</div>
						<div class="post-info">
							<span class="noticia_titulo">Segundo dia do semin�rio abordou
								desafios e perspectivas para reativos e biof�rmacos</span><br />
							O segundo dia do Semin�rio Anual Cient�fico e Tecnol�gico de
							Bio-Manguinhos, que acontece de 12 a 14 de agosto, no audit�rio
							do Museu da Vida, no Campus de Manguinhos, foi dedicado �
							discuss�o dos desafios, gargalos e perspectivas em
							desenvolvimento tecnol�gico e produ��o no Brasil de reativos para
							diagn�stico e biof�rmacos... &nbsp;&nbsp; <a
								href="noticias/13082013-sact5.pdf" TARGET="_blank">saiba mais</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-date">
							<span>13</span>ago
						</div>
						<div class="post-info">
							<span class="noticia_titulo">Mais desenvolvimento tecnol�gico e
								qualifica��o profissional</span><br /> �Bio-Manguinhos �
							refer�ncia nacional em produ��o e inova��o na �rea de
							biof�rmacos�. Essa foi uma das primeiras frases da apresenta��o
							do secret�rio-adjunto da Secretaria de Ci�ncia, Tecnologia e
							Insumos Estrat�gicos do Minist�rio da Sa�de, Leonardo Paiva, no
							dia 13 de agosto, no debate As perspectivas de desenvolvimento
							tecnol�gico e produ��o de biof�rmacos no Brasil... &nbsp;&nbsp; <a
								href="noticias/13082013-sact4.pdf" TARGET="_blank">saiba mais</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>

					<p>
						<div class="post-content-date">
							<span>13</span>ago
						</div>
						<div class="post-info">
							<span class="noticia_titulo">Tetra viral � inclu�da no calend�rio
								vacinal</span><br /> Durante o Semin�rio Anual Cient�fico
							Tecnol�gico, na palestra Desafios, gargalos e perspectivas em
							vacinas e vacina��es no Brasil, ocorrida no dia 12 de agosto, a
							coordenadora do Programa Nacional de Imuniza��es (PNI), Carla
							Domingues apresentou n�o s� as diversas a��es e conquistas do
							programa, como a inclus�o de novas vacinas no calend�rio das
							crian�as, como a varicela (catapora)... &nbsp;&nbsp; <a
								href="noticias/13082013-sact3.pdf" TARGET="_blank">saiba mais</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-date">
							<span>12</span>ago
						</div>
						<div class="post-info">
							<span class="noticia_titulo">Desafios e perspectivas da vacina��o
								do pa�s</span><br /> Investir continuamente em tecnologia e
							pesquisa, capacitar m�o de obra e cumprir as demandas do Sistema
							�nico de Sa�de (SUS). Assim, o diretor de Bio-Manguinhos, Artur
							Couto iniciou a apresenta��o da primeira mesa de debates na
							abertura do Semin�rio Anual Cient�fico tecnol�gico, realizada na
							manh� de hoje (12/08), no audit�rio do Museu da Vida, no campus
							de Manguinhos... &nbsp;&nbsp; <a
								href="noticias/12082013-sact2.pdf" TARGET="_blank">saiba mais</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-date">
							<span>12</span>ago
						</div>
						<div class="post-info">
							<span class="noticia_titulo">Especialistas do setor
								biofarmac�utico se reunir�o em Semin�rio na Fiocruz</span><br />
							Para apresentar os atuais desafios e perspectivas do
							desenvolvimento de insumos estrat�gicos no Brasil e construir um
							ambiente favor�vel � inova��o tecnol�gica, atrav�s do est�mulo �
							pesquisa, produ��o cient�fica, troca de experi�ncias e
							conhecimentos, Bio-Manguinhos promove, de 12 a 14 de agosto, o
							Semin�rio Anual Cient�fico e Tecnol�gico... &nbsp;&nbsp; <a
								href="noticias/12082013-sact1.pdf" TARGET="_blank">saiba mais</a>
						</div>
					</p>
				</div>
			</div>

			<div class="cleardiv"></div>
		</div>
		<!-- MODULO CONTEUDO - FINAL *** //-->
	</div>
<?php include("rodape.php"); ?>
</body>
</html>