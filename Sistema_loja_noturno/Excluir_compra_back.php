<?php
include "conexao.php";
$com_codigo1=$_POST['com_codigo'];

$sql = "DELETE FROM tb_compras
 			   WHERE com_codigo = '$com_codigo1'";

if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 