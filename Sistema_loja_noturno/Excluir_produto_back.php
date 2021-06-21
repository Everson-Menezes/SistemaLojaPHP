<?php
include "conexao.php";
$pro_codigo1=$_POST['pro_codigo'];


$sql = "DELETE FROM tb_produtos
			   WHERE pro_codigo = '$pro_codigo1'";
            
if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?>