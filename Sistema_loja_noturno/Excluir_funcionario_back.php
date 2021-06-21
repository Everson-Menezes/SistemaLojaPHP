<?php
include "conexao.php";
$fun_codigo1=$_POST['fun_codigo'];

$sql = "DELETE FROM tb_funcionario
			   WHERE fun_codigo = '$fun_codigo1'";

if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 
