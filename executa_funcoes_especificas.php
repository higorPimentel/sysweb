<?php 

$conexao = mysqli_connect('localhost','root','','cadastro');
//$conexao = mysqli_connect('localhost','u259419259_higor2','higor961802','u259419259_controle_estoq');

$funcao_esp = $_POST["funcao_esp_php"];
$url_atual =  $_POST["url_atual_php"];

// EXECUTA LOGOOF
	if( $funcao_esp == 1) {
		
				$query = "SELECT * FROM decode_pagina WHERE name_pag ='" . $url_atual . "'";	
				$processa_query = mysqli_query($conexao,$query);
				
				$retorno_qtd_acesso = mysqli_fetch_assoc($processa_query);
				$subtrai_qtd  = $retorno_qtd_acesso["usuario_atv"] - 1;	
				
				$query_altera_qtd_acesso = "UPDATE decode_pagina SET usuario_atv = '" . $subtrai_qtd   . "' WHERE name_pag ='" . $url_atual . "'";
				mysqli_query($conexao,$query_altera_qtd_acesso);
				
				unlink("pagina_inicial" . $url_atual);
				unlink("cadastro_clientes" . $url_atual);
				
			//	echo("pagina_inicial" . $url_atual);
				
							
	
	};



?>