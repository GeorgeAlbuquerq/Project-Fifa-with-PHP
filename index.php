<html lang="en">
  <head>
		<center><h1>Cadastro de Jogadores </h1>
  </head>
  <body>
	
	<form action="adiciona-fifa.php" method="POST">
	  Nome:<br/> 
	  <input type="text" name="Nome" placeholder="Qual seu nome?"><br/><br/>
	  E-mail:<br/> 
	  <input type="email" name="email" placeholder="Qual seu e-mail?"><br/><br/>
	  Cidade:<br/> 
	  <input type="text" name="Cidade" placeholder="Qual sua cidade?"><br/><br/>
	  UF:<br/> 
	  <input type="text" name="UF" size="2" placeholder="UF">
	  <br/><br/>
	  <input type="hidden" value="-1" name="id" >
	  <button type="submit">Cadastrar</button>
		</center>
	</form>
  </body>
</html>
        