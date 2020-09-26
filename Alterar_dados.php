<?php
ini_set( 'default_charset', 'utf-8');

session_start();

if ($_SESSION["usuario"]==null){

	echo"VocÃª deve fazer o Login<br>";
	echo"<a href='conteudo.html'>PÃ¡gina de Login</a>";
}else{

include("conexao.php");

$sql = "select * from cadastro where cadUsuario = '".$_SESSION["usuario"]."' " ;

$rs = mysql_query( $sql ) ;

$check_cons= @mysql_num_rows($rs);

if($check_cons<1) {
  echo"Erro no login - logar novamente" ;
}else{

$linhasCons = mysql_fetch_array($rs);

?>

<html>




	<head>
                  <meta charset="UTF-8" >


		<title>Altere o seu cadastro!</title>
		
			<script type="text/javascript">
				function verificar()
				{
                                   var nome, sobrenome, usuario, senha, senhaconf, telefone, celular, email, rg, cpf, cnpj, rua, numero, bairro;

				   nome = alterar.txtname.value;

				   if ( nome.length < 1)  
				   {
					  alert("Preencha o campo nome corretamente!");
					  alterar.txtname.style.background="yellow";
					  alterar.txtname.focus();
					  return false;
				   }else{
						alterar.txtname.style.background="white";
						}


                                   sobrenome = alterar.txtsobrenome.value;

				   if ( sobrenome.length < 1)  
				   {
					  alert("Preencha o campo Sobrenome corretamente!");
					  alterar.txtsobrenome.style.background="yellow";
					  alterar.txtsobrenome.focus();
					  return false;
				   }else{
						alterar.txtsobrenome.style.background="white"
						}
						
				   senha = alterar.txtsenha.value;
				   
				   if (senha.length < 1)
				   {
					  alert("Preencha a senha corretamente!");
					  alterar.txtsenha.style.background="yellow";
					  alterar.txtsenha.focus();
					  return false;
				   }else{
						alterar.txtsenha.style.background="white"
						}

                                    senhaconf = alterar.txtconfsenha.value;

				   if (senhaconf.length >= 1)
				   {
					   if(senha !== senhaconf)
                                           {
                                               alert("A senha nÃ£o bate");
					       alterar.txtconfsenha.focus();
                                               return false;
                                           }else{
						 alterar.txtconfsenha.style.background="white"
                                                }

				   }


				   telefone = alterar.txttelefone.value;
				   
				   if (telefone.length < 1)
				   {
					  alert("Preencha o campo telefone corretamente!");
					  alterar.txttelefone.style.background="yellow";
					  alterar.txttelefone.focus();
					  return false;
				   }else{
						alterar.txttelefone.style.background="white"
						}

				   celular = alterar.txtcelular.value;
				   
				   if (celular.length < 1)
				   {
					  alert("Preencha o campo celular corretamente!");
					  alterar.txtcelular.style.background="yellow";
					  alterar.txtcelular.focus();
					  return false;
				   }else{
						alterar.txtcelular.style.background="white"
						}
					
				   email = alterar.txtemail.value;
				   
				   if  (email.indexOf("@")< 2 )
				   {
					  alert("Preencha o campo E-mail corretamente!");
					  alterar.txtemail.style.background="yellow";
					  alterar.txtemail.focus();
					  return false;
				   }else{
						alterar.txtemail.style.background="white"
						}

				   rg = alterar.txtrg.value;
				   
				   if (rg.length < 2 ) 
				   {
					  alert("Preencha o campo RG corretamente!");
					  alterar.txtrg.style.background="yellow";
					  alterar.txtrg.focus();
					  return false;
				   }else{
						alterar.txtrg.style.background="white"
						}

				   cpf = alterar.txtcpf.value;
				   
				   if (cpf.length < 2)
				   {
					  alert("Preencha o campo CPF corretamente!");
					  alterar.txtcpf.style.background="yellow";
					  alterar.txtcpf.focus();
					  return false;
				   }else{
						alterar.txtcpf.style.background="white"
						}
						
				   rua = alterar.txtrua.value;
				   
				   if (rua.length < 1)
				   {
					  alert("Preencha o campo Rua corretamente!");
					  alterar.txtrua.style.background="yellow";
					  alterar.txtrua.focus();
					  return false;
				   }else{
						alterar.txtrua.style.background="white"
						}

				   numero = alterar.txtnumero.value;
				   
				   if (isNaN(numero) || numero.length < 2)
				   {
					  alert("Preencha o campo NÃºmero corretamente!");
					  alterar.txtnumero.style.background="yellow";
					  alterar.txtnumero.focus();
					  return false;
				   }else{
						alterar.txtnumero.style.background="white"
						}


				   bairro = alterar.txtbairro.value;
				   
				   if (bairro.length < 1)
				   {
					  alert("Preencha o campo Bairro corretamente!");
					  alterar.txtbairro.style.background="yellow";
					  alterar.txtbairro.focus();
					  return false;
				   }else{
						alterar.txtbairro.style.background="white"
						}

				   
				   alterar.submit();
				   return true;


				}
			</script>

          <link type="text/css" rel="stylesheet" href="estilo.css" />
    <link rel="shortcut icon" href="images/icone.png">
    <title> </title>

	</head>

	<body>

		<form name="alterar" action="alterar_cadastro.php" method="post">

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
                <h1 class="texto"> <a href="servicos.html"> Sobre Nós </a></h1>
            </div>

            <div id="contato">
                <h1 class="texto"><a href="contato.html"> Contato </a></h1>
            </div>

            <h2 class="texto2"> Alterar Cadastro: </h2>
            <form name="cadastro" action="alterar_cadastro.php" method="post">
                <table id="tabela5">
                    <tr>
                        <tr><td class="nomes">Usuário:</td></tr>
		<tr><td colspan="3"><?php echo $linhasCons[cadUsuario];?></td></tr>  

		<tr><td class="nomes">Nome:</td><td class="nomes">Sobrenome:</td></tr>
		<td><input type="text" name="txtname" size="30" value="<?php echo $linhasCons[cadNome];?>" placeholder="Nome" required></td>
		<td><input type="text" name="txtsobrenome" size="30" value="<?php echo $linhasCons[cadSobrenome];?>" placeholder="Sobrenome" required></td>

		<tr><td class="nomes">Senha:</td><td class="nomes">Confirme sua Senha:</td></tr>
		<td><input type="password" name="txtsenha" size="30" value="<?php echo $linhasCons[cadSenha];?>" placeholder="Escolha uma senha" required></td>
		<td><input type="password" name="txtconfsenha" size="30" placeholder="Confirme sua senha" required></td>

		<tr><td class="nomes">Telefone:</td><td class="nomes">Celular:</td></tr>
		<td><input type="text" name="txttelefone" size="30" value="<?php echo $linhasCons[cadTelefone];?>" placeholder="(DDD) 0000-0000" required></td> 
		<td><input type="text" name="txtcelular" size="30" value="<?php echo $linhasCons[cadCelular];?>" placeholder="(DDD) 90000-0000" required></td> 

		<tr><td class="nomes">E-mail:</td></tr>
		<tr><td colspan="3"><input type="text" name="txtemail" size="65"  value="<?php echo $linhasCons[cadEmail];?>" placeholder="Informe seu e-mail" required></td></tr> 

		<tr><td class="nomes">RG:</td><td class="nomes">CPF:</td></tr>
		<td><input type="text" name="txtrg" size="30" value="<?php echo $linhasCons[cadRg];?>" placeholder="Número do seu RG" required></td>
		<td><input type="text" name="txtcpf" size="30" value="<?php echo $linhasCons[cadCpf];?>" placeholder="Número do seu CPF" required></td>

		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>

		<tr><td class="nomes"><h4>Endereço:</h4></td></tr>	

		<tr><td class="nomes">Rua:</td></tr>
		<tr><td colspan="3"><input type="text" name="txtrua" size="65" value="<?php echo $linhasCons[cadEndRua];?>" placeholder="Informe o nome da sua rua" required></td></tr>
		<tr><td class="nomes">Número:</td><td class="nomes">Bairro:</td></tr>
		<td><input type="text" name="txtnumero" size="30" value="<?php echo $linhasCons[cadEndNumero];?>" placeholder="Informe o número de seu residência" required></td>
		<td><input type="text" name="txtbairro" size="30" value="<?php echo $linhasCons[cadEndBairro];?>" placeholder="Informa o bairro" required></td>

                </table>

		<table align="center">

                <tr><td><input type="button" value="Alterar" onClick="verificar()">

		<input type="button" value="voltar" onClick="location.href='meu_perfil.php'" ></tr></td>


	</table>
        </td>
        </tr>
        </table>

	</form>
		
	</body>
</html>
<?php
}
}
?>

					
		