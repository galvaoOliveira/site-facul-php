<html>
      <head>

      <link type="text/css" rel="stylesheet" href="estilo.css" />
    <link rel="shortcut icon" href="images/icone.png">

      <title></title>

      </head>

      <body>

      <div id="banner">
                <img src="imagesbanner1.png">
            </div>

            <div id="inicio">
                <h1 class="texto"> <a href="index.html"> Início </a></h1>
            </div>

            <div id="perfil">
                <h1 class="texto"> <a href="meu_perfil.php"> Perfil </a></h1>
            </div>

            <div id="servicos">
                <h1 class="texto"> <a href="servicos.html"> Sobre Nós </a></h1>
            </div>

            <div id="contato">
                <h1 class="texto"><a href="contato.html"> Contato </a></h1>
            </div>

       </body> 

       <table align="center">

       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>
       <tr></tr>

<?php

session_start();

include("conexao.php");

$sql = "select * from pedido " ;

$rs = mysql_query($sql);

echo"<table border=1 align=center>";
echo"<tr><td>CÃ³digo</td><td>Usuario</td><td>Nome Responsavel</td><td>Nome Empresa</td><td>Tipo</td><td>Status</td></tr>";

$check_cons= @mysql_num_rows($rs);

while  ( $check_cons>0 ) {

$linhasCons = mysql_fetch_array($rs);

  echo"<tr>";

  echo"<td BGCOLOR=#0000FF align='center'>";
    echo "<a href='dados_pedidos_adm.php?codigo=$linhasCons[pedCodigo]'>".$linhasCons["pedCodigo"]."</a>";
  echo"</td>";

  echo"<td>";
    echo $linhasCons["cadUsuario"] ;
  echo"</td>";

  echo"<td>";
    echo $linhasCons["pedNomeresp"] ;
  echo"</td>";

  echo"<td>";
    echo $linhasCons["pedNomeemp"] ;
  echo"</td>";

  echo"<td>";
    echo $linhasCons["pedTipo"] ;
  echo"</td>";

  echo"<td>";
    echo $linhasCons["pedStatus"] ;
  echo"</td>";

  echo"</tr>";

$check_cons = $check_cons-1;

}

echo"</table>";


?>
</table>
</html>