<?php
include "conexao.php";
$cr_codigo1=$_POST['cr_codigo'];
$cr_valorconta1=$_POST['cr_valorconta'];
$cr_datavencimento1=$_POST['cr_datavencimento'];
$cr_datarecebimento1=$_POST['cr_datarecebimento'];
$nf_codigo1=$_POST['nf_codigo'];
$cr_observacoes1=$_POST['cr_observacoes'];

$sql = "INSERT INTO tb_contareceber (cr_codigo,cr_valorconta,cr_datavencimento,cr_datarecebimento,nf_codigo,cr_observacoes) VALUES ('$cr_codigo1','$cr_valorconta1','$cr_datavencimento1','$cr_datarecebimento1','$nf_codigo1','cr_observacoes1')";

if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 
?> 