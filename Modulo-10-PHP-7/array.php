<?php
//com variaveis
$variavel1 = 'Banana';
$variavel2 = 'Maçã';
$variavel3 = 'Morango';
$variavel4 = 'Uva';

//com um único array
/*
$lista_frutas[1] = 'Banana';
$lista_frutas[2] = 'Maçã';
$lista_frutas[3] = 'Morango';
$lista_frutas[4] = 'Uva';
*/

//sequencias ( numéricos)
//$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
/*
$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
$lista_frutas[] = 'Abacaxi';
echo '<pre>';
var_dump($lista_frutas);
echo '</pre>';
echo '<hr>';
echo '<pre>';
print_r($lista_frutas);
echo '</pre>';
echo $lista_frutas[3];
*/
//associativos
/*$lista_frutas = array(
    'a' => 'Banana', 
    'b' => 'Maçã',
    'x' => 'Morango',
    'z' => 'Uva',
    'z' => 'Abacate'
);*/
$lista_frutas = [
    'a' => 'Banana',
    'b' => 'Maçã',
    'x' => 'Morango',
    'z' => 'Uva',
    'z' => 'Abacate'
];
$lista_frutas['w'] = 'Abacaxi';
echo '<pre>';
var_dump($lista_frutas);
echo '</pre>';
echo $lista_frutas['x'];
