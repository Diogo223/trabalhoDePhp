<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Alunos</title>
</head>
<style type="text/css">
	table{
		
		border-radius: 25px;
		height: 200px;
		background-color: gray;
		color: white;
		font-family: italic;
		
	}

	td{
		border-radius: 25px;
	}
	input{
		border-radius: 25px;

	}
	
	h1{
		text-align: center;
		color: blue;	
	}
	#a{
			background-color: blue;
			text-decoration: none;
			text-align: center;
			height: 100px;
		}
		#b{
			margin-top: -30px;
			background-color: lightblue;
			text-decoration: none;
			text-align: center;
			height: 600px;
		}
		#c{
			background-color: blue;
			text-decoration: none;
			text-align: center;
			height: 100px;
		}
</style>
<body>
	<h1>Cadastro</h1>
	
<div id="a">
	<button><a href="listar.php">Listar</a></button>
	<button><a href="index.html">Home</a></button>
	<button><a href="cadastroAluno.php">Cadastrar</a></button>
</div>

<div id="b">
	<table border="1px" align="center">
	
	<form action="salvar.php" method="POST">
		<tr>
			<td>
		Numero:<input type="text" name="n" size="2"><br><br>
		Nome:<input type="text" name="nome" size="20"><br><br>
		Sexo:<input type="radio" name="sexo" value="m">M
			 <input type="radio" name="sexo" value="f">F<br><br>

			 <input type="submit" value="salvar">
			 </td>
			 </tr>
	</form>

	</table>
</div>
<div id="c"></div>
</body>
</html>