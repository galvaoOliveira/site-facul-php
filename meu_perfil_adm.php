<?php

session_start();


if ($_SESSION['usuario'] != 'Adm'){

	echo"Você deve fazer o Login<br>";
	echo"<a href='conteudo.html'>Página de Login</a>";
}else{


?>
<html>
	<head>
		<title> </title>

			<script> 
			
			function onclicksair()
			{
			Login.submit();
			return true;
			
			}</script>
         <link type="text/css" rel="stylesheet" href="estilo.css" />
    <link rel="shortcut icon" href="images/icone.png">

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
                <h1 class="texto"> <a href="servicos.html"> Sobre nós </a></h1>
            </div>

            <div id="contato">
                <h1 class="texto"><a href="contato.html"> Contato </a></h1>
            </div>

	<table align="right">

	<tr><td>
	<tr><td>
	<tr><td>
	<tr><td>
	<tr><td>
	<tr><td>
	<tr><td>
	<tr><td>
	<tr><td>
	<tr><td>
	<tr><td>
	<tr><td>
	<tr><td>
	<tr><td>
	<tr><td>
	<tr><td>
	<tr><td>
	<tr><td>
	<tr><td>

	<form  name="Login" method="post" action="login_sair.php">

	Login: <?php echo $_SESSION["usuario"]; ?>
	<input type="button" value="sair" onclick="onclicksair()" > <b>
	</form>
	</td></tr>
	</table><br>

	<font>
	<br>
	<br>
	<br>
	<br>
	<br>

	<p align="center">
	<div align="center"><a href="pedido_adm.php" ><img src="Novopedidoo.png"></div></a><b>

	</font>

	</p>

	</a>

	<br>

	<font>

	<p align="center">
	<div align="center"><a href="alterar_dados_adm.php"><img src="aalterar.png"></div></a><b>

	</font>

	</p>

	</a>

	<br>

	<font>

	<p align="center">
	<div align="center"><a href="consulta_adm.php" ><img src="pediidoos.png"></div></a><b>

	</font>

	</p>

	</a>

	<br>

	<font>
	<br>
	<p align="center">
	<div align="center"><a href="pedidos_adm.php" ><img src=""></div></a><b>

	</font>

	</p>

	</a>

	<br>


	</body>
</html>
<?php
}

?>			
