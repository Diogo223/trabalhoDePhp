<?php 

	$con = mysqli_connect("localhost", "root", "", "Turma");

	if ($con) {
		echo "Conectado com Sucesso";
	}else{
		echo "Erro na conexão";
	}

 ?>