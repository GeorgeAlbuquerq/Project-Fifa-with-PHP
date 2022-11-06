<?php require_once "conecta.php" ?>
<?php require_once "fifa.php" ?>
<?php require_once "banco-fifa.php"?>
<?php   
		$fifa = new fifa;
		$fifa->nome=  $_POST["Nome"];
		$fifa->email= $_POST["E-mail"];
		$fifa->cidade=$_POST["Cidade"];
		$fifa->uf=    $_POST["UF"];

		if (inserefifa($conexao,$fifa) ) { echo "Inserido com sucesso"; } 
		else {echo mysqli_error($conexao);}
?>
<p>
<a href="index.php">Voltar</a><br>
<a href="listar.php">Listar</a><br>
</p>