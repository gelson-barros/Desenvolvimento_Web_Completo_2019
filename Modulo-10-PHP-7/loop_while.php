<?php 
$num = 1;
//operadores comparação / lógica
echo '--Inicio do loop ---<br/>';
/*
while ($num < 50) {
    echo "$num <br>";

    $num+=5;
}
*/
/*
while ($num < 50) {
    echo "$num <br>";

    $num += 5;
    break;
}
*/
/*
while (true) {
    echo "$num <br>";

    $num += 5;
    if ($num > 100) {
    break;
    }
}
*/
while ($num < 10) {

    
    echo "$num <br>";

    $num += 1;
    
    if ($num == 2 || $num == 6) {
        continue;
    }
    
}
echo '--Fim do loop ---';
