<?php
session_start();

$vuser = $_REQUEST["txtusuario"];
$vname  = $_REQUEST["txtname"];
$vsobrenome = $_REQUEST["txtsobrenome"];
$vsenha = $_REQUEST["txtsenha"];
$vtelefone = $_REQUEST["txttelefone"];
$vcelular = $_REQUEST["txtcelular"];
$vemail = $_REQUEST["txtemail"] ;
$vrg = $_REQUEST["txtrg"];
$vcpf = $_REQUEST["txtcpf"];
$vrua = $_REQUEST["txtrua"];
$vnumero = $_REQUEST["txtnumero"];
$vbairro = $_REQUEST["txtbairro"];



include("conexao.php");

$sql = "update cadastro set cadNome = '".$vname."',cadSobrenome = '".$vsobrenome."', cadSenha ='".$vsenha."',cadTelefone='".$vtelefone."' ,cadCelular='".$vcelular."',cadEmail='".$vemail."',cadRg='".$vrg."', cadCpf='".$vcpf."' ,cadEndRua='".$vrua."',cadEndNumero=".$vnumero.",cadEndBairro='".$vbairro."' where cadUsuario='".$_SESSION['usuario']."'" ;

try{

mysql_query($sql);

echo"<script> alert('dados gravados');location.href='Alterar_dados.php';</script>";
} catch(Exception $erro) {
echo"<script> alert('Email jรก utilizado'); location.href='Alterar_dados.php'; </script>";
}
?>



		
