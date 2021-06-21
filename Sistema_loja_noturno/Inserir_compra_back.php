<?php
include "conexao.php";
$com_codigo1=$_POST['com_codigo'];
$tpg_codigo1=$_POST['tpg_codigo'];
$for_codigo1=$_POST['for_codigo'];
$nf_codigo1=$_POST['nf_codigo'];
$com_datacompra1=$_POST['com_datacompra'];
$com_valortotal1=$_POST['com_valortotal'];
$com_observacoes1=$_POST['com_observacoes'];

$sql = "INSERT INTO tb_compras (com_codigo,tpg_codigo,for_codigo,nf_codigo,com_datacompra,com_valortotal,com_observacoes) VALUES	('$com_codigo1','$tpg_codigo1','$for_codigo1','$nf_codigo1','$com_datacompra1','$com_valortotal1','$com_observacoes1')";

if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 
?>