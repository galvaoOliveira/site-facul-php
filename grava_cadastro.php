<?php

$vusuario = $_REQUEST["txtusuario"];
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


$sql = "insert into cadastro (cadNome,cadUsuario,cadSobrenome,cadSenha,cadTelefone,cadCelular,cadEmail,cadRg, cadCpf,cadEndRua,cadEndNumero,cadEndBairro) values ('".$vname."','".$vusuario."','".$vsobrenome."','".$vsenha."','".$vtelefone."','".$vcelular."','".$vemail."','".$vrg."','".$vcpf."','".$vrua."',".$vnumero.",'".$vbairro."')" ;

try{

mysql_query($sql);

echo"<script> alert('Dados Gravados com sucesso!!!');location.href='Alterar_dados.php'; </script>" ;


} catch(Exception $erro) {

echo"<script> alert('Login ou Email já está sendo usado!!'); location.href='Alterar_dados.php';</script>" ;

}
?>



