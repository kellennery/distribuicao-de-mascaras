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
			<h2>Conte�do das palestras</h2>
			<p class="p_text">
				<br />
			</p>
			<div id="tabs">
				<ul>
					<li><a href="#tabs-1">28/05/2014</a></li>
					<li><a href="#tabs-2">29/05/2014</a></li>
					<li><a href="#tabs-3">30/05/2014</a></li>
					<!--  <li><a href="ajax/content2.html">Tab 2</a></li>
				    <li><a href="ajax/content3-slow.php">Tab 3 (slow)</a></li>
				    <li><a href="ajax/content4-broken.php">Tab 4 (broken)</a></li>-->
				</ul>
				<div id="tabs-1">
					<p>
						<span class="noticia_titulo">1� per�odo</span>
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> Novas Fronteiras da
							Vacinologia <br />
							<br /> <span class="noticia_titulo">Autor:</span><i> Ralf
								Clemens, MD PhD Bill & Melinda Gates Foundation Senior Advisor
								Senior Vice President Takeda Vaccines Fiocruz</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/28/manha/Novas_Fronteiras_da_Vacinologia_Ralf_Clemens.pdf"
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
							<span class="noticia_titulo">T�tulo:</span> Polio Eradication and
							the �Endgame� <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Ralf Clemens,
								MD PhD Bill & Melinda Gates Foundation Senior Advisor Senior
								Vice President Takeda Vaccines Fiocruz</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/28/manha/Polio_End_Game_Ralf_Clemens.pdf"
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
							<span class="noticia_titulo">T�tulo:</span> Poliomielite -
							recomenda��es atuais <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Reinaldo de
								Menezes Martins Consultor Cient�fico de Bio-Manguinhos/Fiocruz</i>
							&nbsp;&nbsp; <a
								href="trabalhos/2014/28/manha/Poliomielite_recomendacoesatuais_Reinaldo_Menezes.pdf"
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
							<span class="noticia_titulo">T�tulo:</span> Polio end Game <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Dr. Akira
								Homma Presidente, Conselho Politico e Estrat�gico</i>
							&nbsp;&nbsp; <a
								href="trabalhos/2014/28/manha/Polio_End_Game_Akira_Homma.pdf"
								TARGET="_blank">Visualizar</a>

						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<span class="noticia_titulo">2� per�odo</span>
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span> Avalia��o da
							imunogenicidade do componente caxumba da vacina tr�plice viral na
							rotina do Programa Nacional de Imuniza��es <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Eliane Matos
								dos Santos, Bio-Manguinhos Presidente, Conselho Politico e
								Estrat�gico</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/28/tarde/Eliane_Matos_dos_Santos_.pdf"
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
							<span class="noticia_titulo">T�tulo:</span> Dura��o da Imunidade
							P�s-vacina��o contra Febre Amarela em Adultos <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Maria de
								Lourdes Sousa Maia, Bio-Manguinhos</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/28/tarde/Maria_de_Lourdes_de_Sousa_Maia.pdf"
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
							<span class="noticia_titulo">T�tulo:</span> Epidemiology of group
							a rotavirus diarrhea in the context of universal Monovalent
							(G1p[8]) Vaccination in Brazil <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Eduardo de
								Mello Volot�o*, Filipe Anibal Carvalho-Costa, Mariela Mart�nez
								G�mez, Marcelle Figueira Marques da Silva, Tatiana Lundgren
								Rose, Rosane Maria S. de Assis, Alexandre Madi Fialho, Jos�
								Paulo Gagliardi Leite. Laborat�rio de Virologia Comparada e
								Ambiental, Instituto Oswaldo Cruz � Fiocruz / Rio de Janeiro </i>
							&nbsp;&nbsp; <a
								href="trabalhos/2014/28/tarde/Eduardo_de_Mello.pdf"
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
							<span class="noticia_titulo">T�tulo:</span> Elabora��o de
							Materiais de Refer�ncia in house para Vacina de Haemophilus
							influenzae tipo b e seus Produtos Intermedi�rios <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>El� de
								Oliveira Rodrigues , ENSP. J�ssica Yukie dos Reis Nagashima,
								Bio-Manguinhos </i> &nbsp;&nbsp; <a
								href="trabalhos/2014/28/tarde/Elo_de_Oliveira_Rodrigues.pdf"
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
							<span class="noticia_titulo">T�tulo:</span> CONSTELA��O G�NICA
							DOS GEN�TIPOS: Wa-like/DS-1-like/AU-1-like, DE ROTAVIRUS DO GRUPO
							A ANTES E AP�S A INTRODU��O DA VACINA MONOVALENTE (G1P[8]) NO
							BRASIL <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Tatiana
								Lundgren Rose, Mariela Mart�nez G�mez, Filipe Anibal
								Carvalho-Costa, Eduardo de Mello Volot�o, Marcelle Figueira
								Marques da Silva, Hugo Reis Resque, Alexandre Madi Fialho,
								Rosane Maria Santos de Assis, Jos� Paulo Gagliardi Leite
								Laborat�rio de Virologia Comparada e Ambiental � IOC/Fiocruz </i>
							&nbsp;&nbsp; <a
								href="trabalhos/2014/28/tarde/Tatiana_Lundgren_Rose.pdf"
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
							<span class="noticia_titulo">T�tulo:</span>Cost Comparison: From
							Pilot to Large Scale Manufacturing of the Brazilian Meningococcal
							C Conjugate Vaccine <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Renata Chagas
								Bastos, Bio-Manguinhos / Fiocruz - LAMAM � Laborat�rio de
								Macromol�culas </i> &nbsp;&nbsp; <a
								href="trabalhos/2014/28/tarde/Renata_Chagas_Bastos.pdf"
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
							<span class="noticia_titulo">T�tulo:</span>Desenvolvimento e
							Valida��o do m�todo de determina��o de F�sforo no Polissacar�deo
							Meningoc�cico A (PSA) e no Polirribosil Ribitol Fosfato (PRRP)
							POR ICP-OES <br />
							<br /> <span class="noticia_titulo">Autor:</span><i> Lauro de
								Sena Laurentino - SEAPQ - LAFIQ - DEQUA - Bio-Manguinhos.
								Cl�udio Dutra de Figueira - SEPFI � LAFIQ �DEQUA -
								Bio-Manguinhos</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/28/tarde/Lauro_Oliveira_Rodrigues.pdf"
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
							<span class="noticia_titulo">T�tulo:</span>Vacina Febre Amarela
							de Subunidade em Plataforma Vegetal: imunogenicidade e prote��o
							de camundongos contra desafio <br />
							<br /> <span class="noticia_titulo">Autor:</span><i> Rosane Cuber
								Guimar�es, LATEV - Bio-Manguinhos / FIOCRUZ</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/28/tarde/Rosane_Cuber_Guimaraes.pdf"
								TARGET="_blank">Visualizar</a>
						</div>

					</p>
				</div>
				<div id="tabs-2">
					<p>
						<span class="noticia_titulo">1� per�odo</span>
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span>Desenvolvimento
							Tecnol�gico, produ��o e suprimento de kits nacionais no Brasil:
							Li��es aprendidas na implanta��o do NAT. <br />
							<br /> <span class="noticia_titulo">Autor:</span><i> Guilherme
								Genovez</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/29/manha/Producao_suprimento_kits_nacionais_Guilherme_Genovez.pdf"
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
							<span class="noticia_titulo">T�tulo:</span>Desafios, estrat�gias
							e perspectivas para o PDP e mercado de reativos para diagn�stico
							laboratorial no Brasil <br />
							<br /> <span class="noticia_titulo">Autor:</span><i> Octavio
								Fernandes</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/29/manha/Desafios_reativos_diagnostico_Octavio_Fernandes.pdf"
								TARGET="_blank">Visualizar</a>

						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<span class="noticia_titulo">2� per�odo</span>
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span>EFFECT OF ZINC ON THE
							STRUCTURAL STABILITY OF PNEUMOCOCCAL SURFACE ANTIGEN A (PsaA) <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>
								IzabellaButyda Silva Corr�a, VDTEC, LAMAM
								-Bio-Manguinhos-FIOCRUZ</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/29/tarde/Effect_of_Zinc_Izabella_Buty.pdf"
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
							<span class="noticia_titulo">T�tulo:</span>INCORPORA��O DO ALVO
							HBV NO KIT NAT BRASILEIRO PRODUZIDO POR BIO-MANGUINHOS <br />
							<br /> <span class="noticia_titulo">Autor:</span><i> Marcela
								Fontana do Carmo Machado Maurell Bio-Manguinhos/FIOCRUZ</i>
							&nbsp;&nbsp; <a
								href="trabalhos/2014/29/tarde/Incorporacao_alvo_HBV_Marcela_Fontana.pdf"
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
							<span class="noticia_titulo">T�tulo:</span>Determina��o e
							Compara��o dos Pontos de Corte Ideais de Duas Metodologias para o
							Micro PRNT de Sarampo <br />
							<br /> <span class="noticia_titulo">Autor:</span><i> Marisol
								Sim�es, LATEV, Bio-Manguinhos</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/29/tarde/Micro_PRNT_de_Sarampo_Marisol_Simoes_.pdf"
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
							<span class="noticia_titulo">T�tulo:</span>COMPARATIVE STUDY OF
							PHYSICO-CHEMICAL AND IMMUNOLOGICAL PROPERTIES OF THE MONOCLONAL
							ANTI-CD4 PRODUCED BY BIOREACTOR AND MURINE SOURCES <br />
							<br /> <span class="noticia_titulo">Autor:</span><i> Priscila
								Muniz da Paz, Laborat�rio de Macromol�culas/LAMAM
								Vice-diretoriade Desenvolvimento Tecnol�gico/VDTEC
								Bio-Manguinhos/ FIOCRUZ</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/29/tarde/Monoclonal_anti_CD4_Priscila_Paz.pdf"
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
							<span class="noticia_titulo">T�tulo:</span>Plataforma Alternativa
							e Flex�vel para o Kit NAT Brasileiro <br />
							<br /> <span class="noticia_titulo">Autor:</span><i> Elisabete
								Ferreira de Andrade Bio-Manguinhos/FIOCRUZ</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/29/tarde/Plataforma_Alternativa_Flexivel_ KitNAT_Brasileiro_Elisabete_Andrade.pdf"
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
							<span class="noticia_titulo">T�tulo:</span>Desenvolvimento de
							Estrat�gias para o Aperfei�oamento da Produ��o do Conjugado
							Anti-IgGCanina/PeroxidaseUtilizado no Kit EIE/LVC <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>
								Edin�aPastroMendes Se��o de Insumos, Conjugados e Apoio
								Departamento de Reativos para Diagn�stico Bio-Manguinhos,
								Funda��o Oswaldo Cruz</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/29/tarde/Producao_Conjugado_Anti-IgG_Canina_Peroxidase_Edinea_Prado.pdf"
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
							<span class="noticia_titulo">T�tulo:</span>Schistosoma mansoni
							antigens recognized by serological-proteomic approach as
							potentially able to distinguish the clinical status of endemic
							area residents <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Fernanda
								Ludolf Ribeiro, MSc / PhD Laborat�rio de Parasitologia Celular e
								Molecular Grupo de Gen�mica e Biologia Computacional Centro de
								Pesquisas Ren� Rachou (CPqRR) - Fiocruz</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/29/tarde/Schistosoma_mansoni_antigens_ re_Fernanda_Ludolf.pdf"
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
							<span class="noticia_titulo">T�tulo:</span>TESTE DE QUANTIFICA��O
							DE CV HCV DESENVOLVIDO EM BIO-MANGUINHOS: AVALIA��O DE DESEMPENHO
							FRENTE A AMOSTRAS DE PACIENTES EM TRATAMENTO COM ALFA
							PEG-INTERFERONA <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Daniele Ramos
								Rocha Bio-Manguinhos/Fiocruz</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/29/tarde/Teste_de_quantificacao_CV_HCV_.pdf"
								TARGET="_blank">Visualizar</a>

						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
				</div>
				<div id="tabs-3">
					<p>
						<span class="noticia_titulo">1� per�odo</span>
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span>Desenvolvimento de
							Biof�rmacos para �rea de oncologia no Brasil: avan�os da
							biotecnologia <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Martin
								Bonamino</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/30/manha/Desenvolvimento_Biofarmacos_Oncologia_Martin_ Bonamino.pdf"
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
							<span class="noticia_titulo">T�tulo:</span>Desafios, Estrat�gias
							e Perspectivas para PDP & Mercado de Biof�rmacos no Brasil <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Ogari Pacheco</i>
							&nbsp;&nbsp; <a
								href="trabalhos/2014/30/manha/PDP_Biofarmacos_Brasil_Ogari_Pacheco.pdf"
								TARGET="_blank">Visualizar</a>

						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<span class="noticia_titulo">2� per�odo</span>
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span>Clonagem e express�o
							em alta escala de transportadores ABC humanos em sistema
							Baculov�rus/C�lula de Inseto customizado para cristalografia de
							raio X <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Rafael O.
								Resende, Bio-Manguinhos/Fiocruz</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/30/tarde/Clonagem_Rafael_Resende.pdf"
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
							<span class="noticia_titulo">T�tulo:</span>Complementarity
							Determining Regions(CDR)identification in monoclonal antibodies
							gene sequences <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Alexandre
								Bezerra Conde Figueiredo; Carlos Otavio Alves Viana; M�rcia
								Arissawa - Laborat�rio de Tecnologia de Anticorpos Monoclonais
								-Bio-Manguinhos / FIOCRUZ. Laborat�rio de Tecnologia
								Recombinante -Bio-Manguinhos / FIOCRUZ</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/30/tarde/Complementarity_Determining Regions_AlexandreBezerra.pdf"
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
							<span class="noticia_titulo">T�tulo:</span> Avalia��o da
							express�o g�nica de citocinas e polimorfismo da IL-28B em
							volunt�rios sadios ap�s administra��o de IFN-a peguilado <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Andrea
								Marques Vieira da Silva, Bio-Manguinhos/ FIOCRUZ</i>
							&nbsp;&nbsp; <a
								href="trabalhos/2014/30/tarde/II_Seminario_ANDREA_MARQUES_.pdf"
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
							<span class="noticia_titulo">T�tulo:</span> An�lise da marca��o
							do Anticorpo Monoclonal anti-PBP2a com 99m Tc para diagn�stico de
							Staphylococcus aureus resistente � meticilina (MRSA) <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>J�nio da
								Silva</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/30/tarde/janio_da_silva.pdf"
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
							<span class="noticia_titulo">T�tulo:</span> Proposta de um
							sistema integrado de identifica��o e investiga��o de
							micro-organismos no Controle de Qualidade em Ind�strias
							Farmac�uticas <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Luciane
								Medeiros, Bio-Manguinhos/FIOCRUZ</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/30/tarde/Luciane_Martins.pdf"
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
							<span class="noticia_titulo">T�tulo:</span>Investiga��o dos
							mecanismos moleculares pelos quais o PCA3 modula a sobreviv�ncia
							de c�lulas de c�ncer de pr�stata. <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Ana Em�lia
								Goulart, LATER/ PBIO Bio-manguinhos/ FIOCRUZ</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/30/tarde/SACT_Bio_2014_Ana_Emilia_Goulart.pdf"
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
							<span class="noticia_titulo">T�tulo:</span>Clonagem e express�o
							do horm�nio do crescimento humano (hGH) em E. coli. <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Thiago Santos
								Chaves</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/30/tarde/SACT_Thiago.pdf" TARGET="_blank">Visualizar</a>

						</div>
						<img src="images/tracejado.png" alt="" />
					</p>
					<p>
						<div class="post-content-image">
							<img class="img_palestrante" height="70px;"
								src="images/trabalhos-seminario.jpg">
						
						</div>
						<div class="post-info">
							<span class="noticia_titulo">T�tulo:</span>Pesquisa e
							Desenvolvimento de Formula��es Para Prote��o de Protoxinas de
							Bacillus e Outras Bact�rias Esporuladas <br />
							<br /> <span class="noticia_titulo">Autor:</span><i>Vera Cristina
								Pessoa de Lima</i> &nbsp;&nbsp; <a
								href="trabalhos/2014/30/tarde/Vera_Cristina.pdf" TARGET="_blank">Visualizar</a>

						</div>
						<img src="images/tracejado.png" alt="" />
					</p>

				</div>
			</div>
			<img src="images/tracejado.png" alt="" />
			<p class="p_text">
				<a href="controller.php?modulo=trabalho-apresentado_2013"
					style="color: #000000;">Conte�do das palestras de 2013</a>
			</p>

			<div class="cleardiv"></div>
		</div>
		<!-- MODULO CONTEUDO - FINAL *** //-->
	</div>
<?php include("rodape.php"); ?>
</body>
</html>