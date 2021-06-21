<?php
include "conexao.php";
$ven_codigo1=$_POST['ven_codigo'];



$sql = "DELETE FROM tb_vendas
			   WHERE ven_codigo = '$ven_codigo1'";

if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 