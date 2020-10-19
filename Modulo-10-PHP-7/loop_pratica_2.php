<?php 
//foreach é especializado em array e objecto

$funcionarios = array(
    array('nome' => 'João', 'salario' => 2500, 'data_nascimento' => '06/03/1970'),
    array('nome' => 'Maria', 'salario' =>3000, 'data_nascimento' => '14/08/1980'),
    array('nome' => 'Júlia', 'salario' => 2200, 'data_nascimento' => '23/11/1993'),
);

echo '<pre>';
print_r($funcionarios);
echo '</pre>';

foreach ($funcionarios as $idx => $funcionario) {
    /*echo '<pre>';
    var_export($funcionario);
    echo '</pre>';*/
    foreach ($funcionario as $idx2 => $valor) {
        echo "$idx2 - $valor <br/>";
    }
    echo '<hr/>';
}
