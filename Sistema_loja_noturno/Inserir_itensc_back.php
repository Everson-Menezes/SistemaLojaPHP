<?php
include "conexao.php";
$itenscompra_cod1=$_POST['itenscompra_cod'];
$com_codigo1=$_POST['com_codigo'];
$pro_codigo1=$_POST['pro_codigo'];
$tpp_codigo1=$_POST['tpp_codigo'];
$nf_codigo1=$_POST['nf_codigo'];
$tpg_codigo1=$_POST['tpg_codigo'];
$for_codigo1=$_POST['for_codigo'];
$itc_embalagem1=$_POST['itc_embalagem'];
$itc_qtde1=$_POST['itc_qtde'];
$itc_valorun1=$_POST['itc_valorun'];
$itc_desc1=$_POST['itc_desc'];
$itc_valortotal1=$_POST['itc_valortotal'];

$inserir = "INSERT INTO tb_itenscompra (itenscompra_cod,com_codigo,pro_codigo,tpp_codigo,nf_codigo,tpg_codigo,for_codigo,itc_embalagem,itc_qtde,itc_valorun,itc_desc,itc_valortotal) VALUES ('$itenscompra_cod1','$com_codigo1','$pro_codigo1','$tpp_codigo1','$nf_codigo1','$tpg_codigo1','$for_codigo1','$itc_embalagem1','$itc_qtde1','$itc_valorun1','$itc_desc1','$itc_valortotal1')";

if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 