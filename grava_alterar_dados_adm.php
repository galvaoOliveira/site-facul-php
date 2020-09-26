<?php
session_start();


$vuser = $_REQUEST["vUsuario"];
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

$sql = "update cadastro set cadNome = '".$vname."',cadSobrenome = '".$vsobrenome."', cadSenha ='".$vsenha."',cadTelefone='".$vtelefone."' ,cadCelular='".$vcelular."',cadEmail='".$vemail."',cadRg='".$vrg."', cadCpf='".$vcpf."' ,cadEndRua='".$vrua."',cadEndNumero=".$vnumero.",cadEndBairro='".$vbairro."' where cadUsuario='".$vuser."'" ;

try{

mysql_query($sql);

echo"<script> alert('dados gravados');location.href='alterar_dados_adm.php';</script>";
} catch(Exception $erro) {
echo"<script> alert('Email já está sendo utilizado'); location.href='alterar_dados_adm.php'; </script>";
}
?>