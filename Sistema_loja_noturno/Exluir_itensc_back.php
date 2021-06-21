<?php
include "conexao.php";
$itenscompra_cod1=$_POST['itenscompra_cod'];

$sql = "DELETE FROM tb_itenscompra
			   WHERE itenscompra_cod = '$itenscompra_cod1'";

if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 