<?php
$conexao = mysqli_connect('localhost','root','','cadastro');
//$conexao = mysqli_connect('localhost','u259419259_higor2','higor961802','u259419259_controle_estoq');


$url = $_POST["url_php"];

$query = "SELECT * FROM decode_pagina where name_pag= '". $url . "' ";
$dados = mysqli_query($conexao,$query);
$retorno = mysqli_fetch_assoc($dados);
echo $retorno["name_user"];



?>