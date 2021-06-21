<?php
include "conexao.php";
$tpg_codigo1=$_POST['tpg_codigo'];
$tpg_descricao1=$_POST['tpg_descricao'];
$tpg_qtde1=$_POST['tpg_qtde'];
$tpg_ativo1=$_POST['tpg_ativo'];
                         
$sql = "UPDATE tb_tipopagto 
                    SET tpg_descricao = '$tpg_descricao1', 
                        tpg_ativo = '$tpg_ativo1', 
                        tpg_qtde = '$tpg_qtde1', 
                    WHERE tpg_codigo = '$tpg_codigo1'";

if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 