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
	<? 
	if(isset($_REQUEST['acao'])){
	$acao= $_REQUEST['acao'];
	switch($acao){
	case'ver':
	include('ver.php');
	break;
	}
	}else{
	include('apresentacao.php');
	}
	?></td>

                          </tr>
                          </table>
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