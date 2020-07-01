<?php 

include("executa_crendeciais_bd.php");

$tabela_rel = $_POST["tab_relatorio_p"];
$dta_inicio = $_POST["dt_inicio_p"];
$dta_fim = $_POST["dt_fim_p"];


//2020-05-11
$x=  substr($dta_inicio, 8,2);
$dta_inicio_tratada = substr($dta_inicio, 8,2) ."/". substr($dta_inicio, 5,2) ."/". substr($dta_inicio, 0,4);
$dta_fim_tratada = substr($dta_fim, 8,2) ."/". substr($dta_fim, 5,2) ."/". substr($dta_fim, 0,4);



$sql= "SELECT id_cad_cliente,tipo_cadastro,nome,rg,cpf,dt_cadastro,sexo,dt_nascm,responsavel_cadastro FROM " . $tabela_rel . " WHERE dt_cadastro >= '" . $dta_inicio_tratada . "' and dt_cadastro <= '". $dta_fim_tratada . "'";	

//$sql= "SELECT id_cad_cliente,tipo_cadastro,nome,rg,cpf,dt_cadastro FROM " . $tabela_rel . " WHERE dt_cadastro > '01/05/2020' and dt_cadastro < '06/05/2020'";

$processa_query = mysqli_query($conexao,$sql);
$qtd_itens = mysqli_num_rows($processa_query);


for ($i=0; $i < $qtd_itens ; $i++) { 
	$resultado[] = mysqli_fetch_assoc($processa_query);
}

echo (json_encode($resultado));

?>