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
$result = mysqli_query("select * from tb_contapagar", $db);
echo "<center><table border='1'>
<tr>
	<td><h3>Codigo Conta </h3></td>
	<td><h3>Valor</h3></td>
	<td><h3>Data Vencimento</h3></td>
	<td><h3>Data Pagamento</h3></td>
	<td><h3>Codigo Nota</h3></td>
	<td><h3>Observações</h3></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysqli_fetch_array($result)) {
echo "<tr><td>".$row["cp_codigo"]."</td>
          <td>".$row["cp_valorconta"]."</td>
		  <td>".$row["cp_datavencimento"]."</td>
		  <td>".$row["cp_datapagamento"]."</td>
		  <td>".$row["nf_codigo"]."</td>
		  <td>".$row["cp_observacoes"]."</td>
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