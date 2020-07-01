<?php

include("executa_crendeciais_bd.php");

$log_php = $_POST ["login_php"];
$sen_php = $_POST ["senha_php"];	

$query = "SELECT * FROM login  WHERE login = '$log_php' and senha = '$sen_php'";
$Processa_query =  mysqli_query($conexao,$query);


	$dados = mysqli_fetch_assoc($Processa_query);
		
	
	echo ($dados["login"] . "_" . $dados["id_login"]);
	
	
?>