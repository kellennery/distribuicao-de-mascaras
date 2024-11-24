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
			<h2>Conte�do das palestras de 2013</h2>
			<p class="p_text">
				<br />
			</p>
			<div id="tabulador">
				<ul>
					<li><a href="#tabulador-1">12/08/2013</a></li>
					<li><a href="#tabulador-2">13/08/2013</a></li>
					<li><a href="#tabulador-3">14/08/2013</a></li>
					<!--  <li><a href="ajax/content2.html">Tab 2</a></li>
				    <li><a href="ajax/content3-slow.php">Tab 3 (slow)</a></li>
				    <li><a href="ajax/content4-broken.php">Tab 4 (broken)</a></li>-->
				</ul>
				<div id="tabulador-1">
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> C�lulas-tronco
							adultas humanas para ensaios de citotoxicidade: uma alternativa
							aos ensaios animais <br />
							<br /> <span class="noticia_titulo">Autor:</span><i> Alessandra
								Melo de Aguiar, Instituto Carlos Chagas, FIOCRUZ-PR</i>
							&nbsp;&nbsp; <a href="trabalhos/12-alessandra-aguiar.pdf"
								TARGET="_blank">Visualizar</a>

						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> ESTUDO COMPARATIVO DE
							IMUNOGENICIDADE DA VACINA TR�PLICE VIRAL (TVV), NAS APRESENTA��ES
							MONODOSE E MULTIDOSE <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Ana Luiza
								Braz Pav�o, Assessoria Cl�nica, Bio-Manguinhos, Fiocruz</i>
							&nbsp;&nbsp; <a href="trabalhos/12-ana-pavao.pdf" TARGET="_blank">Visualizar</a>

						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> ESTUDO VISANDO AO
							AUMENTO DO PRAZO DE VALIDADE DA VACINA FEBRE AMARELA 05 E 10
							DOSES DE 24 PARA 36 MESES. <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Paulo Dick,
								Departamento de Controle de Qualidade Bio-Manguinhos / FIOCRUZ</i>
							<br /> <span class="noticia_titulo"><br />
							<i>Bordetella pertussis:</i></span> <b>MAPEAMENTO E
								CARACTERIZA��O DOS EPITOPOS DA TOXINA PERTUSSIS E PERTACTINA</b></br>
							<i><u>Fl�vio Rocha da Silva</u><sup>1</sup>, Luiz A.L. Teixeira
								Pinto<sup>1</sup>, Alexandre de Oliveira Sa�sse<sup>1</sup>,
								Luciano Pinho Gomes<sup>1</sup>, Salvatore Giovanni De Simone<sup>1e2</sup>
								Laborat�rio de Bioqu�mica Prote�na e Pept�deo- Instituto Oswaldo
								Cruz/Fiocruz.Instituto Nacional de Ci�ncia e Tecnologia de
								Inova��o em Doen�as Negligenciadas ((INCT-IDN)/Centro de
								Desenvolvimento</i> &nbsp;&nbsp; <a
								href="trabalhos/12-paulo-dick.pdf" TARGET="_blank">Visualizar</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> Desafios, gargalos e
							perspectivas em vacinas e vacina��es no Brasil <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Carla Magda
								A. S. Domingues Coordena��o Geral do Programa Nacional de
								Imuniza��es Secretaria de Vigil�ncia em Sa�de � Minist�rio da
								Sa�de</i> &nbsp;&nbsp; <a
								href="trabalhos/12-carla-domingues.pdf" TARGET="_blank">Visualizar</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> Caracteriza��o
							fenot�pica e molecular dos v�rus quim�ricos febre amarela /
							dengue candidatos a uma vacina tetravalente recombinante contra
							dengue <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Luiz Gustavo
								Almeida Mendes, Bio-Manguinhos - FIOCRUZ</i> &nbsp;&nbsp; <a
								href="trabalhos/12-luiz-gustavo.pdf" TARGET="_blank">Visualizar</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> AN�LISE DA
							IMUNOGENICIDADE E GRAU DE PROTE��O DE UMA VACINA INATIVADA PARA
							FEBRE AMARELA EM MODELO MURINO <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Renata
								Carvalho Pereira, Bio-Manguinhos</i> &nbsp;&nbsp; <a
								href="trabalhos/12-renata-carvalho.pdf" TARGET="_blank">Visualizar</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> Tend�ncias
							tecnol�gicas em produ��o de vacinas <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Rino
								Rappuoli, Diretor da Novartis</i> &nbsp;&nbsp; <a
								href="trabalhos/12-rino-rappuoli.pdf" TARGET="_blank">Visualizar</a>
						</div>

					</p>
				</div>
				<div id="tabulador-2">
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> DIGEST�O ENZIM�TICA
							DE ANTICORPOS MONOCLONAIS MURINOS ANTI-PBP2a DE <i>Staphylococcus
								aureus</i> RESISTENTES � METICILINA (MRSA) PARA OBTEN��O DE
							FRAGMENTOS F(ab')2 <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Anna Erika
								Vieira de Ara�jo Bio-Manguinhos, Programa de Biof�rmacos,
								VDTEC/LATER</i> &nbsp;&nbsp; <a
								href="trabalhos/13-ana-erika.pdf" TARGET="_blank">Visualizar</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> ENSAIO REAL TRIPLEX
							PARA HBV E DENGUE, VISANDO AMPLIA��O DE ALVOS DO KIT NAT HIV/HCV
							BIO-MANGUINHOS <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Antonio G.
								P. Ferreira GPRED/VDTEC/Bio-Manguinhos/Fiocruz</i> &nbsp;&nbsp;
							<a href="trabalhos/13-antonio-pinto.pdf" TARGET="_blank">Visualizar</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> CONSTRU��O DE UM
							VETOR PARA RECOMBINA��O DE INTEGRASES DO HIV-1 <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Bianca
								Duarte</i> &nbsp;&nbsp; <a href="trabalhos/13-bianca-duarte.pdf"
								TARGET="_blank">Visualizar</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> Desafios, gargalos e
							perspectivas para o diagn�stico laboratorial das doen�as
							transmiss�veis no Brasil <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Claudio
								Maierovitch Pessanha Henriques Departamento de Vigil�ncia de
								Doen�as Transmiss�veis</i> &nbsp;&nbsp; <a
								href="trabalhos/13-claudio-maierovitch.pdf" TARGET="_blank">Visualizar</a>

						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> METABOL�MICA APLICADA
							NA IDENTIFICA��O DE POTENCIAIS ALVOS DE INTERVEN��O TERAP�UTICA
							NAS DOEN�AS MICOBACTERIANAS <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Katherine
								Antunes de Mattos<sup>1,2</sup>, Viviane Carneiro Gon�alves
								Oliveira<sup>1</sup>, Luiz Caetano Martha Antunes<sup>�</sup>,
								Euzenir Nunes Sarno<sup>1</sup>, Patricia Torres Bozza<sup>1</sup>,
								Georgia Correa Atella<sup>4</sup> e Maria Cristina Vidal
								Pessolani<sup>1</sup>. <sup>1</sup>Instituto Oswaldo Cruz, <sup>�</sup>Instituto
								de Tecnologia em Imunobiol�gicos Bio-Manguinhos, <sup>�</sup>The
								University of British Columbia e <sup>4</sup>Universidade
								Federal do Rio de Janeiro.
							</i> &nbsp;&nbsp; <a href="trabalhos/13-katherine-antunes.pdf"
								TARGET="_blank">Visualizar</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> Desafios, gargalos e
							perspectivas de desenvolvimento tecnol�gico e produ��o de
							biof�rmacos no Brasil <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Leonardo
								Batista Paiva Secret�rio-adjuntode Ci�ncia, Tecnologiae Insumos
								Estrat�gicos Minist�rioda Sa�de</i> &nbsp;&nbsp; <a
								href="trabalhos/13-leonardo-batista.pdf" TARGET="_blank">Visualizar</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> Desenvolvimento de
							sistema de express�o em plataforma de c�lula eucariota para a
							produ��o de anticorpos monoclonais RECOMBINANTES <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Luis Vidal
								Conde Bio-Manguinhos, Programa de Biof�rmacos, VDTEC/LATER</i>
							&nbsp;&nbsp; <a href="trabalhos/13-luis-vidal.pdf"
								TARGET="_blank">Visualizar</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> DESENVOLVIMENTO DO
							TESTE DE IMUNOFENOTIPAGEM PARA A CONTAGEM DE LINF�CITOS TCD4+. <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Marli Sidoni
								Bio-Manguinhos/Fiocruz</i> &nbsp;&nbsp; <a
								href="trabalhos/13-marli-sidoni.pdf" TARGET="_blank">Visualizar</a>
						</div>

					</p>
				</div>
				<div id="tabulador-3">
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> New approaches for
							standardization and validation of qRT-PCR assays for quantitation
							of yellow fever on clinical samples with high quality parameters.
							<br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Alice Gomes
								Fernandes, Bio-manguinhos</i> &nbsp;&nbsp; <a
								href="trabalhos/14-alice-gomes.pdf" TARGET="_blank">Visualizar</a>

						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> COMPARA��O DE
							METODOLOGIAS DE ACOPLAMENTO UTILIZADAS NA PLATAFORMA DE
							MICROARRANJOS L�QUIDOS <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Bernardo
								Oliveira Loureiro, Bio-Manguinhos/Fiocruz</i> &nbsp;&nbsp; <a
								href="trabalhos/14-bernardo-oliveira.pdf" TARGET="_blank">Visualizar</a>

						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> Avalia��o de uma
							fra��o proteica de 38 a 40 kDa isolada de <i>Acinetobacter
								baumannii</i> como alvo para imunoterapia <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Lucas
								Machado, Programa de Biof�rmacos, Bio-manguinhos</i>
							&nbsp;&nbsp; <a href="trabalhos/14-lucas-machado.pdf"
								TARGET="_blank">Visualizar</a>
						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> Purifica��o e
							caracteriza��o de asparaginase de <i>Saccharomyces cerevisiae</i>
							clonada em <i>Pichia pastoris</i>: estudo de um poss�vel f�rmaco
							antileuc�mico <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Luciana
								Facchinetti de Castro Gir�o, UFRJ/ IOC/ Farmanguinhos</i>
							&nbsp;&nbsp; <a href="trabalhos/14-luciana-facchinetti.pdf"
								TARGET="_blank">Visualizar</a>

						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> Compara��o
							farmacocin�tica e farmacodin�mica de duas formula��es de
							alfapeginterferona em volunt�rios sadios <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Marisa Boff
								Costa Hospital de Cl�nicas de Porto Alegre</i> &nbsp;&nbsp; <a
								href="trabalhos/14-marisa-boff.pdf" TARGET="_blank">Visualizar</a>

						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> Integra��o das
							atividades de inova��o tecnol�gica na Fiocruz e no Brasil:
							desafios, gargalos e perspectivas <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Mitermayer
								Galv�o dos Reis, Pesquisador Titular da Funda��o Oswaldo Cruz,
								Bahia/ Presidente da Sociedade Brasileira de Medicina Tropical e
								Coordenador Executivo da Rede Nordeste de Biotecnologia
								(RENORBIO)</i> &nbsp;&nbsp; <a
								href="trabalhos/14-mitermayer-galvao.pdf" TARGET="_blank">Visualizar</a>

						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> Desafios para a
							Inova��o Tecnol�gica: o Papel das Parcerias P�blico-Privadas <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Dr. Ogari
								Pacheco, Crist�lia Prod. Quim. Farm. Ltda</i> &nbsp;&nbsp; <a
								href="trabalhos/14-ogari-pacheco.pdf" TARGET="_blank">Visualizar</a>

						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> Detec��o de amostras
							em per�odos de janela imunobiol�gica com kit NAT HIV/HCV
							Bio-Manguinhos visando ampliar a seguran�a transfusional no
							Brasil <br />
							<br /> <span class="noticia_titulo">Autor:</span> <i>Patr�cia
								Alvarez, LATED/VDTEC/Bio-Manguinhos/Fiocruz</i> &nbsp;&nbsp; <a
								href="trabalhos/14-patricia-alvarez.pdf" TARGET="_blank">Visualizar</a>

						</div>

					</p>
				</div>

			</div>
			<img src="images/tracejado.png" alt="" />
			<p class="p_text">
				<a href="controller.php?modulo=trabalho-apresentado"
					style="color: #000000;">Conte�do das palestras de 2014</a>
			</p>

			<div class="cleardiv"></div>
		</div>
		<!-- MODULO CONTEUDO - FINAL *** //-->
	</div>
<?php include("rodape.php"); ?>
</body>
</html>