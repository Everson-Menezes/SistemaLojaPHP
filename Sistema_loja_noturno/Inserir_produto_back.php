<?php
include "conexao.php";
$pro_codigo1=$_POST['pro_codigo'];
$pro_descricao1=$_POST['pro_descricao'];
$tpp_codigo1=$_POST['tpp_codigo'];
$pro_precocusto1=$_POST['pro_precocusto'];
$pro_precovenda1=$_POST['pro_precovenda'];
$pro_estoque1=$_POST['pro_estoque'];
$pro_embalagem1=$_POST['pro_embalagem'];
$pro_ipi1=$_POST['pro_ipi'];

$sql = "INSERT INTO tb_produtos (pro_codigo,pro_descricao,tpp_codigo,pro_precocusto,pro_precovenda,pro_estoque,pro_embalagem,pro_ipi) VALUES ('$pro_codigo1','$pro_descricao1','$tpp_codigo1','$pro_precocusto1','$pro_precovenda1','$pro_estoque1','$pro_embalagem1','$pro_ipi1')";

if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 