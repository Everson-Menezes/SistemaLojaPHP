<?php
include "conexao.php";
$nf_codigo1=$_POST['nf_codigo'];
$nf_valornf1=$_POST['nf_valornf'];
$nf_taxaimpostonf1=$_POST['nf_taxaimpostonf'];
$nf_valorimposto1=$_POST['nf_valorimposto'];

$sql = "UPDATE tb_notafiscal 
	                    SET nf_valornf = '$nf_valornf1',
	                        nf_taxaimpostonf =  '$nf_taxaimpostonf1',
	                        nf_valorimposto = '$nf_valorimposto1'
	                    WHERE nf_codigo='$nf_codigo1'";
          
if(mysqli_query($db, $sql)){
    echo "Dados gravados com sucesso!";
} else{
    echo "Erro: " . $sql . "" . mysqli_error($db);
}
 
 mysqli_close ($db);
//include "consulta_contapagp.php";
?> 