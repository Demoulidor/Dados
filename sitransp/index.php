<!DOCTYPE html>
<!-- Copyright 2013 de [LEONARDO EUSTÁQUIO DE OLIVEIRA, ANTONIO FIRMINO DE SÁ LINHARES E DENIS MOURA DE LIMA] Este arquivo é parte do programa do [SITRANSP - SISTEMA DO ÍNDICE DE TRANSPARÊNCIA PARLAMENTAR]. O [SITRANSP - SISTEMA DO ÍNDICE DE TRANSPARÊNCIA PARLAMENTAR] é um software livre; você pode redistribuí-lo e/ou modificá-lo dentro dos termos da [GNU General Public License OU GNU Affero General Public License] como publicada pela Fundação do Software Livre (FSF); na versão 3 da Licença. Este programa é distribuído na esperança que possa ser útil, mas SEM NENHUMA GARANTIA; sem uma garantia implícita de ADEQUAÇÃO a qualquer MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a licença para maiores detalhes. Você deve ter recebido uma cópia da [GNU General Public License OU GNU Affero General Public License], sob o título "LICENCA.txt", junto com este programa, se não, acesse http://www.gnu.org/licenses/ -->
<html lang="pt_br">
<head>
<title>Sitransp Brasil - Transparência Parlamentar</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Molengo_400.font.js"></script>
<script type="text/javascript" src="js/Expletus_Sans_400.font.js"></script>
</head>
<body id="page5">
	<div class="body1">
		<div class="main">
			<header>
				<div class="wrapper">
					<nav>
						<ul id="menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="sitransp.php">O que é o Sitransp?</a></li>
							<li class="end"><a href="contato.php">Contato</a></li>
						</ul>
					</nav>
					<ul id="icons">
						<li><a href="https://pt-br.facebook.com/Adoteumdistrital" target="_blank"><img src="images/icon1.jpg" alt=""></a></li>
						<li><a href="#"><img src="images/icon2.jpg" alt=""></a></li>
						<li><a href="http://www.twitter.com/adote1distrital" target="_blank"><img src="images/icon3.jpg" alt=""></a></li>
					</ul>
				</div>
				<div class="wrapper">
					<h1><a href="index.php" id="logo">Sitransp</a></h1>
				</div>
				<div id="slogan">
					Sistema do Índice de Transparência Parlamentar<span>Se não houver fiscalização não haverá transparência!</span>
				</div>

			</header><div class="ic">Sitransp</div>
		</div>
	</div>
	<div class="body2">
		<div class="main">
			<section id="content">
            <div class="wrapper">
			  <img src="images/img_media.jpg" alt="" width="980" height="70">
</div>
				<div class="box1">
					<div class="wrapper">
						<article class="col1">
						  <div class="pad_left1">
						    <h2 class="pad_bot1">Ranking dos Deputados</h2>
						  </div>
<?
require 'conexoes/sitransp.php';
?>
<?php
//######### INICIO Paginação
        $numreg = 30; // Quantos registros por página vai ser mostrado
        if (!isset($pg)) {
                $pg = 0;
        }
        $inicial = $pg * $numreg;
//######### FIM dados Paginação
        // Faz o Select pegando o registro inicial até a quantidade de registros para página
        $sql = mysql_query("SELECT * FROM deputados ORDER BY ranking_deputado ASC LIMIT $inicial, $numreg");
        // Serve para contar quantos registros você tem na seua tabela para fazer a paginação
        $sql_conta = mysql_query("SELECT * FROM deputados");
        $quantreg = mysql_num_rows($sql_conta); // Quantidade de registros pra paginação
        include("paginacao.php"); // Chama o arquivo que monta a paginação. ex: << anterior 1 2 3 4 5 próximo >>
        echo "<br><br>"; // Vai servir só para dar uma linha de espaço entre a paginação e o conteúdo
        while ($aux = mysql_fetch_array($sql)) {
                /* Ai o resto é com voces em montar como deve parecer o conteúdo */
?>                          
						  <div class="wrapper">
                          <table width="200" height="180" cellpadding="0" cellspacing="0" border="0" align="left">
                          <tr>
                            <td width="86"><div class="wrapper">
								<span class="date<? echo $aux['ranking_deputado'];?>"></span>
							</div></td>
                            <td width="55"><span class="call2">Nota</span></td>
                          <td width="59"><h2><? echo $aux['nota_deputado'];?></h2>
                          </td>
                          </tr>
                          </table>
								<figure class="left marg_right1"><img src="<? echo $aux['imagem_deputado'];?>" alt="<? echo utf8_encode ($aux['nome_deputado']);?>"></figure>
								<p class="pad_top2"><span class="call3"><? echo utf8_encode ($aux['nome_deputado']);?> (<? echo utf8_encode ($aux['partido_deputado']);?>)</span><a href="dep.php?acao=ver&Cod_deputado=<?=strtoupper ($aux['Cod_deputado'])?>" target="_parent" class="button"><span><span>Visualizar indicadores</span></span></a></p>
						  </div>
<?	
}
?>
					  </article>
						
					</div>
				</div>
			</section>
			<footer>
				<div class="wrapper">
					<div class="pad1">
						<div class="pad_left1">
							<div class="wrapper">
							  <article class="col_1">
									<h3>Mais do Sitransp:</h3>
									<p class="col_address"><strong>Endereço:
								</strong></p>
							    <p>SHIGS 704, Bloco C, casa 67, Asa Sul, Brasília/DF. CEP: 70.331.753<br>
									    <strong>Telefone:</strong> &nbsp;55 61 3224-4368<br>
										  <strong>E-mail: </strong><a href="mailto:contato@sitransp.org.br">contato@sitransp.org.br</a></p>
								</article>
							</div>
							<div class="wrapper">
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>