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
	<?php include("quadro_mensagem.php"); ?>
	<!-- MODULO CONTEUDO - INICIO *** //-->
			<h2>Convidados e Palestrantes</h2>


			<!--<div class="div_palestrante">
		  
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/carlos-augusto-grabois-gadelha.jpg" />
				<span class="palestrante_nome">Carlos Augusto Grabois Gadelha</span><br/>
				Economista e doutor em Economia pelo Instituto de Economia da Universidade Federal do Rio de Janeiro (UFRJ), Secret�rio de Ci�ncia, Tecnologia e Insumos Estrat�gicos do Minist�rio da Sa�de, Coordenador do Grupo de Pesquisa sobre Complexo Industrial e Inova��o em Sa�de (GIS) e Coordenador geral do Mestrado Profissional em Pol�tica e Gest�o de Ci�ncia, Tecnologia e Inova��o em Sa�de da Ensp/Fiocruz. Exerceu o cargo de Vice-presidente de Produ��o e Inova��o em Sa�de da Funda��o Oswaldo Cruz, entre 2007 e 2010.
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/paulo-gadelha.jpg" />
				<span class="palestrante_nome">Paulo Gadelha</span><br/>
				Presidente da Funda��o Oswaldo Cruz, doutor em Sa�de P�blica pela Escola Nacional de Sa�de P�blica (Ensp),  presidiu a Associa��o de M�dicos Residentes do Rio de Janeiro (Amererj) e a Associa��o Nacional de M�dicos Residentes (ANMR). Com experi�ncia em pesquisa e doc�ncia, foi respons�vel pela cria��o da Casa de Oswaldo Cruz (COC/Fiocruz). Implementou e coordenou o Museu da Vida, de 1985 a 1997. � um dos membros da rede internacional de pesquisa para combater a falta de medicamentos eficazes para doen�as como mal�ria, leishmaniose e mal de Chagas (DND-I).
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/pedro-lins-palmeira-filho.jpg" />
				<span class="palestrante_nome">Pedro Lins Palmeira Filho</span><br/>
				Graduado em engenharia qu�mica pela UFRJ, mestre em administra��o pela Pontif�cia Universidade Cat�lica (PUC/Rio) e doutor em gest�o e inova��o tecnol�gica pela UFRJ. Desempenhou as fun��es de chefe e gerente de setor na Bayer S.A., no Brasil e na Alemanha (1983 -1998).  Desde 1998 desenvolve suas atividades profissionais no Banco Nacional de Desenvolvimento Econ�mico e Social (BNDES), junto ao Complexo Industrial da Sa�de, tendo a fun��o de Chefe de Departamento na �rea industrial no Departamento de Produtos Intermedi�rios Qu�micos e Farmac�uticos.
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/artur-couto.jpg" />
				<span class="palestrante_nome">Artur Couto</span><br/>
				Diretor do Instituto de Tecnologia em Imunobiol�gicos (Bio-Manguinhos/Fiocruz), desde maio de 2009. Possui experi�ncia em gest�o de sa�de p�blica, e planejamento e controle de produ��o. Graduado em administra��o com especializa��o em planejamento, programa��o e controle de produ��o e p�s-gradua��o em administra��o p�blica pela Funda��o Get�lio Vargas (FGV), mba executivo pela COPPEAD/UFRJ e mestrado em economia pela Universidade Candido Mendes (Ucam).
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/akira-homma.jpg" />
				<span class="palestrante_nome">Akira Homma</span><br/>
				Doutor em Ci�ncias pelo Departamento de Medicina Preventiva da Faculdade de Medicina da Universidade de S�o Paulo (USP), graduado em Medicina Veterin�ria (UFF) e em Administra��o de Empresas pelo Instituto de Treinamento e Desenvolvimento de Executivos (IDCE). � p�s-graduado em Virologia pela Baylor College of Medicine e membro dos comit�s t�cnicos do Programa de Imuniza��es (OPAS/OMS), do PNI. Foi Diretor de Bio-Manguinhos por 23 anos em dois per�odos, Presidente e Vice-presidente da Fiocruz, Ex-presidente e membro do Comit� Executivo do Developing Countries Vaccine Manufacturers Network (DCVMN). Foi Assessor Regional de Biol�gicos para a regi�o das Am�ricas pela OPAS. Atualmente, � Presidente do Conselho Pol�tico e Estrat�gico de Bio-Manguinhos/Fiocruz e Diretor-presidente do IBMP/Paran� e membro do Comit� T�cnico-Cient�fico da Hemobr�s.
				<img src="images/tracejado.png" alt="" />
			</p>			
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/reinaldo-de-menezes-martins.jpg" />
				<span class="palestrante_nome">Reinaldo de Menezes Martins</span><br/>
				� m�dico pediatra, chefiou o Servi�o de Pediatria do Hospital da Lagoa durante 15 anos. Foi Presidente da Sociedade Brasileira de Pediatria (SBP), membro do Comit� T�cnico Assessor em Imuniza��es do Minist�rio da Sa�de e da Secretaria de Sa�de do Rio de Janeiro e do Grupo sobre Farmacovigil�ncia de Vacinas do Council for International Organizations of Medical Sciences (CIOMS/WHO) e do Immunization Practices Advisory Committee (IPAC/WHO). Atualmente � Consultor Cient�fico S�nior de Bio-Manguinhos/Fiocruz.
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/claudio-maierovitch-pessanha-henriques.jpg" />
				<span class="palestrante_nome">Cl�udio Maierovitch P. Henriques</span><br/>
				Gestor p�blico do Minist�rio do Planejamento, m�dico, mestre em Medicina Preventiva e Social, dirige atualmente o Departamento de Vigil�ncia de Doen�as Transmiss�veis da Secretaria de Vigil�ncia em Sa�de do Minist�rio da Sa�de, foi secret�rio municipal de sa�de de Santos, Diretor Presidente da Anvisa e coordenou a Comiss�o de Incorpora��o de Tecnologias do Minist�rio da Sa�de.
				<img src="images/tracejado.png" alt="" />
			</p>			
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/carla-domingues.jpg" />
				<span class="palestrante_nome">Carla Domingues</span><br/>
				Coordena o Programa do Programa Nacional de Imuniza��es do Minist�rio da Sa�de (PNI), respons�vel pela organiza��o da pol�tica nacional de vacina��o da popula��o brasileira, desde junho de 2011. Foi diretora adjunta do Departamento de Vigil�ncia Epidemiol�gica, de 2009 a 2012. Atua na �rea de sa�de p�blica, com experi�ncia na �rea vigil�ncia, imuniza��es e doen�as transmiss�veis.
				<img src="images/tracejado.png" alt=""  />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/leonardo-paiva.jpg" style="float: left;height:150px;"/>
				<span class="palestrante_nome">Leonardo Paiva</span><br/>
				Pesquisador em Tecnologia e Inova��o do Instituto Nacional de Metrologia, Normaliza��o e Qualidade Industrial � INMETRO. Atualmente � o Secret�rio-Adjunto da Secretaria de Ci�ncia, Tecnologia e Insumos Estrat�gicos do Minist�rio da Sa�de. Possui mestrado em Tecnologia em Imunobiol�gicos por Bio-Manguinhos/Funda��o Oswaldo Cruz, com �nfase em an�lise estrat�gica de ind�strias, atuando principalmente nos seguintes temas: Complexo Industrial da Sa�de, Desenvolvimento Tecnol�gico e Inova��o.
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/pedro-barbosa.jpg" />
				<span class="palestrante_nome">Pedro Barbosa</span><br/>
				Graduado em Medicina pela Universidade do Estado do Rio de Janeiro (1979), mestre em Administra��o pela Funda��o Get�lio Vargas (1993) e doutor em Sa�de P�blica pela Escola Nacional de Sa�de P�blica (Ensp/Fiocruz). � Tecnologista S�nior da Fiocruz, atuando como professor, pesquisador e consultor. Entre as principais �reas de interesse e atua��o encontram-se: gest�o hospitalar, planejamento em sa�de e gest�o da inova��o em sa�de. Tamb�m � professor e pesquisador na �rea de Planejamento e Gest�o em Sa�de, Coordenador do curso de Especializa��o em Gest�o Hospitalar,  Coordenador de Desenvolvimento e Gest�o e Vice-presidente de Gest�o e Desenvolvimento Institucional.
				<img src="images/tracejado.png" alt="" />
			</p>

			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/mario-santos-moreira.jpg" width="113" />
				<span class="palestrante_nome">Mario Santos Moreira</span><br/>
				Possui gradua��o em Administra��o de Empresas pela Universidade Gama Filho (1986), P�s-gradua��o em Administra��o P�blica pela FGV - EBAPE (1993), em Marketing pela UFRJ COPPEAD (1997); Mestrado em Sa�de P�blica pela Funda��o Oswaldo Cruz (2002) e Mestrado em Gest�o da Inova��o e Tecnologia pela Sussex University (2005). � Analista em C&T em Sa�de da Fiocruz, ocupando os cargos de vice-diretor do Instituto Carlos Chagas (Fiocruz-PR), Coordenador de Gest�o do Cons�rcio Tecpar - Hemobr�s Fiocruz e Presidente do Conselho Curador da Funda��o para o Desenvolvimento Cient�fico e Tecnol�gico em Sa�de - Fiotec.
				<img src="images/tracejado.png" alt="" />
			</p>			
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/carlos-medicis-morel.jpg" />
				<span class="palestrante_nome">Carlos Medicis Morel</span><br/>
				Membro titular da Academia Brasileira de Ci�ncias, � m�dico pela UFPE e doutor em Ci�ncias pelo Instituto de Biof�sica Carlos Chagas Filho da UFRJ. Pesquisador da Fiocruz desde 1978, foi Diretor do IOC (1985-1989) e Presidente da Fiocruz (1993-1997). Foi Diretor do Programa Especial de Pesquisa e Treinamento em Doen�as Tropicais (TDR) na Organiza��o Mundial da Sa�de em Genebra (1998 -2004).  Coordena atualmente a implanta��o do Centro de Desenvolvimento Tecnol�gico em Sa�de (CDTS) da Fiocruz e � professor permanente do Programa de P�s-Gradua��o em Pol�ticas P�blicas, Estrat�gias e Desenvolvimento (PPED) do Instituto de Economia da UFRJ.
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/marco-aurelio-krieger.jpg" />
				<span class="palestrante_nome">Marco Aurelio Krieger</span><br/>
				Graduado em Ci�ncias Biol�gicas pela Universidade Federal do Paran� (1987), mestre em Ci�ncias Biol�gicas (Biof�sica) pela Universidade Federal do Rio de Janeiro (1989) e doutor  em Ci�ncias Biol�gicas (Biof�sica) pela mesma universidade (1997). Atualmente � pesquisador Titular da Fiocruz e Bolsista de Produtividade n�vel 1 do CNPq. Possu� oitenta publica��es plenas em revistas indexadas, sendo atualmente  vice diretor do Instituto Carlos Chagas, (Fiocruz Paran�) e  Coordenador T�cnico da Planta de Produ��o e Desenvolvimento de Insumos Para Diagn�stico Cons�rcio Fiocruz/Hemobr�s/Tecpar,  al�m de coordenar a Rede de Insumos para Diagn�stico (RID) do Programa de Desenvolvimento Tecnol�gico de Insumos para Sa�de (PDTIS) da Funda��o. Tem experi�ncia na �rea de Gen�tica, com �nfase em Parasitologia Molecular, atuando principalmente nos seguintes temas: Trypanosoma cruzi, express�o g�nica, gen�mica funcional, diferencia��o celular e utiliza��o de t�cnicas de Biologia Molecular para o desenvolvimento de insumos para testes de diagn�stico.
				<img src="images/tracejado.png" alt="" />
			</p>			
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/antonio-de-padua-barbosa.jpg" />
				<span class="palestrante_nome">Ant�nio de P�dua Barbosa</span><br/>
				Vice-diretor de Produ��o de Bio-Manguinhos/Fiocruz, � engenheiro qu�mico pela Escola de Qu�mica da Universidade Federal do Rio de Janeiro (UFRJ) e especializado em microbiologia pela Universidade de Buenos Aires e mestre em Ci�ncias pelo Programa de Tecnologia de Processos Qu�micos e Bioqu�micos da Escola de Qu�mica da Universidade Federal do Rio de Janeiro. Tamb�m � doutor em Gest�o e Inova��o Tecnol�gica pela mesma universidade.
				<img src="images/tracejado.png" alt="" />
			</p>			
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/marcos-da-silva- freire.jpg" />
				<span class="palestrante_nome">Marcos da Silva Freire</span><br/>
				Vice-diretor de Desenvolvimento Tecnol�gico de Bio-Manguinhos/Fiocruz, graduado em medicina veterin�ria, especializado em produ��o e controle da vacina contra febre aftosa no Centro Pan-Americano Febre Aftosa (1987) e propriedades do v�rus do sarampo �diagn�stico e aspectos da produ��o da vacina�, na London School of Hygiene Tropical Medicine (1989). Tamb�m � doutor em Biologia Parasit�ria pelo  Instituto Oswaldo Cruz (IOC/Fiocruz). Acumula experi�ncia de mais de 28 anos em microbiologia, com �nfase na vacinologia.
				<img src="images/tracejado.png" alt="" />
			</p>			
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/isabella-ballalai.jpg" />
				<span class="palestrante_nome">Isabella Ballalai</span><br/>
				Presidente da Sociedade Brasileira de Imuniza��es (Rio de Janeiro) e Diretora da Sociedade Brasileira de Imuniza��es. Tamb�m � membro do Departamento de Imuniza��es da Sociedade Brasileira de Infectologia (SBI) e membro do Comit� T�cnico Assessor em Imuniza��es do Estado do Rio de Janeiro (CTAI/RJ).
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/ogari-de-castro-pacheco.jpg" />
				<span class="palestrante_nome">Ogari de Castro Pacheco</span><br/>
				M�dico, p�s graduado pela Universidade de S�o Paulo (1964), Diretor-presidente do laborat�rio Crist�lia Produtos Qu�micos Farmac�uticos Ltda., desde a sua funda��o, em 1972. Atualmente, exerce o cargo de Presidente da Associa��o Brasileira das Ind�strias de Qu�mica Fina (Abifina) e conselheiro titular do Centro das Ind�strias do Estado de S�o Paulo (Ciesp/ Regional Campinas) desde 2007 e conselheiro consultivo da Funda��o Faculdade Medicina de S�o Paulo (FFM) desde 2008.
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/rino-rappuoli.jpg" />
				<span class="palestrante_nome">Rino Rappuoli</span><br/>
				Chefe Global de Pesquisa de Vacinas da Novartis Vaccines and Diagnostics e fica baseado em Siena, It�lia. Foi chefe de P&D da Sclavo e, em seguida, Chefe de Pesquisa de Vacinas e CSO da Chiron Corporation. V�rias mol�culas que trabalhou, tornaram-se parte de vacinas licenciadas, como a vacina de genoma derivado contra o meningococo B, que foi recentemente recomendada pela EMA (European Medicinal Agency) para uma autoriza��o de comercializa��o e aprovada pela Comiss�o Europeia. Em 2013, ele foi nomeado a terceira pessoa mais influente em todo o mundo no campo das vacinas.
				<img src="images/tracejado.png" alt="" />
			</p>	
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/wim-degrave.jpg" />
				<span class="palestrante_nome">Wim Degrave</span><br/>
				Graduado em Qu�mica pela Rijksuniversiteit Gent, na B�lgica (1980) e doutorado em Biologia Molecular pela mesma universidade (1985). Atualmente � pesquisador titular do Instituto Oswaldo Cruz (IOC/ Fiocruz), no Laborat�rio de Gen�mica Funcional e Bioinform�tica. Desde 2002 � assessor da Vice-presid�ncia de Pesquisa e Laborat�rios de Refer�ncia na Fiocruz e coordenador do Programa de Desenvolvimento de Insumos para a Sa�de (PDTIS). Tem curso de especializa��o e mestrado em Gest�o de Projetos e certifica��o PMP desde 2005. Possui experi�ncia em biotecnologia, gen�mica aplicada de microrganismos e parasitos e bioinform�tica.
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/amilcar-tanuri.jpg" />
				<span class="palestrante_nome">Amilcar Tanuri</span><br/>
				M�dico pela Universidade Federal do Rio de Janeiro (UFRJ) em 1982, mestre em Biof�sica (1985) e doutor em Gen�tica (1990) pela mesma universidade. Atualmente � professor Titular da UFRJ e � Chefe do Laborat�rio de Virologia Molecular. Trabalhou como Research Fellow no Center for Disease Control (CDC) em Atlanta (2003 a 2006), dentro do Global AIDS Program (GAP) atuando no combate ao HIV/AIDS na Africa Sub-Saariana em Mocambique,Angola, Rwanda, Nigeria, Ethiopia, Botswana, Africa do Sul, Tanzania, e RDC (Congo). Em 2005,  colaborou com o governo angolano no combate � epidemia de febre hemorr�gica de Marburg. Em 2006, foi convidado para assumir uma posi��o de Associated Research Scientist na Mailman School of Public Health (Coulmbia University) para ajudar o programa ICAP no estabelecimento de laborat�rios na Africa Sub-Saariana.
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/antonio-gomes-p-ferreira.jpg" />
				<span class="palestrante_nome">Antonio Gomes P. Ferreira</span><br/>
				Mestre em Tecnologia de Imunobiol�gicos pela Fiocruz e Tecnologista S�nior da Funda��o atuando h� mais de 25 anos no segmento de Reagentes para Diagn�stico Laboratorial. Atualmente, coordena o Programa de Desenvolvimento de Reativos para Diagn�stico em Bio-Manguinhos.
				<img src="images/tracejado.png" alt="" />
			</p>	
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/claude-pirmez.jpg" />
				<span class="palestrante_nome">Claude Pirmez</span><br/>
				M�dica, com resid�ncia e mestrado em anatomia patol�gica pela Universidade Federal do Rio de Janeiro (UFRJ). Cursou doutorado em ci�ncias biol�gicas na UFRJ e  parte na Universidade da Calif�rnia (UCLA) nos Estados Unidos, e em seguida fez est�gios em Berlim e Hamburgo. Em 2008, fez um MBA Executivo no Instituto de P�s-gradua��o e Pesquisa em Administra��o da Universidade Federal do Rio de Janeiro (Coppead/UFRJ). �  pesquisadora titular na Fiocruz, tendo exercido os cargos de Chefe do Departamento de Bioqu�mica e Biologia Molecular (2000-2003), Vice-diretora do Instituto Oswaldo Cruz (2005-2008) e Vice-presidente de Pesquisa e Laborat�rios de Refer�ncia (2009-2013).
				<img src="images/tracejado.png" alt="" />
			</p>		
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/cristina-possas.jpg" />
				<span class="palestrante_nome">Cristina Possas</span><br/>
				Doutora em Sa�de P�blica pela Escola Nacional de Sa�de P�blica (Ensp/Fiocruz) e p�s-doutora pela Universidade de Harvard, onde atuou como Cientista Visitante, Takemi Fellow e Fulbright Fellow. Atualmente � Assessora Cient�fica S�nior, membro do Conselho Pol�tico Estrat�gico de Bio-Manguinhos e coordenadora do Programa de P�s-Gradua��o Stricto Sensu em Pesquisa Cl�nica (Mestrado/Doutorado) pelo Instituto de Pesquisa Cl�nica Evandro Chagas (Ipec/Fiocruz).
				<img src="images/tracejado.png" alt="" />
			</p>		
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/ellen-jessouroun.jpg" />
				<span class="palestrante_nome">Ellen Jessouroun</span><br/>
				Bi�loga com Mestrado em microbiologia e  Doutorado em Biologia Celular e Molecular. Antes de ingressar na Fiocruz,  trabalhou em Microbiologia Industrial na Industria Cervejeira,  usinas de a��car e �lcool e empresa de controle de qualidade de �gua.   Trabalha desde 1992 em Bio-Manguinhos em desenvolvimento tecnol�gico de vacinas bacterianas com foco principal em vacinas contra o meningococo. Coordena atualmente o Programa de Desenvolvimento de Vacinas Bacterianas junto a Vice-diretoria de Desenvolvimento Tecnol�gico de Bio-Manguinhos.
				<img src="images/tracejado.png" alt="" />
			</p>			
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/ernesto-marques.jpg" />
				<span class="palestrante_nome">Ernesto Marques</span><br/>
				M�dico graduado pela Universidade Federal de Pernambuco (UFPE) em 1993 e doutor em Farmacologia e Ci�ncias Moleculares pela The Johns Hopkins University School of Medicine em (1999). Foi Professor Assistente do Departamento de Medicina da The Johns Hopkins University School of Medicine (2005 -2009). Atualmente � Pesquisador da Fiocruz, Professor associado da University of Pittsburgh e membro do Center for Vaccine Research.
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/francisco-de-paula-pinheiro.jpg" />
				<span class="palestrante_nome">Francisco de Paula Pinheiro</span><br/>
				M�dico (1958) e doutor (1974) pela Universidade Federal do Par� (UFPara). Research Fellow Yale University (1961-62), Chefe da Virologia (1963-1979) e Diretor (1979-1981) do Instituto Evandro Chagas (Ipec), em Bel�m. Tamb�m foi  Assessor Regional em Viroses da Pan American Health Organization (PAHO), em Washington (1981-1996). Atuou como consultor regional em viroses/enfermidades infecciosas emergentes na PAHO (1997 -1999). Possui 151 publica��es cient�ficas e cap�tulos de livros.
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/helena-keico-sato.jpg" />
				<span class="palestrante_nome">Helena Keico Sato</span><br/>
				Diretora T�cnica da Divis�o de Imuniza��o do Centro de Vigil�ncia Epidemiol�gica (CVE/CCD/SES-SP) e Doutora em Pediatria pelo Departamento de Pediatria da FMUSP. Tamb�m � membro da Comiss�o Permanente de Assessoramento em Imuniza��es da Secretaria Estadual de Sa�de (SES/SP) e do Comit� T�cnico Assessor do PNI.
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/joao-b-risi-junior.jpg" />
				<span class="palestrante_nome">Jo�o B Risi Junior</span><br/>
				M�dico de carreira do Minist�rio da Sa�de, especializado em vigil�ncia epidemiol�gica no Centers for Disease Control (CDC). Coordenou a Campanha de Erradica��o da Var�ola nos Estados do Rio de Janeiro e da Guanabara. Participou do Plano Nacional de Controle da Poliomielite e da cria��o do Programa Nacional de Imuniza��es (PNI).
				<img src="images/tracejado.png" alt="" />
			</p>			
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/marcia-arissawa.jpg" />
				<span class="palestrante_nome">Marcia Arissawa</span><br/>
				Doutorado em Qu�mica pela PUC-RJ, p�s-doutorado em Modelagem Molecular no CBPF, atualmente � respons�vel pelo Laborat�rio de Tecnologia de Anticorpos Monoclonais de Bio-Manguinhos.
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/maria-cristina-c-brandileone.jpg" />
				<span class="palestrante_nome">Maria Cristina C. Brandileone</span><br/>
				Pesquisadora do N�cleo de Meningites, Pneumonias e Infec��es Pneumoc�cicas do Instituto Adolfo Lutz (NMPI/ IAL), com experi�ncia em bacteriologia das doen�as de transmiss�o respirat�ria. Doutora em Ci�ncia na Universidade Federal de S�o Paulo (Unifesp), � consultora da Organiza��o Pan-Americana de Sa�de (Opas)  e Organiza��o Mundial da Sa�de (OMS), e Coordenadora de Projetos e Programas Nacionais e Internacionais. Atualmente ocupa o cargo de Diretora do Centro de Bacteriologia (NMPI/ IAL).
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/maria-sotomi.jpg" />
				<span class="palestrante_nome">Maria Sotomi</span><br/>
				Graduada em Ci�ncias Biom�dicas (1981) e Doutora pela P�s-gradua��o de Imunologia do Instituto de Ci�ncias Biom�dicas da USP (1991). Cursou P�s-doutorado no Instituto Pasteur, na Fran�a (1992-1994). Ingressou em 2002 como Professora Doutora pelo Departamento de Dermatologia da Faculdade de Medicina da Universidade de S�o Paulo (FMUPS).  
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/mitemayer-galvao.jpg" />
				<span class="palestrante_nome">Mitemayer Galv�o</span><br/>
				Graduado em medicina pela Escola Baiana de Medicina e Sa�de P�blica (1979), mestre em Patologia Humana pela Universidade Federal da Bahia (1986) e Doutor em Patologia Humana pela Universidade Federal da Bahia (1993). Atualmente � Pesquisador titular da Funda��o Oswaldo Cruz, Professor associado n�vel III da Universidade Federal da Bahia, Professor titular da Escola Bahiana de Medicina e Sa�de P�blica e Professor Visitante associado da Universidade de Yale. � Pesquisador categoria 1A do Conselho Nacional de Desenvolvimento Cient�fico e Tecnol�gico  (CNPq).
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/nadia-maria-batoreu.jpg" />
				<span class="palestrante_nome">Nadia Maria Batoreu</span><br/>
				Bi�loga pela Universidade Federal Fluminense (Uff), com especializa��o em microbiologia pela Universidade Federal do Rio de Janeiro (UFRJ), mestre em ci�ncias pelo curso de Biologia Celular e Molecular do Instituto Oswaldo Cruz (IOC/Fiocruz) e doutoranda em Vigil�ncia Sanit�ria no Instituto Nacional de Controle de Qualidade em Sa�de  (INCQS/Fiocruz). � Tecnologista S�nior em Bio-Manguinhos e Gerente do Programa de Biof�rmacos, da Vice-diretoria de Desenvolvimento Tecnol�gico.
				<img src="images/tracejado.png" alt="" />
			</p>
			<p class="p_palestrante">
				<img class="img_palestrante" src="fotos/paulo-dornelles-picon.jpg" />
				<span class="palestrante_nome">Paulo Dornelles Picon</span><br/>
				Mestre e doutor em cardiologia pela UFRGS. Professor titular de Farmacologia Cl�nica da Universidade de Passo Fundo e Professor associado do Departamento de Medicina Interna da UFRGS. Tamb�m  � Pesquisador dos Programas de P�s-gradua��o em Cardiologia e Ci�ncias M�dicas da UFRGS, idealizador e Coordenador do Projeto Nacional de Protocolos Cl�nicos e Diretrizes Terap�uticas do Minist�rio da Sa�de e Pesquisador Coordenador Nacional do Projeto de Pesquisa Cl�nica BIP48. Membro da Health Technology Assessement International (HTAi).
  		       </p></div>-->
			<!-- ************************************************************************************************ -->
			<div class="description">
				<p class="p_text">Conte�do em Revis�o.</p>
				</br>
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />

			</div>


		</div>
	</div>
<?php include("rodape.php"); ?>
</body>
</html>