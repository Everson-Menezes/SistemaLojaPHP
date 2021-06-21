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
  <table>
    <tr>
      <td>
<form method="post" action="alterfornecedorp.php"><br>
<p>
<br>Codigo fornecedor:<select size="1" name="for_codigo">
<?php
// gera lista de nota fiscal // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_fornecedor");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>
Nome fornecedor:
<input type="text" name="for_nome"><br>
<br>
Endereço fornecedor:
<input type="text" name="for_endereco"><br>
<br>
Numero fornecedor:
<input type="text" name="for_numero"><br>
<br>
Bairro fornecedor:
<input type="text" name="for_bairro"><br>
<br>
Cidade fornecedor:
<input type="text" name="for_cidade"><br>
<br>
Uf fornecedor:
<input type="text" name="for_uf"><br>
<br>
CNPJ/CPF fornecedor:
<input type="text" name="for_cnpjcpf"><br>
<br>
RG fornecedor:
<input type="text" name="for_rgie"><br>
<br>
Telefone fornecedor:
<input type="text" name="for_telefone"><br>
<br>
Fax fornecedor:
<input type="text" name="for_fax"><br>
<br>
Celular fornecedor:
<input type="text" name="for_celular"><br>
<br>
Email fornecedor:
<input type="text" name="for_email"><br>
<br>
<input type="submit" name="Submit" value="Alterar">
</form>
</td>
</tr>
</table>
</center>
<!--Fim Incluir-->