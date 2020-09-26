<?php
session_start();

if($_SESSION['usuario']== null){

	echo"Você deve fazer o Login<br>";
	echo"<a href='conteudo.html'> Página de Login</a>";

}else{


?>


<html>
	<head>
		<title>Faça seu pedido!</title>
		
		<script type="text/javascript">
		
				function verificar()
				{
				   
				   var nome, empresa, retirada, entrega, ruaent, bairroent, numeroent, ruaret, bairroret, numeroret, tipo, frag, telefone, celular, hora, minuto,user;

				   nome = pedidos.txtnameresp.value;
				
				   if ( nome.length < 3)  
				   {
					  alert("Preencha o campo nome corretamente!");
					  pedidos.txtnameresp.style.background="yellow";
					  pedidos.txtnameresp.focus();
					  return false;
				   }else{
						pedidos.txtnameresp.style.background="white";
						}
						
				   empresa = pedidos.txtnameemp.value;

				   if ( empresa.length < 2)  
				   {
					  alert("Preencha o campo empresa corretamente!");
					  pedidos.txtnameemp.style.background="yellow";
					  pedidos.txtnameemp.focus();
					  return false;
				   }else{
						pedidos.txtnameemp.style.background="white";
						}			

				   retirada = pedidos.cidaderet.value;

				   if ( retirada == "cid")  
				   {
					  alert("Selecione a cidade de retirada!");
					  pedidos.cidaderet.style.background="yellow";
					  pedidos.cidaderet.focus();
					  return false;
				   }else{
						pedidos.cidaderet.style.background="white";
						}						
						
				   entrega = pedidos.cidadeent.value;

				   if ( entrega == "cid")  
				   {
					  alert("Selecione a cidade de entrega!");
					  pedidos.cidadeent.style.background="yellow";
					  pedidos.cidadeent.focus();
					  return false;
				   }else{
						pedidos.cidadeent.style.background="white";
						}	

				   ruaret = pedidos.txtruaretirada.value;

				   if ( ruaret.length < 5)  
				   {
					  alert("Preencha a rua de retirada corretamente!");
					  pedidos.txtruaretirada.style.background="yellow";
					  pedidos.txtruaretirada.focus();
					  return false;
				   }else{
						pedidos.txtruaretirada.style.background="white";
						}		

				   numeroret = pedidos.txtnumeroretirada.value;
				   
				   if (isNaN(numeroret) || numeroret.length < 2)  
				   {
					  alert("Preencha o número de retirada corretamente!");
					  pedidos.txtnumeroretirada.style.background="yellow";
					  pedidos.txtnumeroretirada.focus();
					  return false;
				   }else{
						pedidos.txtnumeroretirada.style.background="white";
						}						
				
						
				   bairroret = pedidos.txtbairroretirada.value;

				   if ( bairroret.length < 3)  
				   {
					  alert("Preencha o bairro de retirada corretamente!");
					  pedidos.txtbairroretirada.style.background="yellow";
					  pedidos.txtbairroretirada.focus();
					  return false;
				   }else{
						pedidos.txtbairroretirada.style.background="white";
						}

						
				   ruaent = pedidos.txtruaentrega.value;

				   if ( ruaent.length < 5)
				   {
					  alert("Preencha a rua de entrega corretamente!");
					  pedidos.txtruaentrega.style.background="yellow";
					  pedidos.txtruaentrega.focus();
					  return false;
				   }else{
						pedidos.txtruaentrega.style.background="white";
						}				

				   numeroent = pedidos.txtnumeroentrega.value;
			   
				   if (isNaN(numeroent) || numeroent.length < 2)
				   {
					  alert("Preencha o número de entrega corretamente!");
					  pedidos.txtnumeroentrega.style.background="yellow";
					  pedidos.txtnumeroentrega.focus();
					  return false;
				   }else{
						pedidos.txtnumeroentrega.style.background="white";
						}			
						
				   bairroent = pedidos.txtbairroentrega.value;

				   if ( bairroent.length < 5)  
				   {
					  alert("Preencha o bairro de entrega corretamente!");
					  pedidos.txtbairroentrega.style.background="yellow";
					  pedidos.txtbairroentrega.focus();
					  return false;
				   }else{
						pedidos.txtbairroentrega.style.background="white";
						}	

				   tipo = pedidos.tentrega.value;

				   if ( tipo == "tipos")  
				   {
					  alert("Selecione o tipo de entrega!");
					  pedidos.tentrega.style.background="yellow";
					  pedidos.tentrega.focus();
					  return false;
				   }else{
				   pedidos.tentrega.style.background="white";
						if (tipo == "outros")
						
						{
							tipo = pedidos.txtoutro.value;
								
						}	if(tipo.length < 5)
							{
								
							alert("Digite o tipo da entrega!");
							pedidos.txtoutro.style.background="yellow";
							pedidos.txtoutro.focus();
							return false;
						
							}
							else{
							pedidos.txtoutro.style.background="white";
								}
						}

				   frag = pedidos.fragil.value;

				   if ( frag.length < 1)  
				   {
					  alert("Selecione se é frágil ou não!");
					  pedidos.fragil.focus();
					  return false;
				   }

				   telefone = pedidos.txtcontato.value;

				   if ( telefone.length < 9)  
				   {
					  alert("Preencha o telefone de contato corretamente!");
					  pedidos.txtcontato.style.background="yellow";
					  pedidos.txtcontato.focus();
					  return false;
				   }else{
						pedidos.txtcontato.style.background="white";
						}

				   celular = pedidos.txtcelular.value;

				   if ( celular.length < 9)  
				   {
					  alert("Preencha o celular de contato corretamente!");
					  pedidos.txtcelular.style.background="yellow";
					  pedidos.txtcelular.focus();
					  return false;
				   }else{
						pedidos.txtcelular.style.background="white";
						}

				   hora = pedidos.Hora.value;

				   if ( hora == "hora")  
				   {
					  alert("Selecione a hora de retirada!");
					  pedidos.Hora.style.background="yellow";
					  pedidos.Hora.focus();
					  return false;
				   }else{
						pedidos.Hora.style.background="white";
						}

				   minuto = pedidos.Minutos.value;

				   if ( minuto == "minutos")  
				   {
					  alert("Selecione os minutos de retirada!");
					  pedidos.Minutos.style.background="yellow";
					  pedidos.Minutos.focus();
					  return false;
				   }else{
						pedidos.Minutos.style.background="white";
						}						
						
						
						
						 pedidos.submit(); 
						 return true;

				}

		</script>

        <link type="text/css" rel="stylesheet" href="estilo.css" />
    <link rel="shortcut icon" href="images/icone.png">		   
		
	</head>

	<body>

	<form name="pedidos" method="post" action="grava_pedido.php">

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


	<table align="center">

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
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>

		<tr><td>Nome do responsavel (pessoa):</td>
		<td><input type="text" name="txtnameresp" size="50" placeholder="Informe o nome completo" required> </td></tr> 

		<tr><td>Nome da empresa:</td>
		<td><input type="text" name="txtnameemp" size="50" placeholder="Informe o nome da empresa completo" required></td></tr> 

		<tr><td>Cidade de retirada:</td>
		<td><select name="cidaderet">
		<option value= "cid"> Cidades
		<option value= "12"> Água Branca
		<option value= "22"> Alphaville
		<option value= "9"> Angélica
		<option value= "21"> Barueri
		<option value= "5"> Belenzinho
		<option value= "4"> Brás
		<option value= "15"> Congonhas
		<option value= "8"> Consolação
		<option value= "20"> Diadema
		<option value= "13"> Freguesia do Ò
		<option value= "1"> Guarulhos
		<option value= "23"> Itapecirica da Serra
		<option value= "24"> Itaquaquecetuba
		<option value= "10"> Jardins
		<option value= "11"> Lapa
		<option value= "19"> Maua 
		<option value= "7"> Mooca
		<option value= "16"> Morumbi
		<option value= "3"> Poá
		<option value= "6"> Tatuapé	
		<option value= "14"> Santo Amaro
		<option value= "17"> Santo André
		<option value= "18"> São Bernado
		<option value= "2"> Suzano </td></tr>
			
		</select name>

		<tr><td>Cidade de entrega:</td>
		<td><select name= "cidadeent">
		<option value= "cid"> Cidades
		<option value= "12"> Água Branca
		<option value= "22"> Alphaville
		<option value= "9"> Angélica
		<option value= "21"> Barueri
		<option value= "5"> Belenzinho
		<option value= "4"> Brás
		<option value= "15"> Congonhas
		<option value= "8"> Consolação
		<option value= "20"> Diadema
		<option value= "13"> Freguesia do Ò
		<option value= "1"> Guarulhos
		<option value= "23"> Itapecirica da Serra
		<option value= "24"> Itaquaquecetuba
		<option value= "10"> Jardins
		<option value= "11"> Lapa
		<option value= "19"> Maua 
		<option value= "7"> Mooca
		<option value= "16"> Morumbi
		<option value= "3"> Poá
		<option value= "6"> Tatuapé	
		<option value= "14"> Santo Amaro
		<option value= "17"> Santo André
		<option value= "18"> São Bernado
		<option value= "2"> Suzano </td></tr>
			
		</select name>

		<tr><td>EndereÃ§o de retirada:</td>
		<td>Rua: <input type="text" name="txtruaretirada" size="45" placeholder="Informe o nome da rua" required> </td>
		<td>Número: <input type="text" name="txtnumeroretirada" size="5" placeholder="NÃºmero" required> </td>
		<td>Bairro: <input type="text" name="txtbairroretirada" size="30" placeholder="Informe o bairro" required> </td></tr>

		<tr><td>EndereÃ§o de entrega:</td>
		<td>Rua: <input type="text" name="txtruaentrega" size="45" placeholder="Informe o nome da rua" required> </td>
		<td>Número: <input type="text" name="txtnumeroentrega" size="5" placeholder="NÃºmero" required> </td>
		<td>Bairro: <input type="text" name="txtbairroentrega" size="30" placeholder="Informe o bairro" required> </td></tr> 

		<tr><td>Tipo de entrega:</td>
		<td><select name="tentrega">
		<option value="tipos"> Tipos
		<option value="documentos"> Documentos	
		<option value="ferramentas"> Ferramentas
		<option value="pecas"> Peças 
		<option value="outros"> Outros </td></tr>
		<tr><td>Outros:</td><td> <input type="text" name="txtoutro" size="50" placeholder="Informe o tipo da entrega" required></td></tr>

		</select>

		<tr><td>Frágil:</td>
		<td><input type="radio" name="fragil" value="Sim"> Sim
		<input type="radio" name="fragil" value="Não"> Não</td></tr>
		
		

		<tr><td>Peso: </td>
		<td>Máximo 20kg</td></tr>

		<tr><td>Tamanho:</td>
		<td>Máximo 1 metro quadrado </td></tr>

		<tr><td>Telefone de contato:</td>
		<td><input type="text" name="txtcontato" size="30" placeholder="(DDD) 0000-0000" required> </td></tr>

		<tr><td>Celular:</td>
		<td><input type="text" name="txtcelular" size="30" placeholder="(DDD) 90000-0000" required> </td></tr>

		<tr><td>Hora de retirada:</td>
		<td><select name="Hora">
		<option value= "hora"> Hora
		<option value= "08"> 08:00
		<option value= "09"> 09:00
		<option value= "10"> 10:00
		<option value= "11"> 11:00
		<option value= "12"> 12:00
		<option value= "13"> 13:00
		<option value= "14"> 14:00
		<option value= "15"> 15:00
		<option value= "16"> 16:00
		<option value= "17"> 17:00
		<option value= "18"> 18:00
		<option value= "19"> 19:00
		<option value= "20"> 20:00 

		</select>

		<select name="Minutos">
		<option value= "minutos"> Minutos
		<option value= "00"> 00:00
		<option value= "10"> 00:10
		<option value= "20"> 00:20
		<option value= "30"> 00:30
		<option value= "40"> 00:40
		<option value= "50"> 00:50 </td></tr>

		</select>

		<tr><td><input type="button" value="Enviar" onClick="verificar()">
		<input type="button" value="Voltar" onClick="location.href='meu_perfil.php'"></td></tr>

	</table>

	</form>

	</body>
</html>

<?php
}
?>