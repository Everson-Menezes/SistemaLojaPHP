<<!DOCTYPE html>
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
<form method="post" action="contapagp.php"><br>
<p>
Codigo:
<input type="text" name="cp_codigo" ><br>
<br>
Valor da conta:
<input type="text" name="cp_valorconta"><br>
<br>
Data de vencimento:
<input type="date" name="cp_datavencimento"><br>
<br>
Data pagamento:
<input type="date" name="cp_datapagamento"><br>
<br>
Codigo nota fiscal:
<input type="text" name="nf_codigo"><br>
<br>
OBS:
<input type="text" name="cp_observacoes"><br>
<br>
<input type="submit" name="Submit" value="Incluir">
</form>
</td>
</tr>
</table>
</center>
<!--Fim Incluir-->
</body>
</html>