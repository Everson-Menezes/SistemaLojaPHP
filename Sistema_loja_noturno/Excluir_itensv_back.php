<?php
include "conexao.php";
$itensvenda_codigo1=$_POST['itensvenda_codigo'];

$sql = "DELETE FROM tb_itensvenda
				   WHERE itensvenda_codigo = '$itensvenda_codigo1'";

if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 