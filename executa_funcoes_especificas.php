<?php 

include("executa_crendeciais_bd.php");

$funcao_esp = $_POST["funcao_esp_php"];	
$dt_atual = date("d-m-Y H:i");


// EXECUTA LOGOOF
	if( $funcao_esp == 1) {
		
		$url_atual =  $_POST["url_atual_php"];
		
				$query = "SELECT * FROM decode_pagina WHERE name_pag ='" . $url_atual . "'";	
				$processa_query = mysqli_query($conexao,$query);
				
				$retorno_qtd_acesso = mysqli_fetch_assoc($processa_query);
				$subtrai_qtd  = $retorno_qtd_acesso["usuario_atv"] - 1;	
				
				$query_altera_qtd_acesso = "UPDATE decode_pagina SET usuario_atv = '" . $subtrai_qtd   . "', ultimo_acesso = '" . $dt_atual . "' WHERE name_pag ='" . $url_atual . "'";
				mysqli_query($conexao,$query_altera_qtd_acesso);
				
				
				unlink("pagina_inicial" . $url_atual);
				unlink("cadastro_clientes" . $url_atual);
				unlink("rel_cad_gerais" . $url_atual);
				unlink("pg_novo_usuario" . $url_atual);


			//	echo("pagina_inicial" . $url_atual);
			
	
	// CARREGA COMBOBOX CIDADES	
	} else if ($funcao_esp == 2 ){
			
			$uf_selec = $_POST["uf_selec_php"];

								$query = "SELECT * FROM cidade  where estado =  $uf_selec " ;             // SELECT DADOS
								$Processa = mysqli_query($conexao,$query); // PROCESSA QUERY
								$linhas = mysqli_num_rows($Processa);      // CONTAGEM QTD_LINHAS QUERY



								for($i = 0 ;$i < $linhas; $i ++) {
								$dados[] = mysqli_fetch_assoc($Processa);	
								}

								 echo json_encode ($dados);
						
	

	// CARREGA ID USUARIO CADASTRO			
	} else if ($funcao_esp == 3 ){		
			
			$query = "SELECT * FROM cadastro_clientes ORDER BY id_cad_cliente DESC limit 1";
			$ultimo_id = mysqli_query($conexao,$query);
			$retorno = mysqli_fetch_assoc($ultimo_id);
			echo($retorno["id_cad_cliente"] + 1 . "|" . substr($dt_atual,0,10));
		
	
	}



?>