<?php

include("executa_crendeciais_bd.php");

$url = $_POST["url_php"];
//$url = '!pass=1cod=2cod=34&6$8&10&pass=12cod=13$&1617&cod=19$21$$$&26$cod=28&$cod=31pass=323334cod=35$cod=373839.php';

$query = "SELECT * FROM decode_pagina where name_pag= '". $url . "' ";
$dados = mysqli_query($conexao,$query);
$retorno = mysqli_fetch_assoc($dados);
echo $retorno["name_user"] . "|" . $retorno["ultimo_acesso"];



?>