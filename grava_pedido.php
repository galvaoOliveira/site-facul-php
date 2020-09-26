<?php
session_start();

$vnomeresp 	= $_REQUEST["txtnameresp"];
$vnomeemp	= $_REQUEST["txtnameemp"];
$vcidadeent	= $_REQUEST["cidadeent"];
$vcidaderet	= $_REQUEST["cidaderet"];
$vruaretirada	= $_REQUEST["txtruaretirada"];
$vnumretirada	= $_REQUEST["txtnumeroretirada"];
$vbairetirada	= $_REQUEST["txtbairroretirada"];
$vruaentrega	= $_REQUEST["txtruaentrega"];
$vnumentrega	= $_REQUEST["txtnumeroentrega"];
$vbaientrega	= $_REQUEST["txtbairroentrega"];
$vtipoentrega	= $_REQUEST["tentrega"];
$vfragil	= $_REQUEST["fragil"];
$vtelefone	= $_REQUEST["txtcontato"];
$vcelular	= $_REQUEST["txtcelular"];
$vhora		= $_REQUEST["Hora"];
$vminutos	= $_REQUEST["Minutos"];

include("conexao.php");

$sql = "insert into pedido (CadUsuario,pedNomeresp,pedNomeemp,PedCidretirada,pedCidentrega,pedRuaretirada,pedNumretirada,pedBarretirada,pedRuaentrega,pedNumentrega,pedBarentrega,pedTipo,pedFragil,pedTelcontato,pedCelular,pedHora,pedMinuto, pedStatus) values ('".$_SESSION["usuario"]."','".$vnomeresp."','".$vnomeemp."',".$vcidadeent.",".$vcidaderet.",'".$vruaretirada."', ".$vnumretirada.",'".$vbairetirada."','".$vruaentrega."', ".$vnumentrega.",'".$vbaientrega."','".$vtipoentrega."', '".$vfragil."','".$vtelefone."','".$vcelular."', ".$vhora.", ".$vminutos.",'Pendente')" ;

try{

mysql_query($sql);

echo"Dados Gravados com sucesso!!!" ;

} catch(Exception $erro) {

echo"<script> alert('Login ou Email já exista sendo usado!!');';</script>" ;

}
//out.print("<location href='pedidos.html'>") ;

?>



