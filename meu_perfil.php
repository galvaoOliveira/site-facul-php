<?php

session_start();


if ($_SESSION['usuario']== null){

	echo"Você deve fazer o Login<br>";
	echo"<a href='conteudo.html'>Página de Login</a>";
}else{

      if($_SESSION['usuario']== 'Adm'){
   	         header("Location: meu_perfil_adm.php");
          
        }

?>
<html>
	<head>

       <link rel="shortcut icon" href="images/icone.png">
       <link type="text/css" rel="stylesheet" href="estilo.css" />
       
               <title> </title>
	

			<script> 
			
			function onclicksair()
			{
			Login.submit();
			return true;
			
			}</script>
       
	</head>

	<body>

         <div id="tudo">

            <div id="banner">
                <img src="imagesbanner1.png">
            </div>

            <div id="inicio">
                <h1 class="texto"> <a href="index.html"> Início</a></h1>
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
	<form  name="Login" method="post" action="login_sair.php">

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
	<div align="center"><a href="pedidos.php" ><img src="Novopedidoo.png"></div></a><b>

	</font>

	</p>

	</a>

	<br>

	<font>

	<p align="center">
	<div align="center"><a href="Alterar_dados.php"><img src="aalterar.png"></div></a><b>

	</font>

	</p>

	</a>

	<br>

	<font>

	<p align="center">
	<div align="center"><a href="consulta.php" ><img src="pediidoos.png"></div></a><b>

	</font>

	</p>

	</a>

	<br>


	</body>
</html>
<?php
}

?>					