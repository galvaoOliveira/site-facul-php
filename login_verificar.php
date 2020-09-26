<?php


session_start();

$vlogin = $_POST["txtlogin"];
$vsenha = $_POST["txtsenha"];

include("conexao.php");

$sql = "select * from cadastro where cadUsuario ='".$vlogin."' and cadSenha='".$vsenha."'";

$rs = mysql_Query($sql); 

$check_cons= @mysql_num_rows($rs);

if($check_cons<1){
		echo"invalido";
	}else{
                $linhas = mysql_fetch_row($rs);
                $_SESSION['usuario']= $linhas[0];

	}

?>

											
