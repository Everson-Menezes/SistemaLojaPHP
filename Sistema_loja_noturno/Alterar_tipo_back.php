<?php
include "conexao.php";
$tpp_codigo1=$_POST['tpp_codigo'];
$tpp_descricao1=$_POST['tpp_descricao'];
          
$sql = "UPDATE tb_tipoproduto
	                SET tpp_descricao ='$tpp_descricao1'
                    WHERE tpp_codigo='$tpp_codigo1'";

if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 