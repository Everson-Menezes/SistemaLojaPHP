<?php
$mysql_hostname = "127.0.0.1";
$mysql_user = "root";
$mysql_password = "vertrigo";
$mysql_database = "sistema_loja_noite";
$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Não foi possível conectar no banco, por favor verifique host, usuário e senha.");
mysqli_select_db($db, $mysql_database) or die("Base de dados não disponível e/ou encontrada!");
?>