<!-- Copyright 2013 de [LEONARDO EUSTÁQUIO DE OLIVEIRA, ANTONIO FIRMINO DE SÁ LINHARES E DENIS MOURA DE LIMA] Este arquivo é parte do programa do [SITRANSP - SISTEMA DO ÍNDICE DE TRANSPARÊNCIA PARLAMENTAR]. O [SITRANSP - SISTEMA DO ÍNDICE DE TRANSPARÊNCIA PARLAMENTAR] é um software livre; você pode redistribuí-lo e/ou modificá-lo dentro dos termos da [GNU General Public License OU GNU Affero General Public License] como publicada pela Fundação do Software Livre (FSF); na versão 3 da Licença. Este programa é distribuído na esperança que possa ser útil, mas SEM NENHUMA GARANTIA; sem uma garantia implícita de ADEQUAÇÃO a qualquer MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a licença para maiores detalhes. Você deve ter recebido uma cópia da [GNU General Public License OU GNU Affero General Public License], sob o título "LICENCA.txt", junto com este programa, se não, acesse http://www.gnu.org/licenses/ -->
<?
require 'conexoes/sitransp.php';
?>
<?
$Cod_deputado = $_REQUEST['Cod_deputado'];
$sql="SELECT * FROM deputados WHERE Cod_deputado=$Cod_deputado";
$resultado = @mysql_query($sql, $conecta);
$row = mysql_fetch_array($resultado);
?>
<section id="content">
			  <div class="box1">
			    <div class="wrapper">
						<article class="col1">
							<div class="pad_left1">
								<h2><? echo utf8_encode ($row['nome_deputado']); ?></h2>
								<p class="font2">Nota <? echo utf8_encode ($row['nota_deputado']); ?></p>
							</div>
                            <div class="wrapper">
								<figure class="left marg_right1"><img src="<? echo utf8_encode ($row['imagem_deputado']); ?>" alt=""></figure>
								<p class="pad_bot1 pad_top2"><strong>Líder do <? echo utf8_encode ($row['partido_deputado']); ?> com <? echo utf8_encode ($row['bancada']); ?> deputados</strong></p>
								<p><? echo utf8_encode ($row['bio_deputado']); ?></p>
							</div>
							<a href="<? echo $row['site_deputado']; ?>" target="_blank" class="button"><span><span>Conheça mais este deputado</span></span></a>
							<div class="pad_top2"></div>
						</article>
			    </div>
                <table width="905" cellpadding="4" cellspacing="4" border="4" align="center" bordercolor="#FFFFFF">
                <tr>
                  <td height="39" colspan="3" bgcolor="#2f7d99" valign="middle" align="center"><span class="titulo_item_indice">ATUAÇÃO PARLAMENTAR DIRETA</span></td>
                  <td width="6">&nbsp;</td>
                  <td colspan="3" bgcolor="#2f7d99" valign="middle" align="center"><span class="titulo_item_indice">CONTROLE SOCIAL</span></td>
                  </tr>
                <tr class="titulo_item_conteudo">
                  <td width="315" height="40" valign="middle" bgcolor="#DBEEF4">Prestação de contas das verbas indenizatórias</td>
                  <td width="41" align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 7']); ?>" target="_blank">
              
