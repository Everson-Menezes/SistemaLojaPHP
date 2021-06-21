<?php
include "conexao.php";

$cr_codigo1=$_POST['cr_codigo'];
$cr_valorconta1=$_POST['cr_valorconta'];
$cr_datavencimento1=$_POST['cr_datavencimento'];
$cr_datarecebimento1=$_POST['cr_datarecebimento'];
$nf_codigo1=$_POST['nf_codigo'];
$cr_observacoes1=$_POST['cr_observacoes'];

$sql = "UPDATE tb_contareceber 
					SET	cr_valorconta='$cr_valorconta1',
						cr_datavencimento='$cr_datavencimento1',
						cr_datarecebimento='$cr_datarecebimento1',
						nf_codigo='$nf_codigo1',
						cr_observacoes='$cr_observacoes1'					  
					WHERE cr_codigo='$cr_codigo1'"; 

if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 
