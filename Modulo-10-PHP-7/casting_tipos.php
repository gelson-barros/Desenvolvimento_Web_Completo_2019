<?php

/**transformar em outros tipos */
//gettype() => retorna o tipo da variavel
$valor = true;
//$valor2 = (float) $valor;//float, double,real
//$valor2 = (string) $valor;

//$valor2 = (int) $valor;//integer,int
//$valor2 = (string) $valor;


//$valor2 = (integer) $valor;
//$valor2 = (boolean) $valor;

//$valor2 = (int) $valor;
$valor2 = (string) $valor;


echo $valor . ' ' . gettype($valor);
echo '<br>';
echo $valor2 . ' ' . gettype($valor2);
