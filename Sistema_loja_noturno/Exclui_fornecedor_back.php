<?php
include "conexao.php";
$for_codigo1=$_POST['for_codigo'];

$sql = "DELETE FROM tb_fornecedor
			WHERE for_codigo = '$for_codigo1'";

if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 