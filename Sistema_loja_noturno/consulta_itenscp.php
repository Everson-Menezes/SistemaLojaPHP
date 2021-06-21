<!DOCTYPE html>
<html lang="pt-br">
    <link rel="stylesheet" type="text/css" href="CSS/Master.css?1" />
  <head>
    <title>Sistema Loja Everson</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  </head>
  <body>
       <!--navbar-->
       <table width="98%" border="0" cellspacing="0" cellpadding="0">
        <tr align="left" valign="top"> 
          <td colspan="3"><span> </span> </td>
        </tr>
        <tr align="left" valign="top"> 
          <td height="28"></td>
          <td height="28">&nbsp;</td>
          <td height="28" align="right"></td>
        </tr>
        <tr> 
          <td width="3%"></td>
          <td width="94%" align="left" valign="top"><div id="build-menu"></div></td>
          <td width="3%" align="right"></td>
        </tr>
        <tr> 
          <td colspan="3">&nbsp;</td>
        </tr>
      </table>
      <!--fim navbar-->
      <br><br>
<!--Início Incluir-->

<script src="menu/teste2.js"></script>
<center>
<?php
include "conexao.php";
$result = mysqli_query("select * from tb_itenscompra", $db);
echo "<center><table border='1'>
<tr>
	<td><h4>Codigo</h4></td>
	<td><h4>Codigo Compra</h4></td>
	<td><h4>Codigo Produto</h4></td>
	<td><h4> Codigo Tipo Produto</h4></td>
	<td><h4>Codigo Nota</h4></td>
	<td><h4> Codigo Tipo Pagamento</h4></td>
	<td><h4>Codigo Fornecedor</h4></td>
	<td><h4>Embalagem</h4></td>
	<td><h4>Quantidade</h4></td>
	<td><h4>Valor Unidade</h4></td>
	<td><h4>Descrição</h4></td>
	<td><h4>Valor Total</h4></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysqli_fetch_array($result)) {
echo "<tr>
          <td>".$row["itenscompra_cod"]."</td>
          <td>".$row["com_codigo"]."</td>
		  <td>".$row["pro_codigo"]."</td>
		  <td>".$row["tpp_codigo"]."</td>
		  <td>".$row["nf_codigo"]."</td>
		  <td>".$row["tpg_codigo"]."</td>
		  <td>".$row["for_codigo"]."</td>
		  <td>".$row["itc_embalagem"]."</td>
		  <td>".$row["itc_qtde"]."</td>
          <td>".$row["itc_valorun"]."</td>
          <td>".$row["itc_desc"]."</td>
          <td>".$row["itc_valortotal"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
mysqli_free_result($result);
mysqli_close ($db);
?>
</td>
</tr>
</table>
</center>
<!--Fim Consulta-->