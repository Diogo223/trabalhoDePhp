<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Usuários</title>
</head>
<style type="text/css">
	table{
		
		border-radius: 25px;
		height: 400px;
		width: 400px;
		background-color: lightgreen;
		color: black;
		font-family: italic;
		
	}

	button{
		border-radius: 10px;


	}
	a {
			text-decoration: none
		}


	td{
		border-radius: 25px;
	}
	input{
		border-radius: 25px;

	}
	
	h1{
		text-align: center;
		color: white;	
	}
	#a{
			background-color: red;
			text-decoration: none;
			text-align: center;
			height: 200px;
		}
		#b{
			background-color: green;
			text-decoration: none;
			text-align: center;
			height: 600px;
		}
		#c{
			background-color: red;
			text-decoration: none;
			text-align: center;
			height: 100px;
		}
</style>
<body>
	
	
<div id="a">
	<h1>Cadastro</h1>
	<button><a href="listar.php">Listar</a></button>
	<button><a href="UserIndex.html">Home</a></button>
	<button><a href="cadastroUser.php">Cadastrar</a></button>
</div>

<div id="b">
	<table border="1px" align="center">
	
	<form action="salvar.php" method="POST">
		<tr>
			<td>
		Telefone:<input type="text" name="telefone" size="20"><br><br>
		Nome:<input type="text" name="nome" size="20"><br><br>
		E-mail:<input type="text" name="email" size="20"><br><br>

			 <input type="submit" value="cadastrar">
			 </td>
			 </tr>
	</form>

	</table>
</div>
<div id="c"></div>
</body>
</html>