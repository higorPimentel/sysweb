<?php 

include("executa_crendeciais_bd.php");

$usuario_atv = $_POST["user_atv"];
$query_seleciona = "SELECT  *  FROM decode_pagina";
$processa = mysqli_query($conexao,$query_seleciona);
$result = mysqli_fetch_assoc($processa);
$nome_pg_atual = $result["name_pag"];


$xcod = "!";
for ($i=1;$i < 40; $i++) {
	
	$x_rand = rand(1,5);
	
		if ($x_rand == 1) {
				$cod[$i] =  $i ;
		} else if ($x_rand == 2){
			$cod[$i] =  "pass=". $i ; 
		} else if ($x_rand == 3){
			$cod[$i] =  "$";        
		} else if ($x_rand == 4){
			$cod[$i] =  "cod=" . $i;   
		} else if ($x_rand == 5){
			$cod[$i] =  "&";       
		}
			
}

		for ($j=1;$j < 40; $j++) {
			
		$xcod = $xcod . $cod[$j];
			
		}
		

$query_ult_user = "SELECT * FROM decode_pagina WHERE id_decode_pagina ='" . $usuario_atv . "'";
$preocss_quer_1 = mysqli_query($conexao,$query_ult_user);
$retorno_qtd_acesso = mysqli_fetch_assoc($preocss_quer_1);
$soma_qtd  = $retorno_qtd_acesso["usuario_atv"] + 1;
	
	
$query_altera_qtd_acesso = "UPDATE decode_pagina SET usuario_atv = '" . $soma_qtd  . "' WHERE id_decode_pagina ='" . $usuario_atv . "'";
mysqli_query($conexao,$query_altera_qtd_acesso);
$query_altera_url = "UPDATE decode_pagina SET name_pag = '"  .  $xcod . ".php' WHERE id_decode_pagina ='" . $usuario_atv . "'";
mysqli_query($conexao,$query_altera_url);


// AO INCLUIR UMA NOVA PAGINA, INCLUIR TBM EM FUNÇÕES ESPECIFICAS
//rename("pagina_inicial" . $nome_pg_atual,"pagina_inicial"  . $xcod .".php");
copy("pagina_inicial.php","pagina_inicial"  .  $xcod .".php");
copy("cadastro_clientes.php","cadastro_clientes"  .  $xcod .".php");
copy("rel_cad_gerais.php","rel_cad_gerais"  .  $xcod .".php");
copy("pg_novo_usuario.php","pg_novo_usuario"  .  $xcod .".php");
echo( $xcod .".php");





?>