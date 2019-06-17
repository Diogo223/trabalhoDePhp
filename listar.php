<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listar Usuários</title>
</head>
	<style type="text/css">

		table{
		
		border-radius: 10px;
		
		background-color: gray;
		color: white;
		
		
	}

	td{
		border-radius: 10px;
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

	button{
		border-radius: 10px;

	}
	a {
			text-decoration: none
		}
	</style>
<body>
	<?php include_once('conection.php');?>
	
	<div id="a">
		<h1>LISTA DE USUARIOS CADASTRADOS</h1>
		<button><a href="listar.php">Listar</a></button>
		<button><a href="UserIndex.html">Home</a></button>
	<button><a href="cadastroUser.php">Cadastrar</a></button>
	</div>
	<div id="b">
			
	<table border="1px" align="center">
		
		<tr>
			<td>Telefone</td>
			<td>Nome</td>
			<td>E-mail</td>
			<td>Atualizar</td>
			<td>Excluir</td>
		</tr>
		<?php
		  $sql = "SELECT * FROM USER";

		  $r = mysqli_query($con, $sql);

		  if ($r) {
		  	while ($dados = mysqli_fetch_array($r)) {?>

		  		<tr>
		  			<td> <?php echo $dados['Telefone']; ?> </td>
		  			<td> <?php echo $dados['Nome']; ?> </td>
		  			<td> <?php echo $dados['mail']; ?> </td>
		  			<td> <a href="editar.php?id=<?php   echo $dados['Telefone']; ?> &nome=<?php   echo $dados['Nome']; ?>&mail=<?php echo $dados['mail']; ?>"> <img src="atu.png" width="20" height="20"></a> </td>

		  			<td> <a href="excluir.php?id=<?php   echo $dados['Telefone']; ?>   "><img src="exc.png" width="20" height="20"></a> </td>
		  		</tr>
		  		<?php 
		  	}
		  }
		  ?>

	</table>
</div>

	<div id="c">
		
	</div>
</body>
</html>