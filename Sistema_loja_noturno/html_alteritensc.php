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
<form method="post" action="alteritenscp.php"><br>
<p>
Codigo:
<select size="1" name="itenscompra_cod">
<?php
// gera lista de nota fiscal // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_itenscompra");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>
Codigo compra:
<select size="1" name="com_codigo" >
<?php
// gera lista de nota fiscal // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_compras");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>
Codigo produto:
<select size="1" name="pro_codigo">
<?php
// gera lista de nota fiscal // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_produtos");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>
Codigo tipo produto:
<select size="1" name="tpp_codigo">
<?php
// gera lista de nota fiscal // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_tipoproduto");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>
Codigo nota fiscal:
<select size="1" name="nf_codigo">
<?php
// gera lista de nota fiscal // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_notafiscal");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>
Codigo tipo pagamento:
<select size="1" name="tpg_codigo">
<?php
// gera lista de nota fiscal // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_tipopagto");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>
Codigo fornecedor:
<select size="1" name="for_codigo">
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
Embalagem:
<input type="text" name="itc_embalagem"><br>
<br>
Quantidade:
<input type="text" name="itc_qtde"><br>
<br>
Valor unidade:
<input type="text" name="itc_valorun"><br>
<br>
Descrição:
<input type="text" name="itc_desc"><br>
<br>
Valor total:
<input type="text" name="itc_valortotal"><br>
<br>
<input type="submit" name="Submit" value="Alterar">
</form>
</td>
</tr>
</table>
</center>
<!--Fim Incluir-->