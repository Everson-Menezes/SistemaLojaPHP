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
$result = mysqli_query("select * from tb_fornecedor", $db);
echo "<center><table border='1'>
<tr>
	<td><h3> Fornecedor</h3></td>
	<td><h3>Nome</h3></td>
	<td><h3>Endereço</h3></td>
	<td><h3>Numero</h3></td>
	<td><h3>Bairro</h3></td>
	<td><h3>Cidade</h3></td>
	<td><h3>UF</h3></td>
	<td><h3>CNPJ/CPF</h3></td>
	<td><h3>CNPJ/CPF</h3></td>
	<td><h3>RG</h3></td>
	<td><h3>Fax</h3></td>
	<td><h3>Celular</h3></td>
	<td><h3>Email</h3></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysqli_fetch_array($result)) {
echo "<tr><td>".$row["for_codigo"]."</td>
          <td>".$row["for_nome"]."</td>
		  <td>".$row["for_endereco"]."</td>
		  <td>".$row["for_numero"]."</td>
		  <td>".$row["for_bairro"]."</td>
		  <td>".$row["for_cidade"]."</td>
		  <td>".$row["for_uf"]."</td>
		  <td>".$row["for_cnpjcpf"]."</td>
		  <td>".$row["for_rgie"]."</td>
		  <td>".$row["for_telefone"]."</td>
		  <td>".$row["for_fax"]."</td>
		  <td>".$row["for_celular"]."</td>
		  <td>".$row["for_email"]."</td>
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