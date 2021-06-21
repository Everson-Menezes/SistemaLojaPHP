<?php
error_reporting(0);
include "conexao.php";

$cr_codigo1=$_POST['cr_codigo'];


$sql = "DELETE FROM tb_contareceber
			   WHERE cr_codigo = '$cr_codigo1'";
			   
if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 
