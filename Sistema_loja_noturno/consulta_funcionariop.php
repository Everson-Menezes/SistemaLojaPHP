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
$result = mysqli_query("select * from tb_funcionario", $db);
echo "<center><table border='1'>
<tr>
	<td><h3>Codigo</h3></td>
	<td><h3>Nome</h3></td>
	<td><h3>Endereço</h3></td>
	<td><h3>Numero</h3></td>
	<td><h3>Complemento</h3></td>
	<td><h3>Bairro</h3></td>
	<td><h3>Cidade</h3></td>
	<td><h3>UF</h3></td>
	<td><h3>CNPJ/CPF</h3></td>
	<td><h3>RG</h3></td>
	<td><h3>Sexo</h3></td>
	<td><h3>Data de Nascimento</h3></td>
	<td><h3>Telefone</h3></td>
	<td><h3>Celular</h3></td>
	<td><h3>Email</h3></td>
	<td><h3>Salario</h3></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysqli_fetch_array($result)) {
echo "<tr><td>".$row["fun_codigo"]."</td>
          <td>".$row["fun_nome"]."</td>
		  <td>".$row["fun_endereco"]."</td>
		  <td>".$row["fun_numero"]."</td>
		  <td>".$row["fun_complemento"]."</td>
		  <td>".$row["fun_bairro"]."</td>
		  <td>".$row["fun_cidade"]."</td>
		  <td>".$row["fun_uf"]."</td>
		  <td>".$row["fun_cnpjcpf"]."</td>
		  <td>".$row["fun_rgie"]."</td>
		  <td>".$row["fun_sexo"]."</td>
		  <td>".$row["fun_nascimento"]."</td>
		  <td>".$row["fun_telefone"]."</td>
		  <td>".$row["fun_celular"]."</td>
		  <td>".$row["fun_email"]."</td>
		  <td>".$row["fun_salario"]."</td>
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