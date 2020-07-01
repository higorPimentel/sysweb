<?php 


$comAcentos = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 
'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 
'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú');

$semAcentos = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 
'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 
'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U');


$array_teste = array(
'higor',
'INFORMAÇÃO',
'oliveira',
'CAMPÃO',
'AÇENTUADO',
'VETERINÁRIO',
);

echo "dados com acento <br>";
for ( $j = 0 ;  $j < count($array_teste); $j ++ ) { 
  echo($array_teste[$j] . "<br>");
}



for ( $j = 0 ;  $j < count($array_teste); $j ++ ) {
	$array_teste[$j] = str_replace($comAcentos,$semAcentos,$array_teste[$j]);
	
}


echo "<br><br> dados sem acento <br>";
for ( $j = 0 ;  $j < count($array_teste); $j ++ ) { 
  echo($array_teste[$j] . "<br>");
}


$x =  date("d-m-Y", strtotime('-1day'));
$l =  date("d-m-Y H:i");

echo($l);



?>