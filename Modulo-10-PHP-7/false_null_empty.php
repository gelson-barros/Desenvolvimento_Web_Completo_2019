<?php 
//false (true/false) - tipo variável boolean
//null e empty - valores especiais
//null !== false !== empty

$f1 = null;
$f2 = '';
$f3 = false;

//valores null
if(is_null($f1)){
    echo 'Sim, a varialvel é null';
}else{
    echo 'Não, a varialvel não é null';
}
echo '<hr>';
if (is_null($f2)) {
    echo 'Sim, a varialvel é null';
} else {
    echo 'Não, a varialvel não é null';
}
echo '<hr>';
if (is_null($f3)) {
    echo 'Sim, a varialvel é null';
} else {
    echo 'Não, a varialvel não é null';
}
echo '<hr>';

//valores vazios
if (empty($f1)) {
    echo 'Sim, a varialvel esta vazia';
} else {
    echo 'Não, a varialvel não esta vazia';
}
echo '<hr>';
if (empty($f2)) {
    echo 'Sim, a varialvel esta vazia';
} else {
    echo 'Não, a varialvel não esta vazia';
}
echo '<hr>';
if (empty($f3)) {
    echo 'Sim, a varialvel esta vazia';
} else {
    echo 'Não, a varialvel não esta vazia';
}
?>