<?php
$lista_coisa = [];
$lista_coisa  [ 'frutas'] = [];
$lista_coisa ['pessoa'] = [];

$lista_coisa['frutas'] = [
    'Banana',
    'Maçã',
    'Morango',
    'Uva',
    'Abacate'
];
$lista_coisa['pessoa'] = [
    'Jose',
    'Barros',
    'Ferreira'
];
echo '<pre>';
print_r($lista_coisa);
echo '</pre>';
echo '<hr>';
echo '<pre>';
print_r($lista_coisa['pessoa']);
echo '</pre>';
echo '<hr>';
echo '<pre>';
print_r($lista_coisa['frutas']);
echo '</pre>';
echo '<hr>';
echo $lista_coisa['frutas'][2];
echo '<hr>';
echo $lista_coisa['pessoa'][2];

