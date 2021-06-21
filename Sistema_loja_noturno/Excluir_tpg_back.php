<?php
include "conexao.php";
$tpg_codigo1=$_POST['tpg_codigo'];

                         
$sql = "DELETE FROM tb_tipopagto
				   WHERE tpg_codigo = '$tpg_codigo1'";
            
if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 