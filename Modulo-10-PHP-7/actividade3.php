<?php
/*
$numeroAleatorio = [
    rand(1, 60),
    rand(1, 60),
    rand(1, 60),
    rand(1, 60),
    rand(1, 60),
    rand(1, 60)
];

for ($i=0; $i < count($numeroAleatorio) ; $i++) {
    echo "$numeroAleatorio[$i] ";
}
*/  

$numeroAleatorio = [];
while (count($numeroAleatorio) < 5) {
    $numeroSorteado = rand(1, 60);
    if (!in_array($numeroSorteado,$numeroAleatorio)) {
        $numeroAleatorio[] = $numeroSorteado;
    }
}
for ($i = 0; $i < count($numeroAleatorio); $i++) {
    echo "$numeroAleatorio[$i] ";
}
?>