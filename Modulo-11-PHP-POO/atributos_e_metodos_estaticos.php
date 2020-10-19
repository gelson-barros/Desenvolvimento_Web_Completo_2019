<?php 
//atributo static nao esta disponivel atraves do operador ->
//metodo static nao pode utilizar o $this

class Exemplo {
    public static $atributo1 = 'Eu sou um atributo estatico';
    public $atributo2 = 'Eu sou um atributo normal';

    public static function metodo1(){
        //echo $this->atributo2;
        echo 'Eu sou um metodo estatico';
    }

    public function metodo2(){
        echo 'Eu sou um metodo normal';
    }
}

$x = new Exemplo();
echo $x->metodo1();
echo $x->metodo2();

/*
echo Exemplo::$atributo1;
echo '<br>';
Exemplo::metodo1();
*/
//Exemplo::metodo2();
