<?php
$lista_frutas = [
    'a' => 'Banana',
    'b' => 'Maçã',
    'x' => 'Morango',
    'z' => 'Uva',
    'z' => 'Abacate'
];
$string = 'String';
//is_array(array) -> verifica se o parâmetro é um array
$retorno = is_array($lista_frutas);
if ($retorno) {
    echo 'Sim, é um array';
} else {
    echo 'Não, não é um array';
}
echo '<hr>';
//-----------------------------------------------------
//array_keys(array) -> Retorna todas as chaves de um array
echo '<pre>';
print_r($lista_frutas);
echo '</pre>';

$chaves_array = array_keys($lista_frutas);

echo '<pre>';
print_r($chaves_array);
echo '</pre>';
echo '<hr>';
//-----------------------------------------------------
//sort(array) -> ordena um array reajusta seus índices
$array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx');

echo '<pre>';
print_r($array);
echo '</pre>';

echo sort($array); //true ou false

echo '<pre>';
print_r($array);
echo '</pre>';

echo '<hr>';
//-----------------------------------------------------
//asort(array) -> ordena um array preservando os índices
$array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx');
echo '<pre>';
print_r($array);
echo '</pre>';

echo asort($array); //true ou false

echo '<pre>';
print_r($array);
echo '</pre>';

echo '<hr>';
//-----------------------------------------------------
//count(array) -> conto a quantidade de elementos de um array
echo '<pre>';
print_r($array);
echo '</pre>';

echo count($array); 

echo '<hr>';
//-----------------------------------------------------
//array_merge(arrays) -> funde um ou mais arrays
//array_merge(...,...,...)
$array1 = ['osx', 'windows'];
$array2 = array('linux');
$array3 = ['solaris'];

$novo_array = array_merge($array1, $array2, $array3);
echo '<pre>';
print_r($novo_array);
echo '</pre>';

echo '<hr>';
//-----------------------------------------------------
//explode(delimitador,array) -> divide uma string baseada em um delimitador
echo $string = '26/04/2018';
$array_retorno = explode('/', $string);
echo '<pre>';
print_r($array_retorno);
echo '</pre>';
echo $array_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
echo '<hr>';
//-----------------------------------------------------
//implode(array) -> junta elementos de um array em uma string
echo $string = '26/04/2018';
$array_retorno = explode('/', $string);
echo '<pre>';
print_r($array_retorno);
echo '</pre>';
//echo $array_retorno[2] . '-' . $array_retorno[1] . '-' . $array_retorno[0];
echo '<hr>';
echo $string_retorno = implode('-', $array_retorno);

//-----------------------------------------------------

?>