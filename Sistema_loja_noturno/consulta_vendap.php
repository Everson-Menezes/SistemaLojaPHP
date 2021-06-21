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
$result = mysqli_query("select * from tb_vendas", $db);
echo "<center><table border='1'>
<tr>
	<td><h3>Codigo Venda</h3></td>
	<td><h3>Codigo Funcionario</h3></td>
	<td><h3>Codigo Pagamento</h3></td>
	<td><h3>Codigo Nota</h3></td>
	<td><h3>Data Venda</h3></td>
    <td><h3>Valor Total</h13</td>
    <td><h3>Observações</h3></td>


</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysqli_fetch_array($result)) {
echo "<tr><td>".$row["ven_codigo"]."</td>
          <td>".$row["tpg_codigo"]."</td>
		  <td>".$row["fun_codigo"]."</td>
		  <td>".$row["nf_codigo"]."</td>
		  <td>".$row["ven_datavenda"]."</td>
		  <td>".$row["ven_valortotal"]."</td>
		  <td>".$row["ven_observacoes"]."</td>
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