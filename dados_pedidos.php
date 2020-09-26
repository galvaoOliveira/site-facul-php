<?php
session_start();

$vcodigo = $_REQUEST['codigo'];



if($_SESSION["usuario"]== null){

	echo"VocÃª deve fazer o Login<br>";
	echo"<a href='conteudo.html'>PÃ¡gina de Login</a>";

}else{

include("conexao.php");
 
$sql = "select cadUsuario,pedNomeresp, pedNomeemp, a.locNome as CidRetirada, pedRuaretirada, pedBarretirada, pedNumretirada, b.locNome as CidEntrega, pedRuaentrega, pedNumentrega, pedBarentrega, pedTipo, pedFragil, pedTelcontato, pedCelular, pedHora, pedMinuto, pedStatus, (select Max(Valor)  from Locais where Locais.locCodigo = pedCidretirada or Locais.locCodigo=pedCidentrega) as valor from pedido " ;		
$sql = $sql."inner join Locais as a on a.locCodigo=pedido.pedCidretirada " ;
$sql = $sql."inner join Locais as b on b.locCodigo=pedido.pedCidentrega " ;    
$sql = $sql."where pedCodigo =".$vcodigo;

$rs = mysql_Query($sql) ;

$check_cons= @mysql_num_rows($rs);

if($check_cons<1){
      echo "erro"; 
}else{

$linhasCons =  mysql_fetch_array($rs);

?>


<html>
	<head>
		<title>Faça seu pedido!</title>
	</head>

	<body>

	<table border=1 align="center" cellspacing="5" cellpadding="5">

	<tr><td> <?php echo $_SESSION["usuario"];?></td><td><?php echo $vcodigo;?></td></tr>

	<tr><td>Status do Pedido</td><td><?php echo $linhasCons[pedStatus];?></td></tr>

	<tr><td>Valor do pedido</td><td><?php echo $linhasCons[valor];?></td></tr>

	<form name="pedidos" method="" >

	<table border=1 align="center" cellspacing="5" cellpadding="5">

		<tr><td>Nome do responsável:</td>
		<td><?php echo $linhasCons['pedNomeresp'];?></td></tr> 

		<tr><td>Nome da empresa:</td>
		<td><?php echo $linhasCons[pedNomeemp];?></td></tr> 

		<tr><td>Cidade de retirada:</td>

		<td><?php echo $linhasCons[CidRetirada];?></td></tr>


		<tr><td>Endereço de retirada:</td>
		<td>Rua: <?php echo $linhasCons[pedRuaretirada];?> </td>
		<tr><td>Número: </td><td><?php echo $linhasCons[pedNumretirada];?></tr></td>
		</tr><td>Bairro:</td><td> <?php echo $linhasCons[pedBarretirada];?></td></tr>

		<tr><td>Cidade de entrega:</td>
		<td><?php echo $linhasCons[CidEntrega];?></td></tr>

		<tr><td>Endereço de entrega:</td>
		<td>Rua:<?php echo $linhasCons[pedRuaentrega];?></td></tr>
		<tr><td>Número:</td><td><?php echo $linhasCons[pedNumentrega];?> </td></tr>
		<tr><td>Bairro:</td><td><?php echo $linhasCons[pedBarentrega];?> </td></tr> 

		<tr><td>Tipo de entrega:</td>
		<td><?php echo $linhasCons[pedTipo];?></td></tr>

		<tr><td>Frágil:</td>
		<td><?php echo $linhasCons[pedFragil];?></td></tr>
		
		<br>

		<tr><td>Peso: </td>
		<td>Máximo 20kg</td></tr> <br>

		<tr><td>Tamanho:</td>
		<td>Máximo 1 metroÂ³</td></tr> <br>

		<tr><td>Telefone de contato:</td>
		<td><?php echo $linhasCons[pedTelcontato];?><br>

		<tr><td>Celular:</td>
		<td><?php echo $linhasCons[pedCelular];?> </td></tr> <br>

		<tr><td>Hora de retirada:</td>
		<td><?php echo $linhasCons[pedHora].":".$linhasCons[pedMinuto];?></td></tr>

		</select>



	</table>

	</form>

	</body>
</html>

<?php
}
}
?>
		