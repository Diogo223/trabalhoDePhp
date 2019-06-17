<html>
	<head>
		<title>Atualização</title>
	</head>
	<style type="text/css">
		table{
		text-align: center;
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
		color:white;	
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
		
	button{
		border-radius: 10px;

	}
	a {
			text-decoration: none
		}
	</style>

	<body>
<?php 
 include_once('conexao.php');

	$telefone = $_GET['id'];
	$nome = $_GET['nome'];
	$mail = $_GET['mail'];
	

	
?>
	
 <div id="a">
 	<h1>Atualisar cadastro</h1>
 	<button><a href="listar.php">Listar</a></button>
 	<button><a href="index.html">Home</a></button>
	<button><a href="cadastroAluno.php">Cadastrar</a></button>
 </div>
 <div id="b">
 	
	<table border="1px" align="center">
	
	<form action="atualisar.php" method="POST">
		<tr>
			<td>
		Numero:<input type="text" name="id" value="<?php echo $telefone;?>" size="20"><br><br>
		Nome:<input type="text" name="nome" value="<?php echo $nome;?>" size="20" ><br><br>
		Sexo:<input type="text" name="email" value="<?php echo $mail;?>" size="20" ><br><br>

			 </a><input type="submit" value="Editar">
			 </td>
		</tr>
	</form>

	</table>
	</div>
	<div id="c">
 	</div>

</body>
</html>