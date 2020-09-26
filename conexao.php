<?php

$Servidor = "mysql.hostinger.com.br";
$Usuario="u449457646_teste";
$Senha = "tmhawk";
$Banco="u449457646_teste";

$conectar = mysql_connect($Servidor,$Usuario,$Senha);

mysql_select_db($Banco, $conectar);

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

try{

mysql_select_db($Banco, $conectar);


}catch(Exception $erro){


}


?>
	