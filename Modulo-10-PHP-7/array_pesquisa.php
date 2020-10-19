<?php


$lista_frutas = [
     'Banana',
     'Maçã',
     'Morango',
     'Uva'
];
/*
echo '<pre>';
print_r($lista_frutas);
echo '</pre>';
//in_array()//true ou false para a existência do que está sendo procurado
//array_search()//retorna o indice do valor pesquisado caso contrario null
$existe = in_array('Abacate', $lista_frutas);
//true -> 1
//false -> vazio
echo '<hr>';
if ($existe) {
    echo "Sim, o valor pesquisado existe no array";
} else {
    echo "Não, o valor pesquisado não existe no array";
}
echo '<hr>';

echo array_search('Abacate', $lista_frutas);
*/
$lista_coisa = [
    'Frutas' => $lista_frutas,
    'Pessoas' => [
        'Jose',
        'Barros',
        'Ferreira'
    ]
];

echo '<pre>';
print_r($lista_coisa);
echo '</pre>';
echo in_array('Maçã', $lista_coisa['Frutas']);
echo '<hr>';
echo array_search('Barros', $lista_coisa['Pessoas']);