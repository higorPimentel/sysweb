<?php 

include("executa_crendeciais_bd.php");

$tipo_cadastro = $_POST["tipo_cadastro_p"];
$nome = $_POST["nome_p"];
$rg = $_POST["rg_p"];
$cpf = $_POST["cpf_p"];
$outros_doc = $_POST["outros_doc_p"];
$sexo = $_POST["sexo_p"];
$dt_nascm = $_POST["dt_nascm_p"];
$responsavel = $_POST["responsavel_p"];
$telefone = $_POST["telefone_p"];
$celular = $_POST["celular_p"];
$razao_social = $_POST["razao_social_p"];
$cnpj = $_POST["cnpj_p"];
$inscricao_estadual = $_POST["inscricao_p"];
$cep_cliente =  $_POST["cep_cliente_p"];
$rua_cliente = $_POST["rua_cliente_p"];
$num_cliente = $_POST["numero_cliente_p"];
$complemento_cliente = $_POST["complemento_cliente_p"];
$bairro_cliente = $_POST["bairro_cliente_p"];
$uf_cliente = $_POST["uf_cliente_p"];
$cidade_cliente = $_POST["cidade_cliente_p"];
$email_cliente = $_POST["email_cliente_p"];
$email_nf_cliente = $_POST["email_nf_cliente_p"];
$cep_cobranca = $_POST["cep_cobranca_p"];
$rua_cobranca = $_POST["rua_cobranca_p"];
$num_cobranca = $_POST["numero_cobranca_p"];
$complemento_cobranca = $_POST["complemento_cobranca_p"];
$bairro_cobranca = $_POST["bairro_cobranca_p"];
$uf_cobranca = $_POST["uf_cobranca_p"];
$cidade_cobranca = $_POST["cidade_cobranca_p"];
$email_cobranca = $_POST["email_cobranca_p"];
$email_nf_cobranca = $_POST["email_nf_cobranca_p"];
$dt_cadastro = $_POST["dt_cadastro_p"];
$responsavel_cadastro = $_POST["responsavel_cadastro_p"];
$dt_alteracao = $_POST["dt_alteracao_p"];
$responsavel_alteracao = $_POST["responsavel_alteracao_p"];
$observacao = $_POST["obs_p"];

/*
$array_teste = array ($tipo_cadastro, 
$nome,
$rg,
$cpf, 
$outros_doc,
$sexo,
$dt_nascm, 
$responsavel, 
$telefone,
$celular,
$razao_social, 
$cnpj,
$inscricao_estadual, 
$cep_cliente, 
$rua_cliente,
$num_cliente,
$complemento_cliente, 
$bairro_cliente, 
$uf_cliente, 
$cidade_cliente, 
$email_cliente, 
$email_nf_cliente,
$cep_cobranca,
$rua_cobranca,
$num_cobranca, 
$complemento_cobranca, 
$bairro_cobranca,
$uf_cobranca,
$cidade_cobranca, 
$email_cobranca, 
$email_nf_cobranca, 
$dt_cadastro, 
$responsavel_cadastro, 
$dt_alteracao, 
$responsavel_alteracao,
$observacao);


for ( $j = 0 ;  $j < count($array_teste); $j ++ ) {
	$array_teste[$j] = str_replace($comAcentos,$semAcentos,$array_teste[$j]);
	
}

*/

$query = "INSERT INTO  cadastro_clientes (tipo_cadastro,nome,rg,cpf,outros_doc,sexo,dt_nascm,responsavel,telefone,celular,razao_social,cnpj,inscricao_estadual,cep_cliente,
rua_cliente,num_cliente,complemento_cliente,bairro_cliente,uf_cliente,cidade_cliente,email_cliente,email_nf_cliente,cep_cobranca,rua_cobranca,num_cobranca,complemento_cobranca,
bairro_cobranca,uf_cobranca,cidade_cobranca,email_cobranca,email_nf_cobranca,responsavel_cadastro,dt_cadastro,responsavel_alteracao,dt_alteracao,observacao) values
('$tipo_cadastro','$nome','$rg','$cpf','$outros_doc','$sexo','$dt_nascm','$responsavel','$telefone','$celular','$razao_social','$cnpj','$inscricao_estadual','$cep_cliente',
'$rua_cliente','$num_cliente','$complemento_cliente','$bairro_cliente','$uf_cliente','$cidade_cliente','$email_cliente','$email_nf_cliente','$cep_cobranca','$rua_cobranca',
'$num_cobranca','$complemento_cobranca','$bairro_cobranca','$uf_cobranca','$cidade_cobranca','$email_cobranca','$email_nf_cobranca','$responsavel_cadastro','$dt_cadastro',
'$responsavel_alteracao','$dt_alteracao','$observacao')";

$retorno = mysqli_query($conexao,$query);
echo $retorno;

?>