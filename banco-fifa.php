<?php require_once "conecta.php"?>
<?php require_once "fifa.php"?>

<?php

function inserefifa($conexao,$fifa){
	$sql="insert into jogadores (nome,email,cidade,uf)
		values ('$fifa->Nome',
				'$fifa->E-mail',
				'$fifa->Cidade',
				'$fifa->UF' )";	
				
	$resultado= mysqli_query($conexao, $sql);
	return $resultado;
}
	function listafifa ($conexao){
	$sql="select * from jogadores";
	$resultado=mysqli_query($conexao,$sql);
	echo "<h3><center>DADOS:</h3></center>";
	while ( $array=mysqli_fetch_assoc($resultado)){
		?>
		
		
	<form action="alterarForm.php" method=GET>
		<table align=center border=1>	
			<tr>	
				<td>
					<input type=hidden value= <?php echo $array ['id'];?>
					name=id>
				</td>
			</tr>
	
			<tr>	
				<td> nome:</td>
				<td>
					<input type=text value=<?php echo $array ['nome'];?>
					name=id>
				</td>
			</tr>
			
			<tr>	
				<td> email:</td>
				<td>
					<input type=text value=<?php echo $array ['email'];?>
					name=id>
				</td>
			</tr>
			
			<tr>	
				<td> cidade:</td>
				<td>
					<input type=text value=<?php echo $array ['cidade'];?>
					name=id>
				</td>
			</tr>
			
			<tr>	
				<td> uf:</td>
				<td>
					<input type=text value=<?php echo $array ['uf'];?>
					name=id>
				</td>
			</tr>
			
			<tr>
				<td colspan=2><input type=submit value="Alterar"></td>
			
			</tr>
		</table>
	</form>
		
		<form action="remove-fifa.php" method=post>
			<table border=1 align=center>
			
			<tr>
				<td>
				<input type=hidden value=<?php echo $array ['id'];?>
					name=id>
				</td>
				
				<td>
				<input type=submit value="Remover">
				</td>
			</tr>
		</form>
<?php
		}
	}
?>
	
	
	
	
	
	
	
	
	
?>