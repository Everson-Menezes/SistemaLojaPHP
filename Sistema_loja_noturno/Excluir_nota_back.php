<?php
error_reporting(0);
include "conexao.php";
$nf_codigo1=$_POST['nf_codigo'];

$sql = "DELETE FROM tb_notafiscal
			 WHERE nf_codigo = '$nf_codigo1'";

if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 