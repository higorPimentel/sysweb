<?php 

include("executa_crendeciais_bd.php");

$query = "SELECT * FROM login ";
$result = mysqli_query($conexao,$query);



for ($i=0; $i < 3 ; $i++) { 
	$item[] = mysqli_fetch_assoc($result); 	
}

$array_item_json = json_encode($item);

echo($array_item_json);

?>