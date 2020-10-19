<?php
//Encapsular um bloco de códigos com um objectivo definido

//void (sem retorno)
function exibirBoasVindas(){
    echo "Bem- vindo ao curso de PHP!<br>";
}

//return (com retorno)
function calcularAreaTerreno($largura, $comprimento){
    $area = $largura * $comprimento;
    return $area;
}

exibirBoasVindas();

echo calcularAreaTerreno(23, 32);