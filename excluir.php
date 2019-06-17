<?php 
	

	$numero = $_GET['id'];
	

include_once('conexao.php');

	$sql = "DELETE FROM USER WHERE TELEFONE = $numero";

	$r = mysqli_query($con, $sql);

	if($r){
		echo "Deletado";
	}else{
		echo "Ocorreu um Erro";
	}
	include_once('listar.php')
?>