<?php
if ($row['COL 7'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
//  echo '<img src="images/nao.png">';
}
?></a></td>
                  <td width="39" height="40" align="center" valign="middle" bgcolor="#DBEEF4">
<?php
if ($row['COL 7'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td width="314" height="40" valign="middle" bgcolor="#DBEEF4">Conselho de gestão da sociedade civil organizada </td>
                  <td width="41" align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 34']); ?>" target="_blank">
                    <?php
if ($row['COL 34'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td width="39" height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 34'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                </tr>
                <tr class="titulo_item_conteudo2">
                  <td height="40" valign="middle" bgcolor="#E9EDF4">Prestação de contas da verba de gabinete</td>
                  <td align="center" valign="middle" bgcolor="#E9EDF4"><a href="<? echo utf8_encode ($row['COL 8']); ?>" target="_blank">
              
<?php
if ($row['COL 8'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?></a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#E9EDF4"><?php
if ($row['COL 8'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td height="40" valign="middle" bgcolor="#E9EDF4"> Avaliação pela sociedade civil </td>
                  <td align="center" valign="middle" bgcolor="#E9EDF4"><a href="<? echo utf8_encode ($row['COL 35']); ?>" target="_blank">
                    <?php
if ($row['COL 35'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#E9EDF4"><?php
if ($row['COL 35'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                </tr>
                <tr class="titulo_item_conteudo">
                  <td height="40" valign="middle" bgcolor="#DBEEF4">Frequência e justificativa de faltas</td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 9']); ?>" target="_blank">
              
<?php
if ($row['COL 9'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?></a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 9'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td height="40" valign="middle" bgcolor="#DBEEF4">Canais definidos para atendimento ao cidadão </td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 36']); ?>" target="_blank">
                    <?php
if ($row['COL 36'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 36'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                </tr>
                <tr>
                  <td height="40" valign="middle" bgcolor="#E9EDF4">Emendas ao orçamento e suas justificativas</td>
                  <td align="center" valign="middle" bgcolor="#E9EDF4"><a href="<? echo utf8_encode ($row['COL 10']); ?>" target="_blank">
                    <?php
if ($row['COL 10'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#E9EDF4"><?php
if ($row['COL 10'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td height="40" valign="middle" bgcolor="#E9EDF4">Estruturas funcionais que permitam o debate de temas com a sociedade </td>
                  <td align="center" valign="middle" bgcolor="#E9EDF4"><a href="<? echo utf8_encode ($row['COL 37']); ?>" target="_blank">
                    <?php
if ($row['COL 37'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#E9EDF4"><?php
if ($row['COL 37'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                </tr>
                <tr class="titulo_item_conteudo">
                  <td height="40" valign="middle" bgcolor="#DBEEF4">Possíveis alterações e relatórios de execução das emendas </td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 11']); ?>" target="_blank">
                    <?php
if ($row['COL 11'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 11'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td height="40" valign="middle" bgcolor="#DBEEF4">Canais diretos e práticos para garantir o requerimento de informações </td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 38']); ?>" target="_blank">
                    <?php
if ($row['COL 38'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 38'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  </tr>
                <tr>
                  <td height="40" valign="middle" bgcolor="#E9EDF4">Participações  e decorrências em comissões</td>
                  <td align="center" valign="middle" bgcolor="#E9EDF4"><a href="<? echo utf8_encode ($row['COL 12']); ?>" target="_blank">
                    <?php
if ($row['COL 12'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#E9EDF4"><?php
if ($row['COL 12'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="40" valign="middle" bgcolor="#DBEEF4" class="titulo_item_conteudo">Pareceres (em caso de relatoria)</td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 13']); ?>" target="_blank">
                    <?php
if ($row['COL 13'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 13'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td colspan="3" bgcolor="#2f7d99" valign="middle" align="center"><span class="titulo_item_indice">ACESSIBILIDADE DO SITE</span></td>
                  </tr>
                <tr>
                  <td height="40" valign="middle" bgcolor="#E9EDF4">Os pronunciamentos/partes no plenário</td>
                  <td align="center" valign="middle" bgcolor="#E9EDF4"><a href="<? echo utf8_encode ($row['COL 14']); ?>" target="_blank">
                    <?php
if ($row['COL 14'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#E9EDF4"><?php
if ($row['COL 14'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td height="40" valign="middle" bgcolor="#DBEEF4">Conteúdo em formato aberto</td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 41']); ?>" target="_blank">
                    <?php
if ($row['COL 41'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 41'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                </tr>
                <tr class="titulo_item_conteudo">
                  <td height="40" valign="middle" bgcolor="#DBEEF4">Ações de seu mandato quanto fiscalização
</td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 15']); ?>" target="_blank">
                    <?php
if ($row['COL 15'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 15'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td height="40" valign="middle" bgcolor="#E9EDF4"> Acesso aos portadores de necessidades especiais</td>
                  <td align="center" valign="middle" bgcolor="#E9EDF4"><a href="<? echo utf8_encode ($row['COL 42']); ?>" target="_blank">
                    <?php
if ($row['COL 42'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#E9EDF4"><?php
if ($row['COL 42'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                </tr>
                <tr>
                  <td height="40" valign="middle" bgcolor="#E9EDF4">Ações  de seu mandato quanto a representação</td>
                  <td align="center" valign="middle" bgcolor="#E9EDF4"><a href="<? echo utf8_encode ($row['COL 16']); ?>" target="_blank">
                    <?php
if ($row['COL 16'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#E9EDF4"><?php
if ($row['COL 16'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td height="40" valign="middle" bgcolor="#DBEEF4">Ferramentas de busca inteligente dentro de seu site</td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 43']); ?>" target="_blank">
                    <?php
if ($row['COL 43'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 43'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                </tr>
                <tr class="titulo_item_conteudo">
                  <td height="40" valign="middle" bgcolor="#DBEEF4">Ações de seu mandato quando a atuação legislativa</td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 17']); ?>" target="_blank">
                    <?php
if ($row['COL 17'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 17'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td height="40" colspan="3" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                  </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td colspan="3" bgcolor="#2f7d99" valign="middle" align="center"><span class="titulo_item_indice">PARTICIPAÇÃO NAS MÍDIAS DIGITAIS</span></td>
                  </tr>
                <tr class="titulo_item_conteudo">
                  <td colspan="3" bgcolor="#2f7d99" valign="middle" align="center"><span class="titulo_item_indice">ATUAÇÃO PARLAMENTAR INDIRETA</span></td>
                  <td>&nbsp;</td>
                  <td height="40" valign="middle" bgcolor="#DBEEF4">Ações parlamentares nas mídias sociais
</td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 46']); ?>" target="_blank">
                    <?php
if ($row['COL 46'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 46'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                </tr>
                <tr>
                  <td height="40" valign="middle" bgcolor="#DBEEF4">Indicações a estrutura da Casa Legislativa</td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 20']); ?>" target="_blank">
                    <?php
if ($row['COL 20'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 20'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td height="40" valign="middle" bgcolor="#E9EDF4">Comunicação com os cidadãos nas mídias sociais
</td>
                  <td align="center" valign="middle" bgcolor="#E9EDF4"><a href="<? echo utf8_encode ($row['COL 47']); ?>" target="_blank">
                    <?php
if ($row['COL 47'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#E9EDF4"><?php
if ($row['COL 47'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  </tr>
                <tr>
                  <td height="40" valign="middle" bgcolor="#E9EDF4" class="titulo_item_conteudo">Indicações ao Executivo para cargos de gestão (ministro, secretário ou diretor)</td>
                  <td align="center" valign="middle" bgcolor="#E9EDF4"><a href="<? echo utf8_encode ($row['COL 21']); ?>" target="_blank">
                    <?php
if ($row['COL 21'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#E9EDF4"><?php
if ($row['COL 21'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td height="40" valign="middle" bgcolor="#FFFFFF" class="titulo_item_conteudo">&nbsp;</td>
                  <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                  <td height="40" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
                <tr>
                  <td height="40" valign="middle" bgcolor="#DBEEF4">Posição e voto aos projetos de lei e aos principais temas da CF</td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 22']); ?>" target="_blank">
                    <?php
if ($row['COL 22'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 22'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td colspan="3" bgcolor="#2f7d99" valign="middle" align="center"><span class="titulo_item_indice">DO PROCESSO ELEITORAL</span></td>
                  </tr>
                <tr>
                  <td height="30">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td height="40" valign="middle" bgcolor="#DBEEF4" class="titulo_item_conteudo">Publica financiadores de campanha</td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4" class="titulo_item_conteudo"><a href="<? echo utf8_encode ($row['COL 50']); ?>" target="_blank">
                    <?php
if ($row['COL 50'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4" class="titulo_item_conteudo"><?php
if ($row['COL 50'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  </tr>
                <tr>
                  <td colspan="3" bgcolor="#2f7d99" valign="middle" align="center"><span class="titulo_item_indice">GOVERNANÇA DO MANDATO</span></td>
                  <td>&nbsp;</td>
                  <td height="40" valign="middle" bgcolor="#E9EDF4">Publica gastos nas eleições</td>
                  <td align="center" valign="middle" bgcolor="#E9EDF4"><a href="<? echo utf8_encode ($row['COL 51']); ?>" target="_blank">
                    <?php
if ($row['COL 51'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#E9EDF4"><?php
if ($row['COL 51'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  </tr>
                <tr>
                  <td height="40" valign="middle" bgcolor="#DBEEF4">Organograma de seu gabinete, incluindo as funções de cada servidor</td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 25']); ?>" target="_blank">
                    <?php
if ($row['COL 25'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 25'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td height="40" valign="middle" bgcolor="#DBEEF4" class="titulo_item_conteudo">Publica IRRF</td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 49']); ?>" target="_blank">
                    <?php
if ($row['COL 49'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?></a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 49'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  </tr>
                <tr class="titulo_item_conteudo">
                  <td height="40" valign="middle" bgcolor="#E9EDF4">Plano estratégico de seu mandato</td>
                  <td align="center" valign="middle" bgcolor="#E9EDF4"><a href="<? echo utf8_encode ($row['COL 26']); ?>" target="_blank">
                    <?php
if ($row['COL 26'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#E9EDF4"><?php
if ($row['COL 26'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td height="40" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                  <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                  <td height="40" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
                <tr>
                  <td height="40" valign="middle" bgcolor="#DBEEF4">Promessas de campanha</td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 27']); ?>" target="_blank">
                    <?php
if ($row['COL 27'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 27'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td height="40" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                  <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                  <td height="40" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
                <tr>
                  <td height="40" valign="middle" bgcolor="#E9EDF4" class="titulo_item_conteudo">Agenda oficial </td>
                  <td align="center" valign="middle" bgcolor="#E9EDF4"><a href="<? echo utf8_encode ($row['COL 28']); ?>" target="_blank">
                    <?php
if ($row['COL 28'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#E9EDF4"><?php
if ($row['COL 28'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td height="30">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="40" valign="middle" bgcolor="#DBEEF4">Execução das promessas de campanha </td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 29']); ?>" target="_blank">
                    <?php
if ($row['COL 29'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 29'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td colspan="3" bgcolor="#FFFFFF" valign="middle" align="center">&nbsp;</td>
                  </tr>
                <tr class="titulo_item_conteudo">
                  <td height="40" valign="middle" bgcolor="#E9EDF4">Maiores dificuldades do seu mandato </td>
                  <td align="center" valign="middle" bgcolor="#E9EDF4"><a href="<? echo utf8_encode ($row['COL 30']); ?>" target="_blank">
                    <?php
if ($row['COL 30'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#E9EDF4"><?php
if ($row['COL 30'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td height="40" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                  <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                  <td height="40" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                  </tr>
                <tr>
                  <td height="40" valign="middle" bgcolor="#DBEEF4">Indicadores de desempenho </td>
                  <td align="center" valign="middle" bgcolor="#DBEEF4"><a href="<? echo utf8_encode ($row['COL 31']); ?>" target="_blank">
                    <?php
if ($row['COL 31'] >= $row['bancada']) {

  echo '<img src="images/lupa.png">';
} else {
}
?>
                  </a></td>
                  <td height="40" align="center" valign="middle" bgcolor="#DBEEF4"><?php
if ($row['COL 31'] >= $row['bancada']) {

  echo '<img src="images/sim.png">';
} else {
  echo '<img src="images/nao.png">';
}
?></td>
                  <td>&nbsp;</td>
                  <td height="40" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                  <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                  <td height="40" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
                </table>
			  </div>
		  </section>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>