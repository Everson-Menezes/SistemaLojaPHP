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
<form method="post" action="alterfuncionariop.php"><br>
<p>
Codigo:<select size="1" name="fun_codigo" >
<?php
// gera lista de nota fiscal // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_funcionario");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>
Nome:
<input type="text" name="fun_nome"><br>
<br>
Endereço:
<input type="text" name="fun_endereco"><br>
<br>
Numero:
<input type="text" name="fun_numero"><br>
<br>
Complemento:
<input type="text" name="fun_complemento"><br>
<br>
Bairro:
<input type="text" name="fun_bairro"><br>
<br>
Cidade:
<input type="text" name="fun_cidade"><br>
<br>
Uf:
<input type="text" name="fun_uf"><br>
<br>
CNPJ/CPF :
<input type="text" name="fun_cnpjcpf"><br>
<br>
RG:
<input type="text" name="fun_rgie"><br>
<br>
Sexo:
<input type="text" name="fun_sexo"><br>
<br>
Data nascimento:
<input type="date" name="fun_nascimento"><br>
<br>
Telefone:
<input type="text" name="fun_telefone"><br>
<br>
Celular:
<input type="text" name="fun_celular"><br>
<br>
Email:
<input type="text" name="fun_email"><br>
<br>
Salario:
<input type="text" name="fun_salario"><br>
<br>
<input type="submit" name="Submit" value="Alterar">
</form>
</td>
</tr>
</table>
</center>
<!--Fim Incluir-->