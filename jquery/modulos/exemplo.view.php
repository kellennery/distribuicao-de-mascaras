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
// include_once('javascripts.php');

include_once ('jquery.php');
if (file_exists ( 'modulos/' . $MOD_CLASSE . '.js.php' ))
	include_once ('modulos/' . $MOD_CLASSE . '.js.php');
?> 
	<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="js/jquery.ease.js"></script>
<script type="text/javascript" src="js/jcarousellite_1.0.2.min.js"></script>
<script type="text/javascript" src="js/carrossel.js"></script>

</head>
<body>
<?php include("cabecalho.php"); ?>
<div id="content">
<?php
// include("quadro_menu_vertical.php");
include ("quadro_menu_vertical.php");

?>
        <div id="posts" class="post">
			<h2>Programa��o</h2>
			<div class="description">
				<p class="p_text">
					<div id="thumbImagens">
						<ul>
							<li><a rel="img/001.jpg">28/05</a></li>
							<li><a rel="img/002.jpg">29/05</a></li>
							<li><a rel="img/003.jpg">30/05</a></li>
						</ul>
					</div>
					<div class="img-grande">
						<img src="img/001.jpg" />
						<!--  <a href="img/001.jpg" class="abre-foto">
				        <img src="img/001.jpg" />
				    </a>-->
					</div>

				</p>
			</div>
			<h2>Convidados e palestrantes</h2>
			<div style="display: none;">
				<a href="#" class="prev"><img src="img/anterior.png" border="0" /></a>
			</div>

			<div id="carrossel" class="carousel imageSliderExt"
				style="float: left; width: 577px; padding-top: 15px;">
				<div id="areaConvidados">
					<img class="1" src="images/convidados/carlos_augusto.png"
						style="cursor: pointer; width: 64px; height: 64px;" alt="Foto 1" />
					<img class="2" src="images/convidados/paulo_gadelha.png"
						style="cursor: pointer; width: 64px; height: 64px;" alt="Foto 2" />
					<img class="3" src="images/convidados/artur_couto.png"
						style="cursor: pointer; width: 64px; height: 64px;" alt="Foto 3" />
					<img class="4" src="images/convidados/akira_homma.png"
						style="cursor: pointer; width: 64px; height: 64px;" alt="Foto 4" />
					<img class="5" src="images/convidados/reinaldo_menezes.png"
						style="cursor: pointer; width: 64px; height: 64px;" alt="Foto 5" />
					<img class="6" src="images/convidados/maria_luz.png"
						style="cursor: pointer; width: 64px; height: 64px;" alt="Foto 6" />
					<img class="7" src="images/convidados/antonio_padua.png"
						style="cursor: pointer; width: 64px; height: 64px;" alt="Foto 7" />
					<img class="8" src="images/convidados/marcos_silva.png"
						style="cursor: pointer; width: 64px; height: 64px;" alt="Foto 8" />
					<img class="9" src="images/convidados/ciro_quadros.png"
						style="cursor: pointer; width: 64px; height: 64px;" alt="Foto 9" />
					<img class="10" src="images/convidados/ralf_clemens.png"
						style="cursor: pointer; width: 64px; height: 64px;" alt="Foto 10" />
					<img class="11" src="images/convidados/octavio_fernandes.png"
						style="cursor: pointer; width: 64px; height: 64px;" alt="Foto 11" />
					<img class="12" src="images/convidados/ogari_castro.png"
						style="cursor: pointer; width: 64px; height: 64px;" alt="Foto 12" />
					<img class="13" src="images/convidados/guilherme_genovez.png"
						style="cursor: pointer; width: 64px; height: 64px;" alt="Foto 13" />
					<img class="14" src="images/convidados/martin_bonamino.png"
						style="cursor: pointer; width: 64px; height: 64px;" alt="Foto 13" />
					<img class="15" src="images/convidados/paulo_dornelles.png"
						style="cursor: pointer; width: 64px; height: 64px;" alt="Foto 14" />
					<img class="16" src="images/convidados/antonio_gomes.png"
						style="cursor: pointer; width: 64px; height: 64px;" alt="Foto 15" />
				</div>
				<br />

				<ul>
					<li>
						<table cellpadding="5" cellspacing="10" border="0">
							<tr>
								<td valign="top"><img src="images/convidados/carlos_augusto.png"
									style="width: 135px; height: 126px;" alt="Foto 1" /></td>
								<td><label class="nomeConvidado">Carlos Augusto Grabois Gadelha</label>
									<br /> Economista e doutor em Economia pelo Instituto de
									Economia da Universidade Federal do Rio de Janeiro (UFRJ),
									Secret�rio de Ci�ncia, Tecnologia e Insumos Estrat�gicos do
									Minist�rio da Sa�de, Coordenador do Grupo de Pesquisa sobre
									Complexo Industrial e Inova��o em Sa�de (GIS) e Coordenador
									geral do Mestrado Profissional em Pol�tica e Gest�o de Ci�ncia,
									Tecnologia e Inova��o em Sa�de da Ensp/Fiocruz. Exerceu o cargo
									de Vice-presidente de Produ��o e Inova��o em Sa�de da Funda��o
									Oswaldo Cruz, entre 2007 e 2010.<br />
								<br />
								<br />
								<br /></td>
							</tr>
						</table>
					</li>
					<li>
						<table cellpadding="5" cellspacing="10" border="0">
							<tr>
								<td valign="top"><img src="images/convidados/paulo_gadelha.png"
									style="width: 136px; height: 126px;" alt="Foto 2" /></td>
								<td><label class="nomeConvidado">Paulo Gadelha</label><br />
									Presidente da Funda��o Oswaldo Cruz, doutor em Sa�de P�blica
									pela Escola Nacional de Sa�de P�blica (Ensp), presidiu a
									Associa��o de M�dicos Residentes do Rio de Janeiro (Amererj) e
									a Associa��o Nacional de M�dicos Residentes (ANMR). Com
									experi�ncia em pesquisa e doc�ncia, foi respons�vel pela
									cria��o da Casa de Oswaldo Cruz (COC/Fiocruz). Implementou e
									coordenou o Museu da Vida, de 1985 a 1997. � um dos membros da
									rede internacional de pesquisa para combater a falta de
									medicamentos eficazes para doen�as como mal�ria, leishmaniose e
									mal de Chagas (DND-I).</td>
							</tr>
						</table>
					</li>
					<li>
						<table cellpadding="5" cellspacing="10" border="0">
							<tr>
								<td valign="top"><img src="images/convidados/artur_couto.png"
									style="width: 137px; height: 126px;" alt="Foto 3" /></td>
								<td><label class="nomeConvidado">Artur Couto</label><br />
									Diretor do Instituto de Tecnologia em Imunobiol�gicos
									(Bio-Manguinhos/Fiocruz), desde maio de 2009. Possui
									experi�ncia em gest�o de sa�de p�blica, e planejamento e
									controle de produ��o. Graduado em administra��o com
									especializa��o em planejamento, programa��o e controle de
									produ��o e p�s-gradua��o em administra��o p�blica pela Funda��o
									Get�lio Vargas (FGV), mba executivo pela COPPEAD/UFRJ e
									mestrado em economia pela Universidade Candido Mendes (Ucam).</td>
							</tr>
						</table>
					</li>
					<li>
						<table cellpadding="5" cellspacing="10" border="0">
							<tr>
								<td valign="top"><img src="images/convidados/akira_homma.png"
									style="width: 135px; height: 125px;" alt="Foto 4" /></td>
								<td><label class="nomeConvidado">Akira Homma</label><br />
									Doutor em Ci�ncias pelo Departamento de Medicina Preventiva da
									Faculdade de Medicina da Universidade de S�o Paulo (USP),
									graduado em Medicina Veterin�ria (UFF) e em Administra��o de
									Empresas pelo Instituto de Treinamento e Desenvolvimento de
									Executivos (IDCE). � p�s-graduado em Virologia pela Baylor
									College of Medicine e membro dos comit�s t�cnicos do Programa
									de Imuniza��es (OPAS/OMS), do PNI. Foi Diretor de Bio-
									Manguinhos por 23 anos em dois per�odos, Presidente e
									Vice-presidente da Fiocruz, Ex-presidente e membro do Comit�
									Executivo do Developing Countries Vaccine Manufacturers Network
									(DCVMN). Foi Assessor Regional de Biol�gicos para a regi�o das
									Am�ricas pela OPAS. Atualmente, � Presidente do Conselho
									Pol�tico e Estrat�gico de Bio-Manguinhos/ Fiocruz e
									Diretor-presidente do IBMP/Paran� e membro do Comit�
									T�cnico-Cient�fico da Hemobr�s.</td>
							</tr>
						</table>
					</li>
					<li>
						<table cellpadding="5" cellspacing="10" border="0">
							<tr>
								<td valign="top"><img
									src="images/convidados/reinaldo_menezes.png"
									style="width: 135px; height: 127px;" alt="Foto 5" /></td>
								<td><label class="nomeConvidado">Reinaldo de Menezes Martins</label><br />
									� m�dico pediatra, chefiou o Servi�o de Pediatria do Hospital
									da Lagoa durante 15 anos. Foi Presidente da Sociedade
									Brasileira de Pediatria (SBP), membro do Comit� T�cnico
									Assessor em Imuniza��es do Minist�rio da Sa�de e da Secretaria
									de Sa�de do Rio de Janeiro e do Grupo sobre Farmacovigil�ncia
									de Vacinas do Council for International Organizations of
									Medical Sciences (CIOMS/WHO) e do Immunization Practices
									Advisory Committee (IPAC/WHO). Atualmente � Consultor
									Cient�fico S�nior de Bio-Manguinhos/Fiocruz.</td>
							</tr>
						</table>
					</li>
					<li>
						<table cellpadding="5" cellspacing="10" border="0">
							<tr>
								<td valign="top"><img src="images/convidados/maria_luz.png"
									style="width: 134px; height: 125px;" alt="Foto 6" /></td>
								<td><label class="nomeConvidado">Maria da Luz F. Leal</label><br />
									Mestre em Gest�o de Ci�ncia e Tecnologia em Sa�de pela Funda��o
									Oswaldo Cruz, vice-diretora de Qualidade de Bio-Manguinhos.
									Ex-diretora (1997 a 1999), vice-diretora de Produ��o
									(1999-2006) e gerente de produ��o de vacinas (1989 a 1997) de
									Bio-Manguinhos. Possui especializa��es pelo Instituto de
									Pesquisa de Poliomielite do Jap�o (JPRI, na sigla em ingl�s) e
									pela Merck Sharp Dhome Research Laboratories).</td>
							</tr>
						</table>
					</li>
					<li>
						<table cellpadding="5" cellspacing="10" border="0">
							<tr>
								<td valign="top"><img src="images/convidados/antonio_padua.png"
									style="width: 137px; height: 127px;" alt="Foto 7" /></td>
								<td><label class="nomeConvidado">Ant�nio de P�dua Barbosa</label><br />
									Vice-diretor de Produ��o de Bio-Manguinhos/Fiocruz, �
									engenheiro qu�mico pela Escola de Qu�mica da Universidade
									Federal do Rio de Janeiro (UFRJ) e especializado em
									microbiologia pela Universidade de Buenos Aires e mestre em
									Ci�ncias pelo Programa de Tecnologia de Processos Qu�micos e
									Bioqu�micos da Escola de Qu�mica da Universidade Federal do Rio
									de Janeiro. Tamb�m � doutor em Gest�o e Inova��o Tecnol�gica
									pela mesma universidade.</td>
							</tr>
						</table>
					</li>
					<li>
						<table cellpadding="5" cellspacing="10" border="0">
							<tr>
								<td valign="top"><img src="images/convidados/marcos_silva.png"
									style="width: 137px; height: 127px;" alt="Foto 8" /></td>
								<td><label class="nomeConvidado">Marcos da Silva Freire</label><br />
									Vice-diretor de Desenvolvimento Tecnol�gico de
									Bio-Manguinhos/Fiocruz, graduado em medicina veterin�ria,
									especializado em produ��o e controle da vacina contra febre
									aftosa no Centro Pan-Americano Febre Aftosa (1987) e
									propriedades do v�rus do sarampo �diagn�stico e aspectos da
									produ��o da vacina�, na London School of Hygiene Tropical
									Medicine (1989). Tamb�m � doutor em Biologia Parasit�ria pelo
									Instituto Oswaldo Cruz (IOC/Fiocruz). Acumula experi�ncia de
									mais de 28 anos em microbiologia, com �nfase na vacinologia.</td>
							</tr>
						</table>
					</li>
					<li>
						<table cellpadding="5" cellspacing="10" border="0">
							<tr>
								<td valign="top"><img src="images/convidados/ciro_quadros.png"
									style="width: 137px; height: 127px;" alt="Foto 9" /></td>
								<td><label class="nomeConvidado">Ciro de Quadros</label><br />
									M�dico, vice-presidente Executivo do Instituto Sabin.
									Ex-epidemiologista-chefe do Programa de Erradica��o da Var�ola
									da Organiza��o Mundial da Sa�de (OMS) e ex-diretor do
									Departamento de Vacinas da Organiza��o Pan-Americana da Sa�de
									(Opas). Participou do lan�amento dos programas de erradica��o
									da poliomielite, do sarampo e da rub�ola nas Am�ricas.</td>
							</tr>
						</table>
					</li>
					<li>
						<table cellpadding="5" cellspacing="10" border="0">
							<tr>
								<td valign="top"><img src="images/convidados/ralf_clemens.png"
									style="width: 135px; height: 127px;" alt="Foto 10" /></td>
								<td><label class="nomeConvidado">Ralf Clemens</label><br />
									P�s-Doutor em Medicina, vice-presidente S�nior da Takeda
									Vaccines, conselheiro independente da Funda��o Bill & Melinda
									Gates. Liderou o desenvolvimento global de mais de 25 vacinas
									na GSK e Novartis. Foi membro do International Vaccine
									Institute</td>
							</tr>
						</table>
					</li>
					<li>
						<table cellpadding="5" cellspacing="10" border="0">
							<tr>
								<td valign="top"><img
									src="images/convidados/octavio_fernandes.png"
									style="width: 135px; height: 125px;" alt="Foto 11" /></td>
								<td><label class="nomeConvidado">Octavio Fernandes</label><br />
									P�s-doutor em Gest�o de Projetos na International Atomoc Energy
									Agency (ONU, Viena), vice-presidente de Opera��es da
									Diagn�sticos da Am�rica S/A (DASA).</td>
							</tr>
						</table>
					</li>
					<li>
						<table cellpadding="5" cellspacing="10" border="0">
							<tr>
								<td valign="top"><img src="images/convidados/ogari_castro.png"
									style="width: 135px; height: 127px;" alt="Foto 12" /></td>
								<td><label class="nomeConvidado">Ogari de Castro Pacheco</label><br />
									M�dico p�s-graduado pela Universidade de S�o Paulo (USP),
									preside o laborat�rio Crist�lia. Conselheiro Titular do CIESP
									(Reg. Campinas) desde 2007 e Conselheiro Consultivo da Funda��o
									Faculdade Medicina de S�o Paulo desde 2008, � presidente da
									Abifina.</td>
							</tr>
						</table>
					</li>
					<li>
						<table cellpadding="5" cellspacing="10" border="0">
							<tr>
								<td valign="top"><img
									src="images/convidados/guilherme_genovez.png"
									style="width: 137px; height: 125px;" alt="Foto 13" /></td>
								<td><label class="nomeConvidado">Guilherme Genovez</label><br />
									Hematologista e Hemoterapeuta, diretor do Centro de Hemoterapia
									e Hematologia de St� Catarina, HEMOSC e ex-diretor da Hemorrede
									de Santa Catarina (2003-2007). Membro do Grupo de
									Assessoramento T�cnico no desenvolvimento do teste NAT no
									Brasil, implantou o Programa Nacional de Qualidade na Hemorrede
									e o NAT na Hemorrede P�blica Nacional.</td>
							</tr>
						</table>
					</li>
					<li>
						<table cellpadding="5" cellspacing="10" border="0">
							<tr>
								<td valign="top"><img
									src="images/convidados/martin_bonamino.png"
									style="width: 138px; height: 127px;" alt="Foto 13" /></td>
								<td><label class="nomeConvidado">Martin Bonamino</label><br />
									Biom�dico e doutor em Qu�mica Biol�gica pelo Instituto de
									Bioqu�mica M�dica da Universidade Federal do Rio de Janeiro
									(UFRJ), desenvolve projetos em Imunoterapia do C�ncer, Terapia
									G�nica e Diagn�stico Molecular. Pesquisador do Instituto
									Nacional do C�ncer (Inca).</td>
							</tr>
						</table>
					</li>
					<li>
						<table cellpadding="5" cellspacing="10" border="0">
							<tr>
								<td valign="top"><img
									src="images/convidados/paulo_dornelles.png"
									style="width: 137px; height: 125px;" alt="Foto 14" /></td>
								<td><label class="nomeConvidado">Paulo Dornelles Picon</label><br />
									Doutor em Cardiologia pela Universidade Federal do Rio Grande
									do Sul (UFRGS), pesquisador dos Programas de P�s Gradua��o em
									Cardiologia e Ci�ncias M�dicas da UFRGS. Coordenador do N�cleo
									de Investiga��o Cl�nica em Medicamentos(NUCLIMED) e da Comiss�o
									de Medicamentos Excepcionais e de Fontes Limitadas (COMEX) do
									HCPA, Coordenador Nacional do Projeto de Pesquisa Cl�nica BIP48
									de Bio-Manguinhos/Fiocruz e membro do Health Technology
									Assessement International (HTAi).</td>
							</tr>
						</table>
					</li>
					<li>
						<table cellpadding="5" cellspacing="10" border="0">
							<tr>
								<td valign="top"><img src="images/convidados/antonio_gomes.png"
									style="width: 136px; height: 126px;" alt="Foto 15" /></td>
								<td><label class="nomeConvidado">Antonio Gomes P. Ferreira</label><br />
									Mestre em Tecnologia de Imunobiol�gicos pela Fiocruz e
									Tecnologista S�nior da Funda��o atuando h� mais de 25 anos no
									segmento de Reagentes para Diagn�stico Laboratorial.
									Atualmente, coordena o Programa de Desenvolvimento de Reativos
									para Diagn�stico em Bio-Manguinhos.</td>
							</tr>
						</table>
					</li>
				</ul>
			</div>
			<div style="display: none;">
				<a href="#" class="next"><img src="img/proximo.png" border="0" /></a>

			</div>

		</div>
	</div>
<?php include("rodape.php"); ?>
</body>
</html>