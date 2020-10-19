<?php 
/*
$registros = array('Título notícia 1', 'Título notícia 2', 'Título notícia 3', 'Título notícia 4');

//print_r($registros);

$idx = 0;
while($idx < 4){
    echo $registros[$idx];
    echo '<hr/>';
    $idx++;
}
*/
$registros = array(
    array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteudo notícia 1'),
    array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteudo notícia 2'),
    array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteudo notícia 3'),
    array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteudo notícia 4'),
    array('titulo' => 'Título notícia 5', 'conteudo' => 'Conteudo notícia 5')
);

echo '<pre>';
//print_r($registros);
echo '</pre>';

echo 'O array possue '. count($registros). ' registros';

$idx = 0;
/*
while($idx < count($registros)){
    echo '<h3>' .$registros[$idx]['titulo']. '</h3>';
    echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
    echo '<hr/>';
    $idx++;
}
*/

/*
do{
    echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
    echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
    echo '<hr/>';
    $idx++;
}while($idx < count($registros));
*/

for ($idx = 0; $idx < count($registros); $idx++) {

    echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
    echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
    echo '<hr/>';
}