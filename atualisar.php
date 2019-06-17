<!DOCTYPE html>
<html>
<head>
	<title>Atualisação</title>
</head>
	<style type="text/css">
		

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
	
 <div id="a">
 	<h1>Atualizar Dados </h1>
 	<button><a href="listar.php">Listar</a></button>
	<button><a href="index.html">Home</a></button>
	<button><a href="cadastroAluno.php">Cadastrar</a></button>
 </div>
<div id="b">
<?php

	$telefone = $_POST['n'];
	$nome = $_POST['nome'];
	$mail = $_POST['email'];

	include_once('conexao.php');

	$sql = "UPDATE USER SET NOME ='$nome', EMAIL = '$mail' WHERE telefone = $n";

	$r = mysqli_query($con, $sql);
	if($r){
		echo "Alterado";
	}else{
		echo "Ocorreu um Erro";
	}


?>
</div>
<div id="c">
	
</div>

</body>
</html>