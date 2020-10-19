<?php 

require "./biblioteca/lib1/lib1.php";
require "./biblioteca/lib2/lib2.php";

use A\Cliente as C1;//apelidar class iguais
use B\Cliente as C2;

$c = new C1();
echo '<pre>';
print_r($c);
echo '</pre>';
echo $c->__get('nome');


$c = new C2();
echo '<pre>';
print_r($c);
echo '</pre>';
echo $c->__get('nome');
?>

