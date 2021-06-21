<?php
include "conexao.php";
$cp_codigo1=$_POST['cp_codigo'];

$sql = "DELETE FROM tb_contapagar
			   WHERE cp_codigo = '$cp_codigo1'";

if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 