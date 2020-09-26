<?php
session_start();

$vcodigo        = $_REQUEST["codigo"];
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
$vtelefone	= $_REQUEST["txtcontato"];
$vcelular	= $_REQUEST["txtcelular"];
$vhora		= $_REQUEST["Hora"];
$vminutos	= $_REQUEST["Minutos"];
$vstatus        = $_REQUEST["Status"];

include("conexao.php");

$sql = "update pedido set pedNomeresp= '".$vnomeresp."',pedNomeemp= '".$vnomeemp."',PedCidretirada=".$vcidaderet.",pedCidentrega=".$vcidadeent.",pedRuaretirada='".$vruaretirada."',pedNumretirada=".$vnumretirada.",pedBarretirada='".$vbairetirada."',pedRuaentrega='".$vruaentrega."',pedNumentrega=".$vnumentrega.",pedBarentrega='".$vbaientrega."',pedTipo='".$vtipoentrega."',pedTelcontato='".$vtelefone."',pedCelular='".$vcelular."',pedHora=".$vhora.",pedMinuto=".$vminutos.", pedStatus='".$vstatus."' where pedCodigo=".$vcodigo ;


try{

mysql_query($sql);

echo"<script> alert('Dados alterados');location.href='consulta_adm.php';</script></script>" ;

} catch(Exception $erro) {

echo"<script> alert('Login ou Email já exista sendo usado!!');</script>" ;

}


?>



