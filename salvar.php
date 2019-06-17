<?php  include_once('index.html');
	include_once('conexao.php');
	$telefone = $_POST['n'];
	$nome = $_POST['nome'];
	$mail = $_POST['mail'];
	
	$sql = "INSERT INTO USER (TELEFONE, NOME, EMAIL) VALUES ('$telefone', '$nome', '$mail')";

	$r = mysqli_query($con, $sql);
	if ($r) {
		echo "Aluno cadastrado com sucesso!";
	}else{
		echo "Erro ao cadastrar.";
	}
?>