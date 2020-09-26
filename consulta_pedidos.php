<?php

if(session.getAttribute("usuario")==null){

	echo"Você deve fazer o Login<br>";
	echo"<a href='conteudo.html'>Página de Login</a>";
}else{

include("conexao.php");


//String sql = "select * from pedido";



$sql = "select pedCodigo,pedNomeresp ,pedNomeemp ,pedCidretirada,pedRuaretirada, pedBarretirada, pedNumretirada ,pedCidentrega,pedRuaentrega, pedNumentrega, pedBarentrega,pedTipo, pedFragil, pedTelcontato,pedCelular, pedHora, pedMinuto from pedido where cadUsuario = '"+ session.getAttribute("usuario") +"'";
Statement stm = conexao.createStatement();


ResultSet rs = stm.executeQuery( sql ) ;


echo"<table border=1 align='center'>";
echo"<tr><td>Codigo Produto</td><td>Nome do responsavel</td><td>Nome da empresa</td><td>Tipo da entrega</td></tr>";


while  (rs.next()) {

  out.print("<tr>");

  out.print("<td align='center'>");
	String pedcodigo = rs.getString("pedCodigo");
	
    echo"<a href='dados_pedidos.jsp?vcodigo="+ rs.getString("pedcodigo") + "'target='_blank'>"+pedcodigo+"</a>" ;
  echo"</td>";

  echo"<td>";
    out.print( rs.getString("pedNomeresp") ) ;
  echo"</td>";

  echo"<td>";
    out.print( rs.getString("pedNomeemp") ) ;
  echo"</td>";

  echo"<td>";
    out.print( rs.getString("pedTipo") ) ;
  echo"</td>";

  echo"</td>";

  echo"</tr>";

}

echo"</table>";


//out.print(rs);
}
?>
