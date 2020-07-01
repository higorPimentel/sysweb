<?php 

include("executa_crendeciais_bd.php");

// dados cad login
$nome = $_POST["nome_p"];
$email = $_POST["email_p"];
$senha = $_POST["senha_p"];
$dta_hoje = date('d-m-Y H:i');

$query = "INSERT INTO  login (login,senha,email)values('$nome','$senha','$email')" ;
$ret1 = mysqli_query($conexao,$query);

$query = "INSERT INTO  decode_pagina (name_user,name_pag,usuario_atv,ultimo_acesso)values('$nome','pagina','0','$dta_hoje')" ;
$ret2 = mysqli_query($conexao,$query);


	if ( $ret1 == 1 && $ret2 == 1) {
		$retorno = 1;		
	} else {
		$retorno = 0;
	}

echo $retorno;
?>