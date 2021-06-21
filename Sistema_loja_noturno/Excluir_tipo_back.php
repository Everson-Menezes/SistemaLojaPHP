<?php
include "conexao.php";
$tpp_codigo1=$_POST['tpp_codigo'];

$sql = "DELETE FROM tb_tipoproduto
			   WHERE tpp_codigo = '$tpp_codigo1'";

if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 