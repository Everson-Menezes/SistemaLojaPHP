<?php
include "conexao.php";
$tpp_codigo1=$_POST['tpp_codigo'];
$tpp_descricao1=$_POST['tpp_descricao'];

$sql = "INSERT INTO tb_tipoproduto (tpp_codigo,tpp_descricao) VALUES ('$tpp_codigo1','$tpp_descricao1')";

if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 