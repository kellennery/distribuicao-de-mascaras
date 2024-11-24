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
			<!-- MODULO CONTEUDO - INICIO *** //-->
			<h2>Premia��o de 2014</h2>
			<div class="description">
				<!-- <div class="wrap-rounded_corners">
		     	<div class="top_corners">
		        <div></div>
		      </div>
				<p class="p_text">
					Em 2013, o pr�mio Oswaldo Cruz (1� lugar) foi conquistado por Flavio Rocha da Silva, do Laborat�rio de Bioqu�mica, Prote�nas e Pept�deos do IOC/Fiocruz, que apresentou o estudo <strong>�Bordetella pertussis: mapeamento e caracteriza��o dos ep�topos da toxina�pertussis�e pertactina�.�</strong>
					<br/><br/>
				</p>
				<p class="p_text"><br/></p>
				<p class="p_text">
				A gerente do projeto KIT NAT HIV/HCV de Bio-Manguinhos, Patr�cia Alvarez, ficou em 2� lugar (Pr�mio Carlos Chagas) com o resumo <strong> "Detec��o de amostras em per�odo de janela imunol�gica com kit NAT HIV/HCV: Bio-Manguinhos, visando ampliar a seguran�a transfusional no Brasil�.</strong> Katherine de Mattos, tecnologista em sa�de de Bio-Manguinhos, ganhou a 3� posi��o (Pr�mio Alcides Godoy), com o trabalho <strong>�Metabol�mica aplicada na identifica��o de potenciais alvos de interven��o terap�utica nas doen�as micobacterianas"</strong>.
				<br/><br/>
				</p>
				<p class="p_text"><br/></p>
				
				<p class="p_text">
				O Pr�mio Evandro Chagas foi concedido a Ingrid Pinheiro, jovem talento que trabalha na Se��o de Pot�ncia do Laborat�rio de Controle Microbiol�gico de Bio-Manguinhos. Ingrid apresentou o trabalho <strong>"Standardization and optimization of electrophoretic methods for the analysis of homogeneity and physicochemical characterization of recombinant human erythropoietin�</strong>.
				</p>
				<div class="bottom_corners">
        
      			</div>
			</div> -->
				<div class="wrap-rounded_corners">
					<div class="top_corners">
						<div></div>
					</div>
					<p class="p_text">
						<strong> 1� lugar - Pr�mio Oswaldo Cruz</strong></br> Patricia
						Alvarez</br> <i>Incorpora��o do alvo HBV no kit NAT brasileiro
							produzido por Bio-Manguinhos</i>
					</p>
					<p class="p_text">
						</br>
						<strong>2� lugar - Pr�mio Carlos Chagas</strong></br> Luciane
						Martins Medeiros</br> <i>Proposta de um sistema integrado de
							identifica��o e investiga��o de microorganismos no Controle de
							Qualidade em Ind�strias Farmac�uticas</i>
					</p>
					<p class="p_text">
						</br>
						<strong>3� lugar - Pr�mio Alcides Godoy</strong></br> Rafael de
						Oliveira Resende</br> <i>High-throughput cloning and expression of
							human ABC transporters in Baculovirus/ Insect Cell system
							customized for X-ray crystallography studies</i>
					</p>
					<p class="p_text">
						<br />
					</p>

					<p class="p_text">
						</br>
						<strong>Jovem Talento - Pr�mio S�rgio Arouca</strong></br> Periela
						da Silva Vasconcelos Sousa</br> <i>Padroniza��o de uma metodologia
							de ensaio na plataforma de microarranjos l�quidos utilizando
							s�filis como modelo</i>
					</p>
					<p class="p_text">
						</br>
						<strong>Jovem Talento -Pr�mio Evandro Chagas</strong></br>
						Izabella Buty da S. Corr�a</br> <i>Effect of zinc on the
							structural stability of pneumococcal surface antigen A (PsaA)</i>
					</p>
					<p class="p_text">
						</br>
						<strong>Jovem Talento - Pr�mio Henrique Penna</strong></br>
						Vin�cius da Cunha Lisboa</br> <i>Clonagem e express�o de anticorpo
							monoclonal anti-CD20 recombinante - primeiros passos para
							desenvolvimento de novos anticorpos terap�uticos contra o c�ncer</i>
					</p>
					<div class="bottom_corners"></div>
				</div>
				<p class="p_text">
					<a href="controller.php?modulo=premisacao2013"
						style="color: #000000;">Os vencedores de 2013</a>
				</p>
				<br />
				<br />

				<!--  <p class="p_text"><strong><span style="letter-spacing: 0.1em;font-size:13px;"> Os vencedores de 2014 ganhar�o:</span></strong><br/> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" class="image_p" src="images/next.png" />&nbsp;Pr�mio Oswaldo Cruz (1� lugar); <br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" class="image_p" src="images/next.png" />&nbsp;Carlos Chagas (2� lugar); <br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" class="image_p" src="images/next.png" />&nbsp;Alcides Godoy (3� lugar).
					
			</p>
			 </div>
			 <div class="cleardiv"></div>
			<div class="description">
			<p class="p_text">Os melhores trabalhos de Jovem Talento Cient�fico (at� 26 anos de idade) receber�o: <br/> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" class="image_p" src="images/next.png" />&nbsp;Pr�mio Henrique de Azevedo Penna; <br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" class="image_p" src="images/next.png" />&nbsp;Pr�mio Evandro Chagas; <br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" class="image_p" src="images/next.png" />&nbsp;Pr�mio S�rgio Arouca.
			</p> 
			<p class="p_text"><br/></p>
			<p class="p_text"><i style="font-size:11px;">*O Jovem Talento dever� ser o primeiro autor do trabalho para fazer jus ao pr�mio.</i></p>   
			</div>-->
				<div class="cleardiv"></div>
				<!-- MODULO CONTEUDO - FINAL *** //-->
			</div>
		</div>
<?php include("rodape.php"); ?>


</body>
</html>