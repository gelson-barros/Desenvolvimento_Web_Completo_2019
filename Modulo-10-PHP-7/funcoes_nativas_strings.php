<?php 
$texto = "Gelson Ferreira";

echo strtolower($texto);//Transforma todos os caracteres da string em minúsculas
echo "<hr>";
echo strtoupper($texto); //Transforma todos os caracteres da string em maiúsculas
echo "<hr>";
echo ucfirst($texto); //Transforma primeiro caracter da string em maiúsculo
echo "<hr>";
echo strlen($texto); //conta a quantidade de caracters de uma string
echo "<hr>";
//str_replace(<procura por>,<substitui por>,$texto)// substitui uma cadeia de caracteres por outra dentro de uma string
echo str_replace("Ferreira","De Barros",$texto); // substitui uma cadeia de caracteres por outra dentro de uma string
echo "<hr>";
//substr($texto, <posicao inicial>, <qtde caracteres>)//retorna parte de uma string
echo substr($texto, 7, 8); //retorna parte de uma string
?>