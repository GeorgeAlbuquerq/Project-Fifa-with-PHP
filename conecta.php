<?php
$conexao=mysqli_connect("localhost", "root","", "fifa");
 
if ($obj_mysqli->connect_erro)
{
	echo "Ocorreu um erro na conexão com o banco de dados.";
	exit;
}
mysqli_set_charset($obj_mysqli, 'utf8');

?>
