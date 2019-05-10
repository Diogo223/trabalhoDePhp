<!DOCTYPE html>
<html>
<head>
	<title>Listar</title>
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
	<?php include_once('conexao.php');?>
	<h1>LISTA DE ALUNOS CADASTRADOS</h1>
	<div id="a">
		<button><a href="listar.php">Listar</a></button>
		<button><a href="index.html">Home</a></button>
	<button><a href="cadastroAluno.php">Cadastrar</a></button>
	</div>
	<div id="b">
			
	<table border="1px" align="center">
		
		<tr>
			<td>Nº</td>
			<td>Nome</td>
			<td>Sexo</td>
			<td>Atualizar</td>
			<td>Excluir</td>
		</tr>
		<?php
		  $sql = "SELECT * FROM ALUNO";

		  $r = mysqli_query($con, $sql);

		  if ($r) {
		  	while ($dados = mysqli_fetch_array($r)) {?>

		  		<tr>
		  			<td> <?php echo $dados['numero']; ?> </td>
		  			<td> <?php echo $dados['nome']; ?> </td>
		  			<td> <?php echo $dados['sexo']; ?> </td>
		  			<td> <a href="editar.php?id=<?php   echo $dados['numero']; ?> &nome=<?php   echo $dados['nome']; ?>&sexo=<?php echo $dados['sexo']; ?>"> <img src="atu.png" width="20" height="20"></a> </td>

		  			<td> <a href="excluir.php?id=<?php   echo $dados['numero']; ?>   "><img src="exc.png" width="20" height="20"></a> </td>
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