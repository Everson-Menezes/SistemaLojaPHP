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
<form method="post" action="altercontarecp.php">
<br> Codigo: <select size="1" name="cr_codigo">

<?php
// gera lista de conta receber // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_contareceber");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>\n";
}
?>
</select><br><br>

<br> Valor:<br>  
<input type="text" name="cr_valorconta">
<br> Data vencimento:<br>  
<input type="date" name="cr_datavencimento">
<!-- AAAA-MM-DD -->
<br> Data recebimento:<br>  
<input type="date" name="cr_datarecebimento">
<!-- AAAA-MM-DD -->

<br> Codigo Nota Fiscal: <select size="1" name="nf_codigo">

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
<br> Observações.:<br>  
<input type="text" name="cr_observacoes">
<br><br>
<input type="submit" name="Submit" value="Alterar">
</form>
</td>
</tr>
</table>
</center>