<?php 

function calcularImposto($salario){

    if($salario < 1903.99){ //isento
        $salario;
    }elseif($salario >= 1903.99 && $salario < 2826.66 ){
        $salario *=0.075;
    } elseif ($salario >= 2826.66 && $salario < 3751.06) {
        $salario *= 0.15;
    } elseif ($salario >= 3751.06 && $salario < 4664.68) {
        $salario *= 0.225;
    } elseif ($salario >= 4664.68 ) {
        $salario *= 0.275;
    }

    return $salario;

}

echo calcularImposto(2323);

?>