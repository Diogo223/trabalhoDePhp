<!DOCTYPE html>
<html>
<head>
	<title>Atualisação</title>
</head>
	<style type="text/css">
		

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
	<h1>Dados Atualizados</h1>
 <div id="a">
 	<button><a href="listar.php">Listar</a></button>
	<button><a href="index.html">Home</a></button>
	<button><a href="cadastroAluno.php">Cadastrar</a></button>
 </div>
<div id="b">
<?php

	$numero = $_POST['n'];
	$nome = $_POST['nome'];
	$sexo = $_POST['sexo'];

	include_once('conexao.php');

	$sql = "UPDATE ALUNO SET NOME ='$nome', SEXO = '$sexo' WHERE NUMERO = $numero ";

